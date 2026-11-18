<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks;

use BackedEnum;
use Filament\Actions\ActionGroup;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\Pages\CreateGuardianLink;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\Pages\ListGuardianLinks;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Support\Labels;
use JeffersonGoncalves\Filament\UsPrivacyMinors\UsPrivacyMinorsPlugin;
use JeffersonGoncalves\UsPrivacyMinors\Models\GuardianLink;

class GuardianLinkResource extends Resource
{
    protected static ?string $model = GuardianLink::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $slug = 'guardian-links';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                Labels::subjectSelect('minor_id')
                    ->label(Labels::get('fields.minor')),
                Labels::subjectSelect('guardian_id')
                    ->label(Labels::get('fields.guardian'))
                    ->different('minor_id'),
                TextInput::make('relationship')
                    ->label(Labels::get('fields.relationship'))
                    ->maxLength(255),
                Toggle::make('verified')
                    ->label(Labels::get('fields.verified'))
                    ->helperText(Labels::get('help.verified'))
                    ->dehydrated(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query): Builder => $query->with(['minor', 'guardian']))
            ->columns([
                TextColumn::make('minor_id')
                    ->label(Labels::get('fields.minor'))
                    ->formatStateUsing(fn (GuardianLink $record): string => Labels::subject($record->minor, $record->minor_id)),
                TextColumn::make('guardian_id')
                    ->label(Labels::get('fields.guardian'))
                    ->formatStateUsing(fn (GuardianLink $record): string => Labels::subject($record->guardian, $record->guardian_id)),
                TextColumn::make('relationship')
                    ->label(Labels::get('fields.relationship'))
                    ->placeholder('-'),
                TextColumn::make('status')
                    ->label(Labels::get('fields.status'))
                    ->state(fn (GuardianLink $record): string => Labels::linkStatus($record))
                    ->formatStateUsing(fn (string $state): string => Labels::get("status.{$state}"))
                    ->color(fn (string $state): string => Labels::statusColor($state))
                    ->badge(),
                TextColumn::make('verified_at')
                    ->label(Labels::get('fields.verified_at'))
                    ->dateTime()
                    ->placeholder('-'),
                TextColumn::make('created_at')
                    ->label(Labels::get('fields.created_at'))
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('status')
                    ->label(Labels::get('fields.status'))
                    ->options([
                        'pending' => Labels::get('status.pending'),
                        'active' => Labels::get('status.active'),
                        'revoked' => Labels::get('status.revoked'),
                    ])
                    ->query(fn (Builder $query, array $data): Builder => match ($data['value'] ?? null) {
                        'pending' => $query->whereNull('verified_at')->whereNull('revoked_at'),
                        'active' => $query->whereNotNull('verified_at')->whereNull('revoked_at'),
                        'revoked' => $query->whereNotNull('revoked_at'),
                        default => $query,
                    }),
            ])
            ->recordActions([
                ActionGroup::make(GuardianLinkActions::all()),
            ]);
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGuardianLinks::route('/'),
            'create' => CreateGuardianLink::route('/create'),
        ];
    }

    public static function getModelLabel(): string
    {
        return Labels::get('guardians.label');
    }

    public static function getPluralModelLabel(): string
    {
        return Labels::get('guardians.plural_label');
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
