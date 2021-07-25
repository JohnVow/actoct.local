<?php namespace ArtDark\EasyMarket\Components;

use Cms\Classes\ComponentBase;
use ArtDark\EasyMarket\Models\Setting;

class Modal extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'          => 'Modals',
            'description'   => 'artdark.easymarket::lang.components.models-description',
        ];
    }

    public function defineProperties()
    {
        return [
            'jquery' => [
                'title'       => 'artdark.easymarket::lang.components.enable_js',
                'description' => 'artdark.easymarket::lang.components.enable_js_desc',
                'type'        => 'checkbox',
                'default'     =>  true,
               ],
            'magnific-popup' => [
                'title'       => 'artdark.easymarket::lang.components.magnific_popup',
                'description' => 'artdark.easymarket::lang.components.magnific_popup_desc',
                'type'        => 'checkbox',
                'default'     =>  true,
            ],
            'css' => [
                'title'       => 'artdark.easymarket::lang.components.css',
                'description' => 'artdark.easymarket::lang.components.css_desc',
                'type'        => 'checkbox',
                'default'     =>  true,
            ],

        ];
    }

    function onRun()
    {
        if($this->property('css')) {
            $this->addCss('assets/css/ion.css');
            $this->addCss('assets/css/magnific-popup.css');
            $this->addCss('assets/css/modal.css');
        }
        if($this->property('jquery')) $this->addJs('assets/js/jquery.min.js');
        if($this->property('magnific-popup')) $this->addJs('assets/js/magnific-popup.js');
        $this->addJs('assets/js/octo-ion.js');
        $this->addJs('assets/js/common.js');
    }


    function onSend($item_id = null, $type = 'order') {

        $item_id = post('itemid', $item_id);

        $setting_active = Setting::where('active',1)->first();


        $type = post('type', $type);

        return [
            '#modal .modalWrap' => $this->renderPartial('@modal',['setting' => $setting_active,
                'itemid' => $item_id, 'type' => $type]),
        ];


    }

}