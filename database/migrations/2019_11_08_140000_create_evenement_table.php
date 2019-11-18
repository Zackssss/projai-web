<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

Schema::enableForeignKeyConstraints();

class CreateEvenementTable extends Migration
{
    /**
     * Creating the evenement table
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->bigIncrements('id_evenement');
            $table->string('nom_evenement');
            $table->string('association');
            $table->string('description_evenement');
            $table->date('date_evenement');
            $table->boolean('recurence');
            $table->date('date_creation');
            $table->integer('user_id');
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
        Schema::dropIfExists('evenement');
    }
}
