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
        Schema::disableForeignKeyConstraints();

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount', 8, 2);
            $table->string('type');
            $table->text('notes')->nullable();
            $table->boolean('is_paid')->default(false);
            $table->dateTime('invoice_date')->nullable();
            $table->dateTime('paid_date')->nullable();
            $table->foreignId('occupant_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
