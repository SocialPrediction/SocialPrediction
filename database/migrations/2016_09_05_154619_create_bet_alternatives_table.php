<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetAlternativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("bet_alternatives", function(Blueprint $table){
            $table->integer("bet")->unsigned();
            $table->integer("alternative")->unsigned();
        });

        Schema::table("bet_alternatives", function(Blueprint $table){
            $table->foreign("bet")->references("id")->on("bets");
            $table->foreign("alternative")->references("id")->on("alternatives");
        });
    }

    /**
     * Reverse the migrations.
     *alternatives
     * @return void
     */
    public function down()
    {
        //
        Schema::drop("bet_alternatives");
    }
}
