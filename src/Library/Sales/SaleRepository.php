<?php

namespace Astapovm\Wb\Library\Sales;

use Astapovm\Wb\Library\Interfaces\RepositoryInterface;
use Astapovm\Wb\Library\Traits\RepositoryTrait;
use App\Models\Fbo\WbSale;

class SaleRepository implements RepositoryInterface
{
    use RepositoryTrait;

    private static function checkingAvailability($saleID) : bool
    {
        $order = WbSale::where('saleID',$saleID)->get();
        return $order->isEmpty();
    }

    public static function store($item): void
    {
        if(static::checkingAvailability($item['saleID'])){
            WbSale::create($item);
        }
    }

    public static function update($item): void
    {
        WbSale::where('saleID', $item['saleID'])->update($item);
    }

    public static function storeOrUpdate($item): void
    {
        WbSale::updateOrCreate(['saleID'=> $item['saleID']],$item);
    }

    public static function delete($item): void
    {
        WbSale::where('saleID', $item['saleID'])->update();
    }
}
