<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentLoc extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_loc', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('appartement_id');
            $table->string('last_name', 255);
            $table->string('first_name', 255);
            $table->date('birthday')->nullable();
            $table->string('mobile', 255)->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_loc');
    }
}
