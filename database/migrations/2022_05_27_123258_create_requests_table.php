<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('platform');
            $table->text('game');
            $table->text('location');
            $table->text('date');
            $table->text('hours');
            $table->text('minutes');
            $table->text('ampm');
            $table->text('whatsapp');
            $table->text('phoneNumber');
            $table->text('match')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('request_user', function (Blueprint $table) {
            $table->unsignedBigInteger('request_id');
            $table->foreign('request_id')->references('id')->on('requests');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
}
