<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            \App\Repositories\MemberRepositoryInterface::class,
            \App\Repositories\MemberRepository::class
        );
        
        $this->app->bind(
            \App\Repositories\MovieRepositoryInterface::class,
            \App\Repositories\MovieRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}


