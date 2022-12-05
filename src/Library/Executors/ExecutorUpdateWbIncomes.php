<?php

namespace Astapovm\Wb\Library\Executors;

use Astapovm\Wb\Library\Interfaces\ExecutorInterface;
use Astapovm\Wb\Models\WbIncome;
use Wb\Entities\Incomes;

class ExecutorUpdateWbIncomes implements ExecutorInterface
{
    public static function run(): void
    {
        Incomes::getIncomes(config('wb')['date']['incomes']['change'],'Astapovm\Wb\Library\Incomes\IncomeRepository::storeOrUpdateSeveral');
    }
}
