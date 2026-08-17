<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
        // Share services index with all views for navbar dynamic links
        view()->composer('*', function ($view) {
            $services = [];
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('services')) {
                    $services = \App\Models\Service::select('id', 'title', 'slug')->get()->toArray();
                }
            } catch (\Exception $e) {
                // Ignore during initial setup if DB is not ready
            }
            $view->with('servicesList', $services);
        });
    }
}
