<?php namespace ArtDark\EasyMarket;

use System\Classes\PluginBase;
use System\Classes\MailManager;
use System\Models\MailLayout;


class Plugin extends PluginBase
{

    public $require = ['Lovata.Shopaholic'];


    public function registerComponents()
    {
        return [
            'ArtDark\EasyMarket\Components\Modal' => 'Modal',
            'ArtDark\EasyMarket\Components\Button' => 'Button',
        ];
    }

    public function boot() {
        MailLayout::createLayouts();
        $l = MailLayout::where('code', 'art_layout')->where('content_text', null)->first();
        if ($l != null ){
    		if($l->content_text == null) {
            	$l->content_text = '';
            	$l->save();
        	}
        }
       

    }

    public function register()
    {
        MailManager::instance()->registerCallback(function ($manager) {
            $manager->registerMailLayouts([
                'art_layout' => 'artdark.easymarket::mail.layout',
            ]);
        });
    }



   

}
