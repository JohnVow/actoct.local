<?php

namespace AndreiShilov\UTMTracker\Models;

use October\Rain\Database\Traits\Validation;

class Field extends \Model
{
    use Validation;

    public $table = 'andreishilov_utmtracker_fields';

    public $attributeNames = [
        'code' => 'andreishilov.utmtracker::lang.models.field.attributes.code',
        'name' => 'andreishilov.utmtracker::lang.models.field.attributes.name',
        'default_value' => 'andreishilov.utmtracker::lang.models.field.attributes.default_value',
    ];

    public $rules = [
        'code' => 'required|unique:andreishilov_utmtracker_fields,code|max:16',
        'name' => 'required|max:128',
        'default_value' => 'required|max:512',
    ];

    public $hasMany = [
        'values' => [
            'AndreiShilov\UTMTracker\Models\Value',
            'delete' => true,
        ]
    ];
}
