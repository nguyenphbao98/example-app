<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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
        // if (env('APP_ENV') === 'local') {
        //     DB::connection();
        //     DB::enableQueryLog();
        //     Event::listen(\Illuminate\Foundation\Http\Events\RequestHandled::class, function ($event) {
        //         if ($event->request->has('sql-debug')) { 
        //             $queries = DB::getQueryLog();
        //             dd($queries);
        //         }
        //     });
        // }
    }
}
