<?php


namespace PhpMdc;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views/components', 'mdcv');

        Blade::componentNamespace('PhpMdc\\Components', 'PhpMdc');
        Blade::componentNamespace('PhpMdc\\Components', 'mdc');
    }
}
