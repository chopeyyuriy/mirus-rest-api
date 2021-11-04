<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('user_id')->index();
            $table->unsignedBigInteger('auction_id')->nullable();
            $table->string('sku')->unique();
            $table->string('title');
            $table->string('color')->nullable();
            $table->string('weight')->nullable();
            $table->string('short_desc')->nullable();
            $table->text('long_desc')->nullable();
            $table->text('features')->nullable();
            $table->longText('image')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('retail_price')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_percent')->nullable();
            $table->text('payload')->nullable();
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
}
