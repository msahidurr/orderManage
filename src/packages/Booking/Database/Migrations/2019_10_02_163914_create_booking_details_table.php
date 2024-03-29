<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('is_shipment');
            $table->integer('booking_id')->unsigned();
            $table->integer('is_admin_aproved')->default(0);
            $table->integer('is_aproved_user_id')->nullable();
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->string('customer_name')->nullable();
            $table->date('date_of_purchase');
            $table->string('purchasing_websites')->nullable();
            $table->string('items_order')->nullable();
            $table->string('status')->nullable();
            $table->string('order_value')->nullable();
            $table->string('conv_rate')->nullable();
            $table->string('currency_bill')->nullable();
            $table->string('organic_currency_cost')->nullable();
            $table->string('shipping_rate')->nullable();
            $table->string('shipping_weight_g')->nullable();
            $table->string('shipping_bill')->nullable();
            $table->string('orgnaic_shipping_cost')->nullable();
            $table->string('customer_paid')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_reference')->nullable();
            $table->string('due')->nullable();
            $table->string('loss_or_disc')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('currency_profit')->nullable();
            $table->string('shipping_profit')->nullable();
            $table->string('total_profit')->nullable();
            $table->string('remarks')->nullable();
            $table->string('shipment_no')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('booking');
    }
}
