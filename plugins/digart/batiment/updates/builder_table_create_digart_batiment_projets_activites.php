<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentProjetsActivites extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_projets_activites', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('projet_id')->nullable();
            $table->text('description')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_projets_activites');
    }
}
