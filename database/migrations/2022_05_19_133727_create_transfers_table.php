<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('image')->nullable();
            $table->string('base_price');
            $table->string('detail')->nullable();
            $table->string('km_price');
            $table->string('capasity');
            $table->string('car_detail');
            //-----------devami var yap
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
        Schema::dropIfExists('transfers');
    }
}
