<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Incomes;
use Wb\Entities\Orders;
use Wb\Entities\Sales;
use Wb\Entities\Stocks;

class ExecutorStart implements ExecutorInterface
{
    public static function run(): void
    {
        Orders::getOrders(config('wb')['date']['available'],0,'Astapovm\Wb\Library\Orders\OrderRepository::storeSeveral');
        Stocks::getStocks(date('Y-m-d',time()), 'Astapovm\Wb\Library\Stocks\StockRepository::storeSeveral');
        Sales::getSales(config('wb')['date']['available'], 0 ,'Astapovm\Wb\Library\Sales\SaleRepository::storeSeveral');
        Incomes::getIncomes(config('wb')['date']['available'],'Astapovm\Wb\Library\Incomes\IncomeRepository::storeSeveral');
    }
}
