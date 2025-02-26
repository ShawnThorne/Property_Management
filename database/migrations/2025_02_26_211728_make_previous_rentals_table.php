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
        Schema::create('applicant_previous_rentals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->date('started_rent_date');
            $table->date('ended_rent_date');
            $table->timestamps();
        });


        for($i = 1; $i < 5; $i++) {
            Schema::table('applicants', function (Blueprint $table) use ($i) {
                $table->dropColumn("previous_rental_{$i}_name");
                $table->dropColumn("previous_rental_{$i}_phone");
                $table->dropColumn("previous_rental_{$i}_address");
                $table->dropColumn("previous_rental_{$i}_start_date");
                $table->dropColumn("previous_rental_{$i}_end_date");
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        for($i = 4; $i > 0; $i--) {
            Schema::table('applicants', function (Blueprint $table) use ($i) {
                $table->date("previous_rental_{$i}_end_date")->nullable()->after('notes');
                $table->date("previous_rental_{$i}_start_date")->nullable()->after('notes');
                $table->string("previous_rental_{$i}_address")->nullable()->after('notes');
                $table->string("previous_rental_{$i}_phone")->nullable()->after('notes');
                $table->string("previous_rental_{$i}_name")->nullable()->after('notes');
            });
        }

        Schema::dropIfExists('applicant_previous_rentals');
    }
};
