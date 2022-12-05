<?php

namespace Astapovm\Wb\Library\Incomes;

use Astapovm\Wb\Library\Interfaces\RepositoryInterface;
use Astapovm\Wb\Library\Traits\RepositoryTrait;
use Astapovm\Wb\Models\WbIncome;

class IncomeRepository implements RepositoryInterface
{
    use RepositoryTrait;

    private static function checkingAvailability($incomeId,$nmId) : bool
    {
        $order = WbIncome::where('incomeId',$incomeId)->where('nmId',$nmId)->get();
        return $order->isEmpty();
    }

    public static function store($item): void
    {
        if(static::checkingAvailability($item['incomeId'],$item['nmId'])){
            WbIncome::create($item);
        }
    }

    public static function update($item): void
    {
        WbIncome::where('incomeId', $item['incomeId'])->update($item);
    }

    public static function storeOrUpdate($item): void
    {
        WbIncome::updateOrCreate(['incomeId'=> $item['incomeId']],$item);
    }

    public static function delete($item): void
    {
        WbIncome::where('incomeId', $item['incomeId'])->delete();
    }
}
