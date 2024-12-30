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
        Schema::table('occupants', function (Blueprint $table) {
            $table->dropConstrainedForeignId('room_id');
        });

        Schema::dropIfExists('property_rooms');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('property_rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_designation')->nullable();
            $table->unsignedInteger('num_of_occupants');
            $table->foreignId('property_id')->constrained();
            $table->timestamps();
        });

        Schema::table('occupants', function (Blueprint $table) {
            $table->foreignId('room_id')->constrained('property_rooms');
        });

        Schema::enableForeignKeyConstraints();
    }
};
