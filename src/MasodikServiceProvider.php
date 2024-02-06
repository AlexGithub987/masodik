<?php

namespace Alex\Masodik;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Alex\Masodik\Commands\MasodikCommand;

class MasodikServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('masodik')
            ->hasConfigFile()
            ->hasViews()
           // ->hasMigration('create_masodik_table')
            ->hasCommand(MasodikCommand::class);
    }
}
