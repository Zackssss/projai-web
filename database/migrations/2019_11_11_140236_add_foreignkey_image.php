<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::disableForeignKeyConstraints();
        
        Schema::table('image',function(Blueprint $table){
            $table->foreign('id_evenement')
            ->reference('id_evenement')
            ->on('evenement');
        });







        Schema::enableForeignKeyConstraints();
*/
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
