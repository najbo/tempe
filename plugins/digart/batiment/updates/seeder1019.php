<?php namespace Digart\Batiment\Updates;

use Seeder;
use Digart\Batiment\Models\Equipement;

class Seeder1019 extends Seeder
{
    public function run()
    {
        Equipement::truncate();
        
        Equipement::create([
            'numero' => '2008-01',
            'name' => 'Chauffage mazout',
        ]);
        
        Equipement::create([
            'numero' => '1960-02',
            'name' => 'Citerne mazout',
        ]);
        
        Equipement::create([
            'numero' => '1980-01',
            'name' => 'Tableau électrique 1er étage',
        ]);   
        
        Equipement::create([
            'numero' => '2008-01',
            'name' => 'Boîtes aux lettres',
        ]);
        
        Equipement::create([
            'numero' => '1880-01',
            'name' => 'Toit',
        ]);  
        
        Equipement::create([
            'numero' => '1880-02',
            'name' => 'Façade',
        ]);
        
        Equipement::create([
            'numero' => '2008-03',
            'name' => 'Porte garage de Claude',
        ]);
        
        Equipement::create([
            'numero' => '1920-01',
            'name' => 'Chemine principale & conduit',
        ]);     

        Equipement::create([
            'numero' => '2014-01',
            'name' => 'Système de sonnerie',
        ]);   
        
        Equipement::create([
            'numero' => '2020-03',
            'name' => 'Ascenseur à rail rez/1er étage',
        ]);
        
        Equipement::create([
            'numero' => '2012-01',
            'name' => 'Orangerie jarins Boesch\'s',
        ]);        
    }
}