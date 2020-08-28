<?php namespace Digart\Batiment\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDigartBatimentEquip extends Migration
{
    public function up()
    {
        Schema::create('digart_batiment_equip', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('numero_fournisseur', 50)->nullable();
            $table->integer('categorie_id')->nullable()->unsigned();
            $table->integer('piece_id')->nullable()->unsigned();
            $table->integer('proprietaire_id')->nullable()->unsigned();
            $table->decimal('prix_achat', 7, 2)->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->integer('fournisseur_id')->nullable()->unsigned();
            $table->integer('service_id')->nullable()->unsigned();
            $table->boolean('is_actif')->nullable()->default(1);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('digart_batiment_equip');
    }
}