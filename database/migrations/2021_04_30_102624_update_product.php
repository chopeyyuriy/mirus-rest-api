<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->enum('sale_type', ['auction', 'fixed'])->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->string('seller_name')->nullable();
            $table->enum('status', ['draft', 'published', 'sold', 'paused', 'suspended', 'archived'])->nullable();
            $table->integer('gallery_id')->nullable();
            $table->enum('condition_type', ['new', 'used'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn('sale_type');
            $table->dropColumn('expiration_date');
            $table->dropColumn('seller_name');
            $table->dropColumn('status');
            $table->dropColumn('gallery_id');
        });
    }
}
