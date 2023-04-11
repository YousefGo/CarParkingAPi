<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Vehicle;
use App\Observers\VehicleObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }


    public function boot()
    {
        Vehicle::observe(VehicleObserver::class);
    }
}
