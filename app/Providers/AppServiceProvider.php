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
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
