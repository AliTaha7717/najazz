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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('type');
            $table->string('title');
            $table->string('type_order');
            $table->string('weight')->nullable();
            $table->string('from');
            $table->string('to');
            $table->timestamp('from_time')->nullable();
            $table->timestamp('to_time')->nullable();
            $table->string('near_from')->nullable();
            $table->string('near_to')->nullable();
            $table->string('description')->nullable();
            $table->boolean('implemented')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
