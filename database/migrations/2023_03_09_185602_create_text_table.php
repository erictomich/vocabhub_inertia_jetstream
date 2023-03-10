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
        Schema::create('text', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title_pt');
            $table->string('slug');
            $table->text('text');
            $table->text('text_pt');
            $table->foreignId('subject_id')->constrained('subject');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text');
    }
};
