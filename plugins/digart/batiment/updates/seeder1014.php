<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Tiers;

class Seeder1014 extends Seeder
{
    public function run()
    {
        Tiers::truncate();
        
        Tiers::create([
            'designation' => 'BV Toitures SA',
            'branche' => 'Toiture & ferblanterie',
        ]); 
    }
}