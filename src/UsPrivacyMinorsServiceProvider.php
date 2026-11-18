<?php

namespace JeffersonGoncalves\Filament\UsPrivacyMinors;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UsPrivacyMinorsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-us-privacy-minors')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
