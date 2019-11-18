<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::enableForeignKeyConstraints();

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     * Permet de crée la table Produits
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->bigIncrements('id_produit');
            $table->string('nom_produit');
            $table->string('description_produit');
            $table->float('prix');
            $table->integer('nbr_de_vente');
            $table->bigInteger('id_evenement')->unsigned()->index();
            $table->string('url_image_produit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
