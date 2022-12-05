<?php

namespace Astapovm\Wb\Providers;

use Astapovm\Wb\Console\Commands\UpdateWbIncomesCommand;
use Astapovm\Wb\Console\Commands\UpdateWbOrdersCommand;
use Astapovm\Wb\Console\Commands\UpdateWbSalesCommand;
use Astapovm\Wb\Console\Commands\UpdateWbStocksCommand;
use Illuminate\Support\ServiceProvider;

class WbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->publishes([
            __DIR__ . '/../config/wb_package.php' => config_path('wb_package.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([
                UpdateWbIncomesCommand::class,
                UpdateWbOrdersCommand::class,
                UpdateWbStocksCommand::class,
                UpdateWbSalesCommand::class,
            ]);
        }
    }
}
