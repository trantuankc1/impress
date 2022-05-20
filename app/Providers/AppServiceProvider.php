<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Admin\Contracts\Services\ProductService;
use Modules\Admin\Services\ProductServiceImpl;

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

    }
}
