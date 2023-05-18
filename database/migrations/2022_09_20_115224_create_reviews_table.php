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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('title')->nullable();
            $table->integer('rating')->nullable();
            $table->text('description')->nullable();
            $table->string('user_id')->nullable();
            $table->integer('type')->unsigned()->default(1);
            $table->date('review_on')->nullable();
            $table->boolean('status')->default('1');
            $table->string('like_count')->nullable();
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
        Schema::dropIfExists('reviews');
    }
};
