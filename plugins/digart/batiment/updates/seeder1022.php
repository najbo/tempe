<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Emplacement;

class Seeder1022 extends Seeder
{
    public function run()
    {
        Emplacement::truncate();
        
        Emplacement::create([
            'name' => 'Intérieur',
        ]);
        
        Emplacement::create([
            'name' => 'Extérieur',
        ]);         
    }
}