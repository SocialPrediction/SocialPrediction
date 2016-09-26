<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("replies", function(Blueprint $table){

            $table->integer("id")->unsigned();
            $table->integer("to")->unsigned();

            $table->primary(["id", "to"]);
        });

        Schema::table("replies", function(Blueprint $table){
            $table->foreign("id")->references("id")->on("comments");
            $table->foreign("to")->references("id")->on("comments");
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
        Schema::drop("replies");
    }
}
