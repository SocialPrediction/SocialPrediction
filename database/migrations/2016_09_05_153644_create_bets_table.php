<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("bets", function(Blueprint $table){
            $table->increments("id");
            $table->longText("description");
            $table->integer("upvoteScore")->unsigned();
            $table->dateTime("finishes")->nullable();
            $table->integer("type")->unsigned();
            $table->integer("result")->unsigned()->nullable();
            $table->integer("category")->unsigned();
            $table->integer("owner")->unsigned();
            $table->timestamps();
        });

        Schema::table("bets", function(Blueprint $table){
            $table->foreign("type")->references("id")->on("bet_types");
            $table->foreign("category")->references("id")->on("categories");
            $table->foreign("owner")->references("id")->on("users");
            $table->foreign("result")->references("id")->on("users");
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

        Schema::drop("bets");
    }
}
