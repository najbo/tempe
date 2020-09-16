<?php namespace Digart\Batiment\Models;

use Model;

/**
 * Model
 */
class TiersBranche extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_tiers_branche';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
