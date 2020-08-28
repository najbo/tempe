<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Piece extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_pieces';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];


    public $belongsTo = [
        'etage' => ['DigArt\Batiment\Models\Etage',
                   'key' => 'etage_id',
                   'order' => 'sort_order'],                             
        'emplacement' => ['DigArt\Batiment\Models\Emplacement',
                   'key' => 'emplacement_id',
                   'order' => 'sort_order'],                    
    ];

    public function getEmplacementOptions()
    {
        return Emplacement::actif()->pluck('name', 'id');
    }    
}
