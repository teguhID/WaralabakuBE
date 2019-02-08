<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\DataWaralabaModel;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $allData = DataWaralabaModel::select('id')->count();
        View::share('key', $allData);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
