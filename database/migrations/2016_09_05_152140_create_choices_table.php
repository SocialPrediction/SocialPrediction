<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create("choices", function(Blueprint $table){
            $table->integer("user")->unsigned();
            $table->integer("alternative")->unsigned();
            $table->primary(["user", "alternative"]);
            $table->foreign("user")->references("id")->on("users");
            $table->foreign("alternative")->references("id")->on("alternatives");
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
        //
        Schema::drop("choices");
    }
}
