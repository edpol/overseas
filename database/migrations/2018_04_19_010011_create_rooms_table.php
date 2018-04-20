<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->string('name');
            $table->integer('price');   // cents
            $table->integer('fee');     // cents
            $table->enum('availability', ['AVAILABLE', 'ON REQUEST', 'SOLD OUT'])->default('ON REQUEST'); 
            $table->integer('promos');
            $table->integer('offers');
            $table->integer('penalty');
            $table->string('image');
            $table->timestamps();
        });

        Schema::table('rooms', function($table) {
            $table->foreign('hotel_id')->references('id')->on('hotels');
        });
        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
