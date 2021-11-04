<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAttributesForProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            //Changing attributes for prices
            // $table->dropColumn('sale_price');
            $table->decimal('sale_price',10,2)->nullable()->change();
            $table->decimal('retail_price',10,2)->change();
            $table->decimal('price',10,2)->change();
            //Drop Unique
            $table->dropUnique(['sku']);
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
            //Undo changes for price columns
            $table->string('sale_price')->change();
            $table->string('retail_price')->change();
            $table->string('price')->change();

            //rebind unique
            $table->unique('sku');
        });
    }
}
