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
        Schema::create('email_layouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('subject');
            $table->longText('body')->nullable();
            $table->json('attachments')->nullable();
            $table->foreignId('user_profile_id')->constrained('user_profiles');
            $table->foreignId('template_layout_id')->constrained('template_layouts');
            $table->foreignId('signature_id')->nullable()->constrained('signatures');
            $table->boolean('delivered_report')->default(false);
            $table->boolean('read_report')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_layouts');
    }
};
