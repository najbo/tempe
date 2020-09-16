<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentProjetsIntervenants extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_projets_intervenants', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('projet_id')->nullable()->unsigned();
            $table->integer('tiers_id')->nullable()->unsigned();
            $table->string('name', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('interlocuteurs')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_projets_intervenants');
    }
}
