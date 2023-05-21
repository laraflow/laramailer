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
        Schema::create('profile_completion_user_profile', function (Blueprint $table) {
            $table->foreignId('user_profile_id')->constrained('user_profiles');
            $table->foreignId('profile_completion_id')->constrained('profile_completions');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_completion_user_profile');
    }
};
