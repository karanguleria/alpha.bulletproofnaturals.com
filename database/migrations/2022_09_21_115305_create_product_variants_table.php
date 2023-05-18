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
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->integer('months');
            $table->string('price');
            $table->integer('product_id')->unsigned();
            $table->double('total_price',8,2);
            $table->integer('tablets')->nullable();
            $table->integer('save')->nullable();
            $table->string('save_text')->nullable();
            $table->string('capsule')->nullable();
            $table->string('type')->nullable();
            $table->integer('best_pack')->default('0');
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
        Schema::dropIfExists('product_variants');
    }
};
