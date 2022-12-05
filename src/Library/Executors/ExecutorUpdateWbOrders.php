<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Orders;

class ExecutorUpdateWbOrders implements ExecutorInterface
{
    public static function run(): void
    {
        Orders::getOrders(config('wb')['date']['orders']['change'],0,'Astapovm\Wb\Library\Orders\OrderRepository::storeOrUpdateSeveral');
    }
}
