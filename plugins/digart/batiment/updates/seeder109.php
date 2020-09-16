<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Parcelle;

class Seeder109 extends Seeder
{
    public function run()
    {
        Parcelle::truncate();
        
        Parcelle::create([
            'numero' => '254',
            'name' => 'Tempé 18',
            'localite' => 'La Neuveville',
            'egrid' => 'CH286246354256',
            'surface_totale' => 1363,
            'surface_batiments' => 398,
            'surface_verte' => 923,
            'surface_dur' => 42,
        ]); 

        Parcelle::create([
            'numero' => '21',
            'name' => 'Place de parc devant Tempé 18',
            'localite' => 'La Neuveville',
            'egrid' => 'CH924249463515',
            'proprietaire_externe' => 'Municipalité de La Neuveville',
            'is_proprietaire_externe' => 1,
            'surface_totale' => 25,
            'surface_dur' => 25,
        ]);         


        Parcelle::create([
            'numero' => '1760',
            'name' => 'Place pour moto',
            'localite' => 'La Neuveville',
            'egrid' => 'CH964246356710',
            'proprietaire_externe' => 'Christophe Zesiger',
            'is_proprietaire_externe' => 1,
            'surface_totale' => 14,
            'surface_dur' => 14,
        ]);          
    }
}