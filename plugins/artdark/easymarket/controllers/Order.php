<?php namespace ArtDark\EasyMarket\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use App;
use Validator;
use Session;
use RainLab\Translate\Models\Message;
use ArtDark\EasyMarket\Models\Setting;
use Lovata\Shopaholic\Models\Product;

class Order extends Controller
{
    public $implement = ['Backend\Behaviors\ListController', 'Backend\Behaviors\FormController'];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('ArtDark.EasyMarket', 'main-menu-item', 'side-menu-item');
    }

    public function onGetProductName() {
        $post = $_POST["term"];
        $results = Product::where('name', 'LIKE', "%$post%")->select('id','name')
                    ->get()->toArray();
        for($i = 0; $i < count($results); $i++ ){
            $results[$i]['text'] = $results[$i]['name'];
            unset($results[$i]['name']);
        }
        return json_encode($results);
    }





}
