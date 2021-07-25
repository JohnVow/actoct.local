<?php
namespace AndreiShilov\UTMSaver\Facades;

use October\Rain\Support\Facade;

/**
 * @method static string get($tag)
 * @method static array all()
 * @method static void save()
 */
class UTM extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'AndreiShilov.UTM';
    }
}