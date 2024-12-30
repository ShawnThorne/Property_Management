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
        Schema::table('applicants', function (Blueprint $table) {
            $table->foreignId('occupant_id')->nullable()->constrained();
        });

        Schema::table('occupants', function(Blueprint $table){
            $table->string('email')->after('name')->unique();
            $table->string('phone')->after('email')->unique();
            $table->text('notes')->after('phone')->nullable();
            $table->foreignId('applicant_id')->nullable()->after('notes')->constrained();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('applicants', function (Blueprint $table) {
            $table->dropConstrainedForeignId('occupant_id');
        });

        Schema::table('occupants', function(Blueprint $table){
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('notes');
            $table->dropSoftDeletes();
        });
    }
};
