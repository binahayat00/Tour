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
        Schema::create('booking_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tour_vehicle_id')->nullable();
            $table->integer('booking_id')->nullable();
            $table->integer('passenger_id')->nullable();
            $table->integer('seat')->nullable();
            $table->boolean('canceled')->default(0);
            $table->integer('admin_status_id')->nullable();
            $table->longText('descriptions')->nullable();
            $table->integer('price')->nullable();
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
        Schema::dropIfExists('booking_items');
    }
};
