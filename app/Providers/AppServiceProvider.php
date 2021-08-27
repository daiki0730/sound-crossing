<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Services\Admin\AdminServiceInterface::class => \App\Services\Admin\AdminService::class,
        \App\Services\User\UserServiceInterface::class => \App\Services\User\UserService::class
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->bindings as $abstruct => $concrete) {
            $this->app->bind($abstruct, $concrete);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
