<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Modelèle qui détermine si une pièce est à l'intérieur ou à l'extérieur
 */
class Emplacement extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_emplacements';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];


    public function scopeActif($query)
    {
        return $query->where('is_actif', 1);
    }
}
