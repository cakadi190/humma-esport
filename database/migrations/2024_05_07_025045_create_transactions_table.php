<?php

use App\Enums\TransactionStatusEnum;
use App\Models\Transaction;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->foreignId('group_to_event_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('users_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('total')->default(0);
            $table->unsignedBigInteger('tax')->default(0);
            $table->json('payment_method');
            $table->string('invoice_id');
            $table->string('reference');
            $table->enum('status', Transaction::getStatutes()->toArray())->default(TransactionStatusEnum::PENDING->value);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
