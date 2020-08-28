<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\TiersType;

class Seeder1017 extends Seeder
{
    public function run()
    {
        
        TiersType::truncate();
        
        TiersType::create([
            'name' => 'Artisan',
        ]);
        
        TiersType::create([
            'name' => 'Fournisseur',
        ]);
        
        TiersType::create([
            'name' => 'Autorité',
        ]);
        
        TiersType::create([
            'name' => 'Assurance',
        ]);

    }
}