<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Projet;

class Seeder1012 extends Seeder
{
    public function run()
    {
        Projet::truncate();
        
        Projet::create([
            'name' => 'Agrandissement appartement JB aux combles',
            'debut' => '2020-03-01',
        ]); 

    }
}