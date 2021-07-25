<?php
namespace AndreiShilov\UTMSaver;

use AndreiShilov\UTMSaver\Classes\UTM;
use Cms\Classes\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'andreishilov.utmsaver::lang.plugin.name',
            'description' => 'andreishilov.utmsaver::lang.plugin.description',
            'author' => 'andreishilov.utmsaver::lang.plugin.author',
            'icon' => 'icon-magnet'
        ];
    }

    public function boot()
    {
        if (!App::runningInBackend()) {
            Event::listen('cms.page.start', function (Controller $controller) {
                Facades\UTM::save();
            });
        }
    }

    public function register()
    {
        App::singleton('AndreiShilov.UTM', function () {
            return UTM::instance();
        });
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'label' => 'andreishilov.utmsaver::lang.settings.label',
                'description' => 'andreishilov.utmsaver::lang.settings.description',
                'icon' => 'icon-magnet',
                'class' => 'AndreiShilov\UTMSaver\Models\Settings',
                'permissions' => ['andreishilov.utmsaver.settings'],
            ]
        ];
    }

    public function registerPermissions()
    {
        return [
            'andreishilov.utmsaver.settings' => [
                'label' => 'andreishilov.utmsaver::lang.plugin.name',
            ],
        ];
    }

    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'utm' => function ($utmTag) {
                    return Facades\UTM::get($utmTag);
                },
            ]
        ];
    }
}
