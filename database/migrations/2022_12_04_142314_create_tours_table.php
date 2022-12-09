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
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->json('title')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->json('description')->nullable();
            $table->json('overview')->nullable();
            $table->json('contract')->nullable();
            $table->json('bonus')->nullable();
            $table->string('location')->nullable();
            $table->integer('general_price')->nullable();
            $table->json('custom_price')->nullable();
            $table->boolean('sold_out')->default(0);
            $table->boolean('come')->default(0);
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('tours');
    }
};
