<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Wb\Entities\Incomes;

class ExecutorUpdateWbIncomes implements ExecutorInterface
{
    public static function run(): void
    {
        Incomes::getIncomes(config('wb_package')['date']['incomes']['change'],'Astapovm\Wb\Library\Incomes\IncomeRepository::storeOrUpdateSeveral');
    }
}
