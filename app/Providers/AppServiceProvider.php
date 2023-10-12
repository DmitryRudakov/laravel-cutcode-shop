<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Enable on local server
        if (app()->isLocal()) {
            Model::shouldBeStrict();
        }

        DB::whenQueryingForLongerThan(500, function (Connection $connection, QueryExecuted $event) {
            // @todo: 3rd lesson
        });
    }
}
