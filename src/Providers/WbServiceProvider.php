<?php

namespace Astapovm\Wb\Providers;

use Astapovm\Wb\Console\Commands\UpdateWbIncomesCommand;
use Astapovm\Wb\Console\Commands\UpdateWbOrdersCommand;
use Astapovm\Wb\Console\Commands\UpdateWbSalesCommand;
use Astapovm\Wb\Console\Commands\UpdateWbStocksCommand;
use Illuminate\Support\ServiceProvider;
use Wb\Config\WbConfigSdk;
use Wb\Library\Wb;

class WbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Wb::class, function ($app) {
            return new Wb($app->make(WbConfigSdk::class));
        });

        $this->app->bind(WbConfigSdk::class, function () {
            return new WbConfigSdk(env('WB_API_KEY'));
        });

        $this->app->make(Wb::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'wb_v1-migrations');

        $this->publishes([
            __DIR__.'/../Models/' => base_path('app/Models/Fbo')]);

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
