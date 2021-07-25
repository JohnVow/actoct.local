<?php

namespace AndreiShilov\UTMTracker\Models;

use October\Rain\Database\Traits\Validation;

class Value extends \Model
{
    use Validation;

    public $table = 'andreishilov_utmtracker_values';

    public $attributeNames = [
        'value' => 'andreishilov.utmtracker::lang.models.value.attributes.utm_source',
        'utm_source' => 'andreishilov.utmtracker::lang.models.value.attributes.value',
    ];

    public $rules = [
        'utm_source' => 'required|max:128',
        'value' => 'required|max:512',
    ];

    public $belongsTo = [
        'field' => [
            'AndreiShilov\UTMTracker\Models\Field'
        ]
    ];
}
