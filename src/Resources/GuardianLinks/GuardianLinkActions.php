<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Support\Labels;
use JeffersonGoncalves\UsPrivacyMinors\Models\GuardianLink;

class GuardianLinkActions
{
    /**
     * @return list<Action>
     */
    public static function all(): array
    {
        return [static::verify(), static::revoke()];
    }

    public static function verify(): Action
    {
        return Action::make('verify')
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

    public static function revoke(): Action
    {
        return Action::make('revoke')
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
