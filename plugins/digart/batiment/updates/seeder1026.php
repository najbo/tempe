<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\TiersSecteur;

class Seeder1026 extends Seeder
{
    public function run()
    {
        TiersSecteur::truncate();
        
        TiersSecteur::create([
            'name' => 'Electricité',
        ]);
        
        TiersSecteur::create([
            'name' => 'Sanitaire',
        ]);
        
        TiersSecteur::create([
            'name' => 'Ferblanterie',
        ]);

        TiersSecteur::create([
            'name' => 'Chauffage',
        ]);        

        TiersSecteur::create([
            'name' => 'Couverture',
        ]);
        
        
        TiersSecteur::create([
            'name' => 'Lutte contre le feu',
        ]);        


    }
}