<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Emplacement;

class Seeder1022 extends Seeder
{
    public function run()
    {
        Emplacement::truncate();
        
        Emplacement::create([
            'name' => 'Appartement',
        ]);

        Emplacement::create([
            'name' => 'Cave',
        ]);
        
        Emplacement::create([
            'name' => 'Carnotzet',
        ]);

        Emplacement::create([
            'name' => 'Garage',
        ]);

        Emplacement::create([
            'name' => 'Combles',
        ]);
        
        Emplacement::create([
            'name' => 'Corridor/escalier',
        ]);

        Emplacement::create([
            'name' => 'Jardin',
        ]);
    }
}