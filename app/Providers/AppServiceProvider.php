<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Debug\ExceptionHandler;
use App\Http\Kernel;
use App\Console\Kernel as ConsoleKernelClass;
use App\Exceptions\Handler;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(HttpKernel::class, Kernel::class);
        $this->app->singleton(ConsoleKernel::class, ConsoleKernelClass::class);
        $this->app->singleton(ExceptionHandler::class, Handler::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
