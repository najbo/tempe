<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Batiment extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_bat';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'designation' => 'required'
    ];
}
