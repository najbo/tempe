<?php namespace Digart\Batiment\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class TiersBranches extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = [
        'digart.batiment.tiers.branches' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Digart.Batiment', 'Tiers', 'tiers-branches');
    }
}
