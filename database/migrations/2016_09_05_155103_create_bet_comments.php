<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("bet_comments", function(Blueprint $table){
            $table->integer("bet")->unsigned();
            $table->integer("comment")->unsigned();
        });

        Schema::table("bet_comments", function(Blueprint $table){
           $table->foreign("bet")->references("id")->on("bets");
            $table->foreign("comment")->references("id")->on("comments");
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
        Schema::drop("bet_comments");
    }
}
