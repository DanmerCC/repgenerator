<?php

namespace DanmerCC\Repogenerator;

use Illuminate\Support\ServiceProvider;
use Console\InstallCommand;
use DanmerCC\Repogenerator\Command\Generator;

class RepoGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            Generator::class
        ]);
    }
}
