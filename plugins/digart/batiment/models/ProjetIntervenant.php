<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class ProjetIntervenant extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];

    protected $jsonable = ['interlocuteurs'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_projets_intervenants';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];


    public $belongsTo = [
        'tiers' => ['\Digart\Batiment\Models\Tiers'],
    ];     
}
