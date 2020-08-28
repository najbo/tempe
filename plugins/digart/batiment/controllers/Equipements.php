<?php namespace Digart\Batiment\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Equipements extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digart.batiment.equipements' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.Batiment', 'equipements', 'equipements');
    }
}
