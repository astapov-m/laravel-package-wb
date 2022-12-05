<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Sales;

class ExecutorUpdateWbSales implements ExecutorInterface
{
    public static function run(): void
    {
        Sales::getSales(config('wb')['date']['sales']['change'], 0 ,'Astapovm\Wb\Library\Sales\SaleRepository::storeOrUpdateSeveral');
    }
}
