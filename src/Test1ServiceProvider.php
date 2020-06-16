<?php
namespace Zjb\Test1;

use Illuminate\Support\ServiceProvider;

class Test1ServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('test1', function () {
            return new Test1();
        });
    }
}
