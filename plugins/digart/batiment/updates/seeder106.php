<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Etage;

class Seeder106 extends Seeder
{
    public function run()
    {
        Etage::truncate();
        
        Etage::create([
            'name' => 'Sous-sol / cave',
            'level' => -1,
        ]); 
        
        Etage::create([
            'name' => 'Rez-de-chaussée',
            'level' => '0',
        ]); 
        
        Etage::create([
            'name' => '1er étage',
            'level' => '1',
        ]); 
        
        
        Etage::create([
            'name' => '2e étage',
            'level' => '2',
        ]); 
                    
        Etage::create([
            'name' => '3e étage',
            'level' => '3',
        ]); 
        

    }
}