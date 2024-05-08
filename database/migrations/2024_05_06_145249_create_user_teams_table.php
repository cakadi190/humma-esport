<?php

use App\Enums\TeamRoleEnum;
use App\Models\UserTeam;
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
        Schema::create('user_teams', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('image');
            $table->text('description');
            $table->enum('role', UserTeam::teamRoles()->toArray())->default(TeamRoleEnum::LEADER->value);
            $table->foreignId('game_categories_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_teams');
    }
};
