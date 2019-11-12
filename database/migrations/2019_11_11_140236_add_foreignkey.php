<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkey extends Migration
{
    /**
     * Creating all the foreign keys
     *
     * @return void
     */
    public function up()
    {
        
        
        Schema::table('image',function(Blueprint $table){
            $table->foreign('id_evenement')
            ->references('id_evenement')
            ->on('evenement')
            ->onDelete('cascade');
        });

        Schema::table('produit',function(Blueprint $table){
            $table->foreign('id_evenement')
            ->references('id_evenement')
            ->on('produit')
            ->onDelete('cascade');
        });

        Schema::table('commande',function(Blueprint $table){
            $table->foreign('id_produit')
            ->references('id_produit')
            ->on('produit')
            ->onDelete('cascade');
        });

        Schema::table('commentaire',function(Blueprint $table){
            $table->foreign('id_image')
            ->references('id_image')
            ->on('image')
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
        //
    }
}
