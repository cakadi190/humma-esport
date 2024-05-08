<?php

use App\Enums\TournamentWinnerEnum;
use App\Models\TournamentWinner;
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
        Schema::create('tournament_winners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->enum('grade', TournamentWinner::winnerLevel()->toArray())->default(TournamentWinnerEnum::FIRST->value);
            $table->foreignId('tournaments_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('user_teams_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournament_winners');
    }
};
