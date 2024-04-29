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
        Schema::create('submit_abstracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->string('title', 20);
            $table->string('name', 20);
            $table->string('email', 80);
            $table->string('alternative_email', 80);
            $table->string('phone_number', 20);
            $table->string('whatsapp_number', 20);
            $table->string('city', 20);
            $table->string('organization', 50);
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('interested_in', 20);
            $table->string('abstract_title', 50);
            $table->text('message');
            $table->string('submit_abstract_file', 300);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submit_abstracts');
    }
};