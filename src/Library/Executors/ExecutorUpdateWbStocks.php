<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Stocks;

class ExecutorUpdateWbStocks implements ExecutorInterface
{
    public static function run(): void
    {
        Stocks::getStocks(config('wb_package')['date']['stocks']['change'], 'Astapovm\Wb\Library\Stocks\StockRepository::storeOrUpdateSeveral');
    }
}
