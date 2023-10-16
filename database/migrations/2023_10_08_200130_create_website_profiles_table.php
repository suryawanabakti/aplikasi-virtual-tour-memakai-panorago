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
        Schema::create('website_profile', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Virtual Tour');
            $table->string('about')->default('Aplikasi untuk memulai petualangan secarang online 😲');
            $table->text('deskripsi')->nullable();
            $table->string('no_telepon')->default('082189719077');
            $table->string('email')->default('akmal@gmail.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_profiles');
    }
};
