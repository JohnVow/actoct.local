<?php namespace ArtDark\EasyMarket\Components;

use Cms\Classes\ComponentBase;


class Button extends ComponentBase
{
    public $type;
    public $item_id;

    public function componentDetails()
    {
        return [
            'name'          => 'Button',
            'description'   => 'artdark.easymarket::lang.components.button-description',
        ];
    }

    public function defineProperties()
    {
        return [
            'type' => [
                'title'       => 'artdark.easymarket::lang.components.type-name',
                'description' => 'artdark.easymarket::lang.components.type-description',
                'type'        => 'dropdown',
                'default'     => 'reviews',
                'options'     => ['order'=>'artdark.easymarket::lang.order.name',
                    'required'=>'artdark.easymarket::lang.required.name',
                    'reviews'=>'artdark.easymarket::lang.reviews.name'],
            ],

        ];
    }


    public function onRun() {
        $this->type = $this->property('type');
        $this->item_id = $this->property('item_id');

    }



}