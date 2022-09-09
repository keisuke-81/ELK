<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;//⬅︎を追加記載(❶)
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
        //
        Schema::defaultStringLength(191);//⬅︎を追加記載(❷)
    }
}
