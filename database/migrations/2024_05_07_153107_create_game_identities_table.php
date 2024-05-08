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
        Schema::create('game_identities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->updateOnDelete();
            $table->foreignId('game_category_id')->constrained()->cascadeOnDelete()->updateOnDelete();
            $table->string('game_id')->nullable();
            $table->string('game_nickname')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_identities');
    }
};
