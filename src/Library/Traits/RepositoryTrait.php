<?php

namespace Astapovm\Wb\Library\Traits;

trait RepositoryTrait
{
    public static function storeSeveral($items): void
    {
        foreach ($items as $item){
            static::store($item);
        }
    }

    public static function storeOrUpdateSeveral($items): void
    {
        foreach ($items as $item){
            static::storeOrUpdate($item);
        }
    }

    public static function updateSeveral($items): void
    {
        foreach ($items as $item){
            static::update($item);
        }
    }

    public static function deleteSeveral($items): void
    {
        foreach ($items as $item){
            static::delete($item);
        }
    }
}
