<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class ProjetActivite extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_projets_activites';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];
}
