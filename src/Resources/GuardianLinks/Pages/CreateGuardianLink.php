<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use JeffersonGoncalves\Filament\UsPrivacyMinors\Resources\GuardianLinks\GuardianLinkResource;
use JeffersonGoncalves\Filament\UsPrivacyMinors\UsPrivacyMinorsPlugin;
use JeffersonGoncalves\UsPrivacyMinors\MinorsManager;

class CreateGuardianLink extends CreateRecord
{
    protected static string $resource = GuardianLinkResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $model = UsPrivacyMinorsPlugin::get()->getSubjectModel();

        return app(MinorsManager::class)->link(
            $model::query()->findOrFail($data['minor_id']),
            $model::query()->findOrFail($data['guardian_id']),
            filled($data['relationship'] ?? null) ? $data['relationship'] : null,
            (bool) ($this->data['verified'] ?? false),
        );
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
