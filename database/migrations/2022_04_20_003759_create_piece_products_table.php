<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piece_products', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('type_piece');
            $table->string('details');
            $table->string('difficulty');
            $table->string('size');
            $table->bigInteger('square_meters')->NULL;
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
        Schema::dropIfExists('piece_products');
    }
};
