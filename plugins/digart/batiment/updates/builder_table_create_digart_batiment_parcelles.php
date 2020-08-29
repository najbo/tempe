<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentParcelles extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_parcelles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('numero',20)->nullable();
            $table->string('egrid',20)->nullable();
            $table->string('name')->nullable();
            $table->boolean('is_proprietaire_externe')->nullable();
            $table->string('proprietaire_externe')->nullable();
            $table->string('localite', 255);
            $table->text('description')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('sort_order')->nullable();
            $table->integer('surface_totale')->nullable();
            $table->integer('surface_batiments')->nullable();
            $table->integer('surface_verte')->nullable();
            $table->integer('surface_dur')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_parcelles');
    }
}