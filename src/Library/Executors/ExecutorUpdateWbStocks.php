<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Stocks;

class ExecutorUpdateWbStocks implements ExecutorInterface
{
    public static function run(): void
    {
        Stocks::getStocks(date('Y-m-d',time()), 'Astapovm\Wb\Library\Stocks\StockRepository::storeOrUpdateSeveral');
    }
}
