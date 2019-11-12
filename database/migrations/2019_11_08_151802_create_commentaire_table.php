<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateCommentaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire', function (Blueprint $table) {
            $table->bigIncrements('id_commentaire');
            $table->string('texte',300);
            $table->boolean('visibilite_commentaire');
            $table->integer('user_id');
            $table->bigInteger('id_image')->unsigned()->index();
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
        Schema::dropIfExists('commentaire');
    }
}
