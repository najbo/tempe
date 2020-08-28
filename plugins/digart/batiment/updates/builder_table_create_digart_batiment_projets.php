<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentProjets extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_projets', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('objectif')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->integer('batiment_id')->nullable()->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_projets');
    }
}
