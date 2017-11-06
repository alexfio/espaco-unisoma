<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Persistence\PersistenceMachine;
use App\Persistence\Mappers\Eloquent\PersistenceMachineEloquent;

class PersistenceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PersistenceMachine::class, PersistenceMachineEloquent::class);
    }
}
