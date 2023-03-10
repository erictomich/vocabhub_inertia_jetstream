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
        Schema::create('subject', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->unsignedBigInteger('parent_subject_id')->nullable();
            $table->integer('order');
            $table->string('slug');
            $table->timestamps();

            $table->foreign('parent_subject_id')->references('id')->on('subject')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject');
    }
};
