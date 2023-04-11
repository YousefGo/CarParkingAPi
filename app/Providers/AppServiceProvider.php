<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Vehicle;
use App\Models\Parking;
use App\Observers\VehicleObserver;
use App\Observers\ParkingObserver;

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
        Parking::observe(ParkingObserver::class);
    }
}
