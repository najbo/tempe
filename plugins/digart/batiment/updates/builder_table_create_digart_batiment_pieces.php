<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentPieces extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_pieces', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->integer('appartement_id')->nullable()->unsigned();
            $table->integer('batiment_id')->nullable()->unsigned();
            $table->integer('surface')->nullable();
            $table->integer('etage_id')->nullable()->unsigned();
            $table->integer('emplacement_id')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_pieces');
    }
}
