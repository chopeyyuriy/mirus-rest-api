<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->boolean('status')->default(0);
            $table->decimal('start_bid', 10, 2)->default(1);
            $table->decimal('buyout_price', 10, 2)->nullable();
            $table->decimal('min_bid', 5, 2)->nullable();
            $table->integer('gallery_id')->nullable();
            $table->text('basic_information');
            $table->decimal('step', 10, 2)->default(0);
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('certification_id');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('auctions');
    }
}
