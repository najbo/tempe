<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentAppPro extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_app_pro', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('appartement_id')->unsigned();
            $table->integer('proprietaire_id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->primary(['appartement_id','proprietaire_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_app_pro');
    }
}
