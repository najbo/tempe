<?php namespace Digart\Batiment\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class LocauxCommuns extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digart.batiment.locaux-communs' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.Batiment', 'gestion-batiment', 'locaux-communs');
    }

    public function listExtendQuery($query)
    {
        $query->whereNull('appartement_id');
    }     
}
