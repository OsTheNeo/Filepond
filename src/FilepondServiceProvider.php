<?php

namespace OsTheNeo\Filepond;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FilepondServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        $this->publishes([__DIR__ . '/../config/nova-filepond.php' => config_path('nova-filepond.php'),], 'config');
        $this->app->booted(function () { $this->routes();});

        Nova::serving(function (ServingNova $event) {
            Nova::script('filepond-main', __DIR__ . '/../dist/js/field.js');

            if (config('nova-filepond.doka.enabled')) {
                Nova::script('filepond-doka', __DIR__ . '/../dist/js/doka.min.js');
                Nova::style('filepond-doka-style', __DIR__ . '/../dist/css/doka.min.css');
            }

        });

    }

    /**
     * Register the tool's routes.
     *
     * @return void
     */
    protected function routes() {
        if ($this->app->routesAreCached()) return;
        Route::middleware([ 'nova' ])->prefix('nova-vendor/filepond')->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        $this->mergeConfigFrom(__DIR__ . '/../config/nova-filepond.php', 'nova-filepond');
    }
}
