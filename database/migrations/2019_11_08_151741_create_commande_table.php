<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::enableForeignKeyConstraints();

class CreateCommandeTable extends Migration
{
    /**
     * Run the migrations.
     * Permet de crée la table commandes
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->bigInteger('id_commande')-> index();
            $table->date('date_commande');
            $table->integer('quantite');
            $table->integer('user_id');
            $table->bigInteger('id_produit')->unsigned()->index();
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
        Schema::dropIfExists('commande');
    }
}
