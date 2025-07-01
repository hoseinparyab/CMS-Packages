<?php

use Illuminate\Support\ServiceProvider;
use Service\Cms;

class CmsServiceProviders extends ServiceProvider
{
    public function register()
    {

    }

    public function boot()
    {
        $this->app->bind('cms', function () {
            return new Cms();
        });
    }
}