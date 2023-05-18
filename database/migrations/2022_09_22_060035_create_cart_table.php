<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Ramsey\Uuid\v1;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('street_address')->nullable();
            $table->string('appartment')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('zip')->nullable();
            $table->string('phone')->nullable();
            $table->integer('product_id');
            $table->string('product_name');
            $table->integer('quantity_count');
            $table->string('price');
            $table->integer('v_id')->nullable();
            $table->string('v_name')->nullable();
            $table->string('v_price')->nullable();
            $table->string('v_total_price')->nullable();
            $table->string('v_months')->nullable();
            $table->string('v_save')->nullable();
            $table->string('v_save_text')->nullable();
            $table->integer('v_tablets')->nullable();

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
        Schema::dropIfExists('cart');
    }
};
