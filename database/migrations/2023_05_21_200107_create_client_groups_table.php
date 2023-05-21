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
        Schema::create('client_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_profile_id')->constrained('user_profiles');
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('lft')->default(0);
            $table->unsignedBigInteger('rgt')->default(0);
            $table->unsignedBigInteger('depth')->default(0);
            $table->boolean('enabled')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_groups');
    }
};
