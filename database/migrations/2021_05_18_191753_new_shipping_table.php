<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shippings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders');
            $table->string('shipment_status')->default('pending'); //Pending, Processing, Shipped, Out for Delivery, Received
            $table->string('shipping_label')->nullable();
            $table->decimal('height', 7, 2)->default(1);
            $table->decimal('width', 7, 2)->default(1);
            $table->decimal('depth', 7, 2)->default(1);
            $table->decimal('weight', 5, 2)->default(1);
            $table->string('zone')->nullable();
            $table->decimal('price',10,2)->nullable();            
            $table->decimal('tax_amount', 10, 2)->nullable();            
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shippings');

        //
    }
}
