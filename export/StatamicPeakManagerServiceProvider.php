<?php

namespace IurieMalai\StatamicPeakManager;

use IurieMalai\StatamicPeakManager\Console\Commands\StatamicPeakManagerCommand;
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
            ->hasCommand(StatamicPeakManagerCommand::class);
    }
}
