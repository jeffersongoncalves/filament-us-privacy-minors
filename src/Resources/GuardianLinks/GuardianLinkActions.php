<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action as TableAction;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Support\Labels;
use JeffersonGoncalves\UsPrivacyMinors\Models\GuardianLink;

class GuardianLinkActions
{
    /**
     * @param  class-string<Action|TableAction>  $class
     * @return list<Action|TableAction>
     */
    public static function all(string $class = Action::class): array
    {
        return [static::verify($class), static::revoke($class)];
    }

    public static function verify(string $class = Action::class): Action|TableAction
    {
        return $class::make('verify')
            ->label(Labels::get('actions.verify'))
            ->icon('heroicon-o-check-badge')
            ->color('success')
            ->requiresConfirmation()
            ->modalDescription(Labels::get('help.verified'))
            ->visible(fn (GuardianLink $record): bool => $record->verified_at === null && $record->revoked_at === null)
            ->action(function (GuardianLink $record): void {
                $record->verify();
                Notification::make()->success()->title(Labels::get('notifications.verified'))->send();
            });
    }

    public static function revoke(string $class = Action::class): Action|TableAction
    {
        return $class::make('revoke')
            ->label(Labels::get('actions.revoke'))
            ->icon('heroicon-o-no-symbol')
            ->color('danger')
            ->requiresConfirmation()
            ->modalDescription(Labels::get('help.revoke'))
            ->visible(fn (GuardianLink $record): bool => $record->revoked_at === null)
            ->action(function (GuardianLink $record): void {
                $record->revoke();
                Notification::make()->success()->title(Labels::get('notifications.revoked'))->send();
            });
    }
}
