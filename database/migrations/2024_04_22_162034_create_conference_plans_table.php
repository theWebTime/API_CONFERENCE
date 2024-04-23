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
        Schema::create('conference_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->decimal('amount', 9, 3);
            $table->string('title', 50);
            $table->text('description');
            $table->boolean('status')->default(1)->comment("1 for active and 0 for in-active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_plans');
    }
};
