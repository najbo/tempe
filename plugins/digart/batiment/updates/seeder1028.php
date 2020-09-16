<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Piece;

class Seeder1028 extends Seeder
{
    public function run()
    {
        Piece::truncate();
        
        Piece::create([
            'name' => 'Salon',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]);

        Piece::create([
            'name' => 'Cuisine',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]); 
        
        Piece::create([
            'name' => 'Bureau',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]); 
        
        Piece::create([
            'name' => 'Salle à manger',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]); 
        
        Piece::create([
            'name' => 'Cuisine',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]); 
        
        Piece::create([
            'name' => 'WC / salle de bain',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]);         

        Piece::create([
            'name' => 'Vestibule',
            'appartement_id' => 1,
            'emplacement_id' => 1,
            'etage_id' => 4,
        ]);     

        Piece::create([
            'name' => 'Terrasse',
            'appartement_id' => 1,
            'emplacement_id' => 7,
            'etage_id' => 4,
        ]);

        Piece::create([
            'name' => 'Orangerie',
            'appartement_id' => 2,
            'emplacement_id' => 7,
            'etage_id' => 2,
        ]);

        Piece::create([
            'name' => 'Garage Frôté',
            'appartement_id' => 4,
            'emplacement_id' => 4,
            'etage_id' => 2,
        ]);        

        Piece::create([
            'name' => 'Chauffage / buanderie',
            'emplacement_id' => 2,
            'etage_id' => 1,
        ]);

        Piece::create([
            'name' => 'Caves communes',
            'emplacement_id' => 2,
            'etage_id' => 1,
        ]);

        Piece::create([
            'name' => 'Jardin Frôtés',
            'appartement_id' => 4,
            'emplacement_id' => 7,
            'etage_id' => 2,
        ]);

        Piece::create([
            'name' => 'Jardin Boesch',
            'appartement_id' => 2,
            'emplacement_id' => 7,
            'etage_id' => 2,            
        ]);

        Piece::create([
            'name' => 'Jardin locataire Frôté',
            'emplacement_id' => 7,
            'appartement_id' => 3,
            'etage_id' => 2,            
        ]);

        Piece::create([
            'name' => 'Combles communes',
            'emplacement_id' => 5,
            'etage_id' => 5,            
        ]);                

        Piece::create([
            'name' => 'Carnotzet',
            'emplacement_id' => 3,
            'etage_id' => 2,            
        ]);

        Piece::create([
            'name' => 'Corrider rez',
            'emplacement_id' => 6,
            'etage_id' => 2,            
        ]);

        Piece::create([
            'name' => 'Corridor 1e',
            'emplacement_id' => 6,
            'etage_id' => 3,            
        ]);

        Piece::create([
            'name' => 'Corrider 2e',
            'emplacement_id' => 6,
            'etage_id' => 4,            
        ]);
    }
}