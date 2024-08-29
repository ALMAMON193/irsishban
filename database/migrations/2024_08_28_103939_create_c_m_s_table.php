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
        Schema::create('c_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('subtitle')->nullable();
            $table->string('button_link')->nullable();
            $table->longText('button_text')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('card_content')->nullable();
            $table->string('video')->nullable();
            $table->string('section');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_m_s');
    }
};
