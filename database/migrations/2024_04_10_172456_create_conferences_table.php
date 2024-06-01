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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('primary_color', 10);
            $table->string('secondary_color', 10);
            $table->string('domain', 50)->unique();
            $table->string('title', 50)->unique();
            $table->string('date', 30);
            $table->text('address');
            $table->text('iframe');
            $table->string('contact_number1', 20);
            $table->string('contact_number2', 20);
            $table->string('wp_number', 20);
            $table->string('email', 80)->unique();
            $table->string('logo', 300);
            $table->string('abstract_file_sample', 300);
            $table->boolean('status')->default(1)->comment('1 is Active & 0 is Inactive');
            $table->unsignedBigInteger('conference_tags_id');
            $table->foreign('conference_tags_id')->references('id')->on('conference_tags');
            $table->unsignedBigInteger('conference_types_id');
            $table->foreign('conference_types_id')->references('id')->on('conference_types');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
