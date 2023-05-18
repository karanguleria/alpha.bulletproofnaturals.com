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
        Schema::create('buyer', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('street')->nullable();
            $table->string('apartment')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('s_fname')->nullable();
            $table->string('s_lname')->nullable();
            $table->string('s_street')->nullable();
            $table->string('s_apartement')->nullable();
            $table->string('s_city')->nullable();
            $table->string('s_state')->nullable();
            $table->string('s_zip')->nullable();
            $table->string('s_phone')->nullable();
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
        Schema::dropIfExists('buyer');
    }
};
