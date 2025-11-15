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
        Schema::create('order__packages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('adult');
            $table->unsignedBigInteger('child');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('package_id');
            $table->string('package_title');
            $table->string('package_price');
            $table->string('package_img');
            $table->string('startDate');
            $table->string('endDate'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order__packages');
    }
};
