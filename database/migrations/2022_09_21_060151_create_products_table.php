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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->float('display_price',8,2)->nullable();
            $table->float('price',8,2);
            $table->string('quantity')->nullable();
            $table->string('image');
            $table->string('vedios')->nullable();
            $table->string('vedio_image')->nullable();
            $table->text('images');
            $table->text('details');
            $table->text('description');
            $table->tinyInteger('featured')->default('0');
            $table->integer('type')->unsigned()->default('1');
            $table->tinyInteger('out_of_stock')->default('0');

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
        Schema::dropIfExists('products');
    }
};
