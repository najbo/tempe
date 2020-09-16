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
<<<<<<< HEAD
            'order' => 'sort_order'],           
        'branches' => [
            'DigArt\Batiment\Models\TiersBranche',
            'table' => 'digart_batiment_tiers_branches_pivot',
            'key' => 'tiers_id',
            'otherKey' => 'branche_id',
            'order' => 'sort_order'],               
=======
            'order' => 'sort_order'],
        'secteurs' => [
            'DigArt\Batiment\Models\TiersSecteur',
            'table' => 'digart_batiment_tiers_secteurs_pivot',
            'key' => 'tiers_id',
            'otherKey' => 'secteur_id',
            'order' => 'sort_order'],                       
>>>>>>> 9bf40eed90eb0d60eedad9c53e52cb2b9c2dad28
    ]; 

}
