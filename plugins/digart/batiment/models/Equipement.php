<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Equipement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_equip';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

 
    public $belongsTo = [                        
        'responsable' => ['Backend\Models\User',
                   'order' => 'last_name'],                    
    ];


    public $belongsToMany = [
        'pieces' => [
            'Digart\Batiment\Models\Piece',
            'table' => 'digart_batiment_equip_pieces_pivot',
            'key' => 'equipement_id',
            'otherKey' => 'piece_id',
            'order' => 'name'],           
    ];  


    public function getLesPiecesOptions($value, $formData)
    {
        return Piece::pluck('name', 'id');
    }

}
