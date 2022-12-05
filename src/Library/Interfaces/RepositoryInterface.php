<?php

namespace Astapovm\Wb\Library\Interfaces;

interface RepositoryInterface
{
    public static function store($item):void;
    public static function update($item):void;
    public static function delete($item):void;
    public static function storeOrUpdate($item):void;
    public static function storeSeveral($items):void;
    public static function updateSeveral($item):void;
    public static function deleteSeveral($item):void;
    public static function storeOrUpdateSeveral($item):void;
}
