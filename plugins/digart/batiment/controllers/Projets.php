<?php namespace Digart\Batiment\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Projets extends Controller
{
    public $implement = [       'Backend\Behaviors\ListController',
                                'Backend\Behaviors\FormController',
                                'Backend.Behaviors.RelationController',
                            ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';


    public $requiredPermissions = [
        'digart.batiment.projets' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.Batiment', 'activites', 'projets');
    }
}
