<?php

namespace AndreiShilov\UTMTracker\Classes;

use AndreiShilov\UTMTracker\Models\Field;
use AndreiShilov\UTMTracker\Models\Value;
use AndreiShilov\UTMSaver\Facades\UTM;
use System\Classes\PluginManager;

class UTMTracker
{
    public static function get(string $fieldCode)
    {
        $pluginManager = PluginManager::instance();
        if (
            $pluginManager->hasPlugin('AndreiShilov.UTMSaver') &&
            !$pluginManager->isDisabled('AndreiShilov.UTMSaver')
        ) {
            $utmSource = UTM::get('utm_source');
            if (strlen($utmSource) > 0) {
                $query = Value::query();
                $query
                    ->join('andreishilov_utmtracker_fields', function ($join) {
                        $join->on('andreishilov_utmtracker_values.field_id', '=', 'andreishilov_utmtracker_fields.id');
                    })
                    ->where('andreishilov_utmtracker_fields.code', '=', $fieldCode)
                    ->where('andreishilov_utmtracker_values.utm_source', '=', $utmSource);

                $value = $query->first();
                if ($value !== null) {
                    return $value->value;
                }
            }
        }

        $field = Field::whereCode($fieldCode)->first();
        if ($field !== null) {
            return $field->default_value;
        }

        return null;
    }
}