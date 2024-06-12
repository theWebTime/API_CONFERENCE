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
        Schema::create('conference_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->unsignedBigInteger('registers_id');
            $table->foreign('registers_id')->references('id')->on('registers');
            $table->unsignedBigInteger('conference_plans_id');
            $table->foreign('conference_plans_id')->references('id')->on('conference_plans');
            $table->string('transaction_id');
            $table->smallInteger('status')->default(1)->comment('1 is pending, 2 is successful, 3 is cancel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_payments');
    }
};
