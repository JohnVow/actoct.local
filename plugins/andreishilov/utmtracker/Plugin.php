<?php

namespace AndreiShilov\UTMTracker;

use AndreiShilov\UTMTracker\Models\Value;
use Backend\Facades\Backend;
use AndreiShilov\UTMTracker\Classes\UTMTracker;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['AndreiShilov.UTMSaver'];

    public function pluginDetails()
    {
        return [
            'name' => 'andreishilov.utmtracker::lang.plugin.name',
            'description' => 'andreishilov.utmtracker::lang.plugin.description',
            'author' => 'andreishilov.utmtracker::lang.plugin.author',
            'icon' => 'icon-magnet'
        ];
    }

    public function boot()
    {
        Value::extend(function ($model) {
            $model->bindEvent('model.beforeValidate', function () use ($model) {
                $model->rules['utm_source'] .= '|unique:andreishilov_utmtracker_values,utm_source,NULL,id,field_id,' . $model->field_id;
            });
        });
    }

    public function registerPermissions()
    {
        return [
            'andreishilov.utmtracker.edit' => [
                'label' => 'andreishilov.utmtracker::lang.plugin.name',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'menu' => [
                'label' => 'UTM Tracker',
                'url' => Backend::url('andreishilov/utmtracker/fields'),
                'icon' => 'icon-link',
                'iconSvg' => '/plugins/andreishilov/utmtracker/assets/images/utmtracker-icon.svg',
                'permissions' => ['andreishilov.utmtracker.*'],
                'order' => 500,
            ]
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'utmTracker' => function (string $fieldCode) {
                    return UTMTracker::get($fieldCode);
                },
            ]
        ];
    }
}
