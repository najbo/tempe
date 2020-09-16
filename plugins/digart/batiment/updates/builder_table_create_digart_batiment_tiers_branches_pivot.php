<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentTiersBranchesPivot extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_tiers_branches_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('tiers_id')->unsigned();
            $table->integer('branche_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['tiers_id','branche_id'], 'tiers_branches');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_tiers_branches_pivot');
    }
}