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
        Schema::create('template_layouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id');
            $table->string('name');
            $table->string('location');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('lft')->default(0);
            $table->unsignedBigInteger('rgt')->default(0);
            $table->unsignedBigInteger('depth')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_layouts');
    }
};
