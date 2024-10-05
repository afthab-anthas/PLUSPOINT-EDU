<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\AddressCategory;

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
        // Share $addresses with specific views or all views
        View::composer('*', function ($view) {
            $categories = AddressCategory::with('addresses')->get()->groupBy('address_name');
            $view->with('categories', $categories);
        });
    }
}
