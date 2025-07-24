<?php

namespace IurieMalai\StatamicPeakManager;

use IurieMalai\StatamicPeakManager\App\Console\Commands\StatamicPeakManagerCommand;
use IurieMalai\StatamicPeakManager\App\Console\Commands\PostInstall\CollectAvailableLangLocales;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class StatamicPeakManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('statamic-peak-manager')
            // ->hasConfigFile()
            // ->hasViews()
            // ->hasMigration('create_statamic_peak_manager_table')
            ->hasCommands([
                StatamicPeakManagerCommand::class,
                CollectAvailableLangLocales::class,
            ]);
    }
}
