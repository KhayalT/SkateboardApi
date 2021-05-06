<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkateboardColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skateboard__colors', function (Blueprint $table) {
            $table->unsignedBigInteger('skateboard_id');
            $table->unsignedBigInteger('color_id');

            $table->foreign('skateboard_id')->references('id')->on('skateboards')->onDelete('cascade');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skateboard__colors');
    }
}
