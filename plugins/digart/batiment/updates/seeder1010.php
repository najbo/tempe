<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Appartement;

class Seeder1010 extends Seeder
{
    public function run()
    {
        Appartement::truncate();
        
        Appartement::create([
            'name' => 'Appartement de Jan & Marilyne',
            'numero' => '254-4',
            'appartement_type' => 'Appart. 4 chambres',
            'orientation' => '2e étage, Sud-Est',
            'batiment_id' => 1,
            'quote_part' => 144,
        ]); 

        Appartement::create([
            'name' => 'Appartement de Claude & Nelly',
            'numero' => '254-3',
            'appartement_type' => 'Appart. 6 chambres',
            'orientation' => '2e étage, Nord',
            'batiment_id' => 1,
            'quote_part' => 308,
        ]);         

        Appartement::create([
            'name' => 'Appartement de Yolande',
            'numero' => '254-2',
            'appartement_type' => 'Appart. 4 chambres',
            'orientation' => '1e étage, Ouest',
            'batiment_id' => 1,
            'quote_part' => 145,
        ]);            

        Appartement::create([
            'name' => 'Appartement de Claude & Sandra',
            'numero' => '254-1',
            'appartement_type' => 'Appart. 8 chambres',
            'orientation' => '1e étage, Ouest',
            'batiment_id' => 1,
            'quote_part' => 403,
        ]);                 
    }
}