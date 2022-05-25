<?php

namespace Simple\Login;
use Illuminate\Support\ServiceProvider;

class SimpleLoginServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }

    public function register()
    {
        parent::register(); // TODO: Change the autogenerated stub
    }
}
