<?php

namespace IurieMalai\StatamicPeakManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IurieMalai\StatamicPeakManager\Commands\StatamicPeakManagerCommand;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_statamic_peak_manager_table')
            ->hasCommand(StatamicPeakManagerCommand::class);
    }
}
