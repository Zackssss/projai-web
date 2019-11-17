<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkey extends Migration
{
    /**
     * Permet de crée toutes les foreign key dans les tables
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::table('images',function(Blueprint $table){
            $table->foreign('id_evenement')
            ->references('id_evenement')
            ->on('evenements')
            ->onDelete('cascade');
        });

        Schema::table('produits',function(Blueprint $table){
            $table->foreign('id_evenement')
            ->references('id_evenement')
            ->on('produits')
            ->onDelete('cascade');
        });

        Schema::table('commandes',function(Blueprint $table){
            $table->foreign('id_produit')
            ->references('id_produit')
            ->on('produits')
            ->onDelete('cascade');
        });

        Schema::table('commentaires',function(Blueprint $table){
            $table->foreign('id_image')
            ->references('id_image')
            ->on('images')
            ->onDelete('cascade');
        });







      
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
