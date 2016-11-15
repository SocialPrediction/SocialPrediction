<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("user_mutes", function (Blueprint $table) {

            $table->integer("blocker")->unsigned();
            $table->integer("blockee")->unsigned();
            $table->primary(["blocker", "blockee"]);
        });

        Schema::table("user_mutes", function (Blueprint $table) {

            $table->foreign("blocker")->references("id")->on("users");
            $table->foreign("blockee")->references("id")->on("users");

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
        Schema::drop("user_mutes");
    }
}
