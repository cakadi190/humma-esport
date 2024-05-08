<?php

use App\Enums\TournamentApprovalStatusEnum;
use App\Enums\TournamentTypeEnum;
use App\Models\Tournament;
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
        Schema::create('tournaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('users_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('game_categories_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('name');
            $table->string('slug');
            $table->text('bracket_link'); # Untuk link bracket / bagan kompetisi yang sudah dibuat di platform lain.
            $table->text('description')->nullable();
            $table->dateTime('registration_open')->nullable()->useCurrentOnUpdate();
            $table->dateTime('registration_close')->nullable()->useCurrentOnUpdate();
            $table->dateTime('event_start')->nullable()->useCurrentOnUpdate();
            $table->unsignedBigInteger('registration_price')->default(0);
            $table->dateTime('event_end')->nullable()->useCurrentOnUpdate();
            $table->text('rules')->nullable();
            $table->string('poster_image', 100)->nullable();
            $table->string('pic_name', 191);
            $table->tinyInteger('number_of_teams')->default(1);
            $table->string('pic_contact', 191);
            $table->string('pic_email', 191);
            $table->enum('event_type', Tournament::tournamentTypes()->toArray())->default(TournamentTypeEnum::FREE->value);
            $table->enum('status', Tournament::tournamentStatus()->toArray())->default(TournamentApprovalStatusEnum::PENDING->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournaments');
    }
};
