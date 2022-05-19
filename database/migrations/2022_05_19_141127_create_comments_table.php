<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment');
            $table->string('rate')-> nullable()->default('5');
            $table->foreignId('transfer_id');
            $table->foreignId('user_id');
            $table->string('ip');
            $table->string('image')->nullable();
            $table->string('status',6);
            $table->foreignId('created_at');
            $table->foreignId('updated_at');
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
        Schema::dropIfExists('comments');
    }
}
