<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        \App\Repositories\Admin\AdminContract::class => \App\Repositories\Admin\EloquentAdminRepository::class,
        \App\Repositories\User\UserContract::class => \App\Repositories\User\EloquentUserRepository::class
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
