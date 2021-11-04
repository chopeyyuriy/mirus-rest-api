<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('seller_id')->nullable();
            $table->date('order_date')->nullable();
            $table->date('delivery_date')->nullable();
            $table->text('order_notes')->nullable();
            $table->text('long_desc')->nullable();
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending'); //Pending, Paid, Failed
            $table->string('payment_error_log')->nullable(); //Store Failed reasons for Stripe Payments
            $table->decimal('subtotal',10,2)->nullable();
            $table->decimal('shipping_amount',5,2)->nullable();
            $table->decimal('tax_rate',5,2)->nullable();
            $table->decimal('tax_amount', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->enum('status', ['draft', 'published', 'sold', 'paused', 'suspended', 'archived']);
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
        //
        Schema::dropIfExists('orders');

    }
}
