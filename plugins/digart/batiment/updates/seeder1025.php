<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\TiersBranche;

class Seeder1025 extends Seeder
{
    public function run()
    {
        TiersBranche::truncate();
        
        TiersBranche::create([
            'name' => 'Electricien',
        ]);
        
        TiersBranche::create([
            'name' => 'Couvreur',
        ]);
        
        TiersBranche::create([
            'name' => 'Sanitaire',            
        ]);
        
        TiersBranche::create([
            'name' => 'Ferblantier',            
        ]);
    }
}