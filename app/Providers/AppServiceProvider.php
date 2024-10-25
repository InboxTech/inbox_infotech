<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use App\Models\Product;
use App\Models\Industrie;
use Illuminate\Support\Facades\URL;

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
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
        
        view()->composer('*',function($view) {
            $view->with('myservices', Service::where('status',1)->get());
    		$view->with('myproducts', Product::where('status',1)->get());
    		$view->with('industries', Industrie::where('status',1)->get());
        });
    }
}
