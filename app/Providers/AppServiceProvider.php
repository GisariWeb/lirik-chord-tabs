<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Response;

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
        // force use https
        \Illuminate\Support\Facades\URL::forceScheme('https');

        Response::macro('success', function($data, $message = 'Success', $code = 200){
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data
            ], $code);
        });

        Response::macro('error', function($data, $message = 'Error', $code = 400){
            return response()->json([
                'success' => false,
                'message' => $message,
                'data' => $data
            ], $code);
        });

    }
}
