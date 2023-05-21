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
        Schema::create('template_user_profile', function (Blueprint $table) {
            $table->foreignId('user_profile_id')->constrained('user_profiles');
            $table->foreignId('template_id')->constrained('templates');
            $table->json('setting_values')->nullable();
            $table->boolean('enabled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_user_profile');
    }
};
