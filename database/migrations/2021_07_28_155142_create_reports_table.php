<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->unsignedBigInteger('from_user');
            $table->unsignedBigInteger('to_user');
            $table->text('message')->nullable();
            $table->text('subject')->nullable();
            $table->string('path')->nullable();
            $table->foreign('from_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('to_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('reports');
    }
}
