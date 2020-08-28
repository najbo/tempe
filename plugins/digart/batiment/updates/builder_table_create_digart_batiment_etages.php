<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentEtages extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_etages', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->integer('level')->nullable();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_etages');
    }
}
