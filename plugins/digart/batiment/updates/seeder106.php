<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Etage;

class Seeder106 extends Seeder
{
    public function run()
    {
        Etage::truncate();
        
        Etage::create([
            'designation' => 'Sous-sol / cave',
            'level' => -1,
        ]); 
        
        Etage::create([
            'designation' => 'Rez-de-chaussée',
            'level' => '0',
        ]); 
        
        Etage::create([
            'designation' => '1er étage',
            'level' => '1',
        ]); 
        
        
        Etage::create([
            'designation' => '2e étage',
            'level' => '2',
        ]); 
                    
        Etage::create([
            'designation' => '3e étage',
            'level' => '3',
        ]); 
        

    }
}