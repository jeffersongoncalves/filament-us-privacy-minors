<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\OptIns;

use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\OptIns\Pages\ListOptIns;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Support\Labels;
use JeffersonGoncalves\Filament\UsPrivacyMinors\UsPrivacyMinorsPlugin;
use JeffersonGoncalves\UsPrivacyMinors\Models\OptIn;

/**
 * Read-only: opt-ins come from your app's flow (UsPrivacyMinors::optIn()). The panel can only revoke them.
 */
class OptInResource extends Resource
{
    protected static ?string $model = OptIn::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-thumb-up';

    protected static ?string $slug = 'minor-opt-ins';

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->with(['subject', 'guardianLink.guardian']))
            ->columns([
                TextColumn::make('subject_id')
                    ->label(Labels::get('fields.subject'))
                    ->formatStateUsing(fn (OptIn $record): string => Labels::subject($record->subject, $record->subject_id)),
                TextColumn::make('authorized_by')
                    ->label(Labels::get('fields.authorized_by'))
                    ->state(fn (OptIn $record): string => $record->byParent()
                        ? Labels::get('authorized_by.parent').': '.Labels::subject($record->guardianLink?->guardian, $record->guardianLink?->guardian_id)
                        : Labels::get('authorized_by.consumer')),
                TextColumn::make('opted_in_at')
                    ->label(Labels::get('fields.opted_in_at'))
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('revoked_at')
                    ->label(Labels::get('fields.revoked_at'))
                    ->dateTime()
                    ->placeholder('-')
                    ->sortable(),
            ])
            ->defaultSort('opted_in_at', 'desc')
            ->filters([
                TernaryFilter::make('active')
                    ->label(Labels::get('filters.active'))
                    ->default(true)
                    ->queries(
                        true: fn (Builder $query): Builder => $query->whereNull('revoked_at'),
                        false: fn (Builder $query): Builder => $query->whereNotNull('revoked_at'),
                    ),
            ])
            ->actions([
                static::revokeAction(),
            ]);
    }

    public static function revokeAction(): Action
    {
        return Action::make('revoke')
            ->label(Labels::get('actions.revoke_opt_in'))
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->modalDescription(Labels::get('help.revoke_opt_in'))
            ->visible(fn (OptIn $record): bool => $record->revoked_at === null)
            ->action(function (OptIn $record): void {
                $record->forceFill(['revoked_at' => now()])->save();
                Notification::make()->success()->title(Labels::get('notifications.opt_in_revoked'))->send();
            });
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOptIns::route('/'),
        ];
    }

    public static function getModelLabel(): string
    {
        return Labels::get('opt_ins.label');
    }

    public static function getPluralModelLabel(): string
    {
        return Labels::get('opt_ins.plural_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return UsPrivacyMinorsPlugin::get()->getNavigationGroup();
    }

    public static function getNavigationSort(): ?int
    {
        return UsPrivacyMinorsPlugin::get()->getNavigationSort();
    }
}
