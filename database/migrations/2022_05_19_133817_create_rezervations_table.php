<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezervationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('user_id');
            $table->foreignId('transfer_id');
            $table->foreignId('from_location_id');
            $table->foreignId('to_location_id');
            $table->string('price')->nullable();
            $table->string('Airline');
            $table->string('flightnumber');
            $table->string('flighdate');
            $table->string('flightime');
            $table->string('pickuptime');
            $table->string('note');
            $table->string('status',10);
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
        Schema::dropIfExists('rezervations');
    }
}
