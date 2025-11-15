<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order__rooms', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');
            $table->string('room_type');
            $table->string('room_price');
            $table->string('room_img');
            $table->string('startDate');
            $table->string('endDate'); 
            $table->unsignedBigInteger('adult');
            $table->unsignedBigInteger('child');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('room_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__rooms');
    }
};
