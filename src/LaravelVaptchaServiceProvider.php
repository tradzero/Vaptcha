<?php

namespace Newone\Vaptcha;

use Illuminate\Support\ServiceProvider;

class LaravelVaptchaServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/vaptcha.php' => config_path('vaptcha.php'),
        ]);
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    public function register()
    {
        //
    }
}
