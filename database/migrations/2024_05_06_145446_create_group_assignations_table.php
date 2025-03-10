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
        Schema::create('group_assignations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_teams_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('users_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_assignations');
    }
};
