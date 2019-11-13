<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::enableForeignKeyConstraints();

class CreateImageTable extends Migration
{
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id_image');
            $table->string('chemin');
            $table->boolean('visibilite_image');
            $table->integer('appréciation');
            $table->integer('user_id_createur_img');
            $table->bigInteger('id_evenement')->unsigned()->index();
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
        Schema::dropIfExists('image');
    }
}
