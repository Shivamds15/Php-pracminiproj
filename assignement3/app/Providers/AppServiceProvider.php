<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\FormDataRepositoryInterface;
use App\Repositories\FormDataRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FormDataRepositoryInterface::class, FormDataRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
