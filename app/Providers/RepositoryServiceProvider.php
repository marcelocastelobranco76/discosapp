<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(\App\Repositories\DiscoRepository::class, \App\Repositories\DiscoRepositoryEloquent::class);
        $this->app->bind(\App\Repositories\UserDiscoRepository::class, \App\Repositories\UserDiscoRepositoryEloquent::class);
        //:end-bindings:
    }
}
