<?php

namespace App\Providers;

use App\Repositories\ReportRepository;
use App\Repositories\ReportRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $repository = new ReportRepository();
        $this->app->instance(ReportRepositoryInterface::class, $repository);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
