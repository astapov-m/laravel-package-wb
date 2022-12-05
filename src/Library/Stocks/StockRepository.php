<?php

namespace Astapovm\Wb\Library\Stocks;

use Astapovm\Wb\Library\Interfaces\RepositoryInterface;
use Astapovm\Wb\Library\Traits\RepositoryTrait;
use Astapovm\Wb\Models\WbOrder;
use Astapovm\Wb\Models\WbStock;

class StockRepository implements RepositoryInterface
{
    use RepositoryTrait;

    private static function checkingAvailability($nmId,$warehouse) : bool
    {
        $order = WbStock::where('nmId',$nmId)->where('warehouse',$warehouse)->get();
        return $order->isEmpty();
    }

    public static function store($item) : void
    {
        if(static::checkingAvailability($item['nmId'],$item['warehouse'])){
            WbStock::create($item);
        }
    }

    public static function update($item) : void
    {
        WbStock::where('nmId', $item['nmId'])->where('warehouse',$item['warehouse'])->update($item);
    }

    public static function storeOrUpdate($item) : void
    {
        WbStock::updateOrCreate(['nmId'=> $item['nmId'] ,'warehouse'=>$item['warehouse']],$item);
    }

    public static function delete($item) : void
    {
        WbStock::where('nmId', $item['nmId'])->where('warehouse',$item['warehouse'])->delete();
    }
}
