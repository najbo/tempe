<?php namespace Digart\Batiment\Models;

use Model;
use BackendAuth;

/**
 * Model
 */
class Projet extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'debut', 'fin'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_batiment_projets';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
    ];

    public $hasMany = [
         'activites' => ['DigArt\Batiment\Models\ProjetActivite', 
            'key' => 'projet_id', 
            'order' => 'debut',
            'softDelete' => true],
         'intervenants' => ['DigArt\Batiment\Models\ProjetIntervenant', 
            'key' => 'projet_id', 
            'order' => 'debut',
            'softDelete' => true],             
    ]; 

    public $belongsTo = [
        'auteur' => ['\Backend\Models\User'],
    ];        


    // Inscrit le backend user connecté dans le champ du modèle
    public function getAdministrateurActuelAttribute()
    {
        if (BackendAuth::check()) {
           return BackendAuth::getUser()->id;
        }
    }    
}
