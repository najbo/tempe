<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentEquipPiecesPivot extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_equip_pieces_pivot', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('equipement_id')->unsigned();
            $table->integer('piece_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['equipement_id','piece_id'], 'equipement_pieces');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_equip_pieces_pivot');
    }
}
