<?php

namespace Konnco\FilamentSafelyDelete;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Facades\FilamentView;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentSafelyDeleteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-safely-delete')
            ->hasConfigFile()
            ->hasTranslations();
    }
}
