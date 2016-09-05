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

            $table->integer("comment")->unsigned();
            $table->integer("to")->unsigned();

            $table->primary(["comment", "to"]);
        });

        Schema::table("replies", function(Blueprint $table){
            $table->foreign("comment")->references("id")->on("comments");
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
