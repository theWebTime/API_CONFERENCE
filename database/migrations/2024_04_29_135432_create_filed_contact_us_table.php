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
        Schema::create('filed_contact_us', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->string('name', 20);
            $table->string('email', 80);
            $table->string('phone_number', 20);
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->text('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filed_contact_us');
    }
};
