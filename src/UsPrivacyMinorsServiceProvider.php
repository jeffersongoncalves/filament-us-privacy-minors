<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class UsPrivacyMinorsServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-us-privacy-minors';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
