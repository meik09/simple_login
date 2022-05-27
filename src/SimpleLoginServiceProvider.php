<?php

namespace Simple\Login;
use Illuminate\Support\ServiceProvider;

class SimpleLoginServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        $this->publishes([
            __DIR__.'/database/' => database_path()
        ], 'database');
    }
}
