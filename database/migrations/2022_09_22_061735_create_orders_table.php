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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('billing_name')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_province')->nullable();
            $table->string('billing_state')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_postalcode')->nullable();
            $table->string('billing_phone')->nullable();
            $table->string('billing_name_on_card')->nullable();
            $table->string('billing_discount')->default('0');
            $table->string('billing_discount_code')->nullable();
            $table->string('transection_id')->nullable();
            $table->string('receipt_url')->nullable();
            $table->string('exp_month')->nullable();
            $table->string('exp_year')->nullable();
            $table->string('last4')->nullable();
            $table->string('billing_base_total')->nullable();
            $table->string('billing_subtotal')->nullable();
            $table->string('billing_tax')->nullable();
            $table->string('billing_total')->nullable();
            $table->string('ship_different_address')->nullable();
            $table->string('diff_name')->nullable();
            $table->string('diff_address')->nullable();
            $table->string('diff_province')->nullable();
            $table->string('diff_state')->nullable();
            $table->string('diff_city')->nullable();
            $table->string('diff_postalcode')->nullable();
            $table->longText('order_notes')->nullable();
            $table->string('payment_gateway')->default('Credit Card');
            $table->tinyInteger('shipped')->default('0');
            $table->string('paypal_id')->nullable();
            $table->string('fulfillment_count')->nullable();
            $table->string('amazon_user_id')->nullable();
            $table->string('amazon_order_reference_id')->nullable();
            $table->string('status')->default('pending');
            $table->longText('error');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
