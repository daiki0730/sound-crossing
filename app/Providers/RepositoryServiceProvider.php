<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Repository\Admin\AdminContract::class => \App\Repository\Admin\EloquentAdminRepository::class,
        \App\Repository\User\UserContract::class => \App\Repository\User\EloquentUserRepository::class
    ];

    /**
     * Register services.
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
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
