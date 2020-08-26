<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class Parcelle extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    public $attachOne = [
        'extrait_cadastre' => ['System\Models\File', 'public' => false],
    ];

    public $attachMany = [
        'documents' => ['System\Models\File', 'public' => false],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_parcelles';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'numero' => 'required'
    ];
}
