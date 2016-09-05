<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("messages", function (Blueprint $table) {
            $table->increments("id");
            $table->integer("to")->unsigned();
            $table->integer("from")->unsigned();
            $table->string("text");
        });

        Schema::table("messages", function (Blueprint $table) {

            $table->foreign("to")->references("id")->on("users");
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
        Schema::drop("messages");
    }
}
