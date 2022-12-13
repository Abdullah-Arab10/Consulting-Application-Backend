<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->double('rating')->nullable();
            $table->integer('skill');
            $table->longText('bio')->nullable();
            $table->integer('wallet')->nullable();
            $table->time('shiftStart');
            $table->time('shiftEnd');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultants');
    }
};
