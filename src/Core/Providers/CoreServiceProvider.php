<?php

namespace Kcms\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Kcms\Core\Command;

class CoreServiceProvider extends ServiceProvider{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands(InstallCommand::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }

    
}