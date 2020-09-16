<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentTiersSecteursPivot extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_tiers_secteurs_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tiers_id')->unsigned();
            $table->integer('secteur_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['tiers_id','secteur_id'], 'tiers_secteur');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_tiers_secteurs_pivot');
    }
}
