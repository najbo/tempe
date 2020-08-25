<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentApp extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_app', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('designation', 255);
            $table->integer('sort_order')->nullable()->unsigned();
            $table->integer('batiment_id')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable();
            $table->integer('proprietaire_id')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_app');
    }
}