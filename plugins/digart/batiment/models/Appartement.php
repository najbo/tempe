<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Appartement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_app';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required'
    ];


    public $belongsTo = [
        'batiment' => ['Digart\Batiment\Models\Batiment'],               
    ];


    public $belongsToMany = [
        'proprietaires' => [
            'Backend\Models\User',
            'table' => 'digart_batiment_app_pro',
            'key' => 'appartement_id',
            'otherKey' => 'proprietaire_id',
            'order' => 'last_name'],           
    ];  


}    