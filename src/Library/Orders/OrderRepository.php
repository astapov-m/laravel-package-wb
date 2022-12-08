<?php

namespace Astapovm\Wb\Library\Orders;

use Astapovm\Wb\Library\Interfaces\RepositoryInterface;
use Astapovm\Wb\Library\Traits\RepositoryTrait;
use App\Models\Fbo\WbOrder;

class OrderRepository implements RepositoryInterface
{
    use RepositoryTrait;

    private static function checkingAvailability($odid) : bool
    {
        $order = WbOrder::where('odid',$odid)->get();
        return $order->isEmpty();
    }

    public static function store($item) : void
    {
        if(static::checkingAvailability($item['odid'])){
            WbOrder::create($item);
        }
    }

    public static function update($item) : void
    {
        WbOrder::where('odid', $item['odid'])->update($item);
    }

    public static function storeOrUpdate($item) : void
    {
        WbOrder::updateOrCreate(['odid'=> $item['odid']],$item);
    }

    public static function delete($item) : void
    {
        WbOrder::where('odid', $item['odid'])->delete();
    }

}
