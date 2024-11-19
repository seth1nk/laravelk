<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Calculators\Calcul;
use App\Calculators\Slo;
use App\Calculators\Vich;
use App\Calculators\Umn;
use App\Calculators\Del;
use App\Workers\Worker;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Calcul::class, function ($app) {
            return new Calcul(
                $app->make(Slo::class),
                $app->make(Vich::class),
                $app->make(Umn::class),
                $app->make(Del::class)
            );
        });

        $this->app->singleton(Worker::class, function ($app) {
            return new Worker($app->make(Calcul::class));
        });
    }

    public function boot()
    {
        //
    }
}
