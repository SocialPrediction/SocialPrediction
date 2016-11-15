<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("comments", function (Blueprint $table) {

            $table->increments("id");
            $table->string("comment");
            $table->integer("from")->unsigned();
            $table->timestamps();
        });

        Schema::table("comments", function(Blueprint $table){

            $table->foreign("from")->references("id")->on("users");
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
        Schema::drop("comments");
    }
}
