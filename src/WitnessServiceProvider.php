<?php


namespace Ahmeddabak\LaravelWitness;


use Illuminate\Support\ServiceProvider;

class WitnessServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        if ($this->app->runningInConsole()) {
//
//        }

//        DB::enableQueryLog();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

//        $this->publishes([
//            __DIR__ . '/../database/migrations/create_events_table.php' => database_path('migrations/'.date('Y_m_d_His').'_create_events_table.php'),
//        ], 'migrations');

    }

    public function register()
    {
        $this->app->bind('witness', function () {
            return new Witness();
        });
    }
}
