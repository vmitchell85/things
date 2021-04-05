<?php

namespace Vmitchell85\Things;

use Illuminate\Support\Facades\Config;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ThingsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('things')
            ->hasConfigFile();
    }

    public function bootingPackage()
    {
        Config::set('database.connections.things', Config::get('things.database'));
    }
}
