<?php

use App\Enums\PrizePoolTypeEnum;
use App\Models\PrizePool;
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
        Schema::create('prize_pools', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('tournament_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('type', PrizePool::prizeTypes()->toArray())->default(PrizePoolTypeEnum::MONEY->value);
            $table->text('note');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prize_pools');
    }
};
