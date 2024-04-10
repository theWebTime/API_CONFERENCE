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
        Schema::create('conference_committee_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conferences_id');
            $table->foreign('conferences_id')->references('id')->on('conferences');
            $table->string('image', 300);
            $table->string('name', 20);
            $table->string('designation', 20);
            $table->string('facebook_link', 300)->nullable();
            $table->string('x_Link', 300)->nullable();
            $table->string('linkedin_link', 300)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conference_committee_members');
    }
};
