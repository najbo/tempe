<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Batiment;

class Seeder107 extends Seeder
{
    public function run()
    {
        Batiment::truncate();
        
        Batiment::create([
            'designation' => 'Tempé 18',
            'surface_batiment' => 376,
            'adresse' => 'Rue du Tempé 18',
            'npa' => '2520',
            'localite' => 'La Neuveville',
            'parcelle_id' => 1,
            'no_identification_fed' => '1380973',
        ]); 

        Batiment::create([
            'designation' => 'Tempé 18a',
            'surface_batiment' => 23,
            'adresse' => 'Rue du Tempé 18a',
            'npa' => '2520',
            'localite' => 'La Neuveville',
            'parcelle_id' => 1,
            'no_identification_fed' => '',
        ]);         

    }
}