<?php
namespace AndreiShilov\UTMSaver\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'andreishilov_utmsaver_settings';

    public $settingsFields = 'fields.yaml';
}