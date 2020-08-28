<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Tiers extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    protected $jsonable = ['interlocuteurs'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_tiers';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

    public $belongsToMany = [
        'types' => [
            'DigArt\Batiment\Models\TiersType',
            'table' => 'digart_batiment_tiers_types_pivot',
            'key' => 'tiers_id',
            'otherKey' => 'type_id',
            'order' => 'sort_order'],           
    ]; 

}
