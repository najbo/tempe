<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentBat extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_bat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('adresse', 255)->nullable();
            $table->string('npa', 10)->nullable();
            $table->string('localite', 100)->nullable();
            $table->string('no_identification_fed', 50)->nullable();
            $table->integer('surface_batiment')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->integer('parcelle_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_bat');
    }
}