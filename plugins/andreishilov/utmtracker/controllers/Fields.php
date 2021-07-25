<?php

namespace AndreiShilov\UTMTracker\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Fields extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\RelationController',
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = ['andreishilov.utmtracker.edit'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('AndreiShilov.UTMTracker', 'menu', 'fields');
    }
}
