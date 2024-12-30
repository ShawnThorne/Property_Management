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
        Schema::table('users', function(Blueprint $table){
            $table->string('phone')->after('email_verified_at')->unique();
            $table->text('notes')->after('phone')->nullable();
            $table->boolean('is_admin')->after('notes')->default(false);
            $table->foreignId('applicant_id')->nullable()->after('is_admin')->constrained()->nullOnDelete();
            $table->softDeletes();
        });

        Schema::table('payments', function(Blueprint $table){
            $table->foreignId('user_id')->after('occupant_id')->constrained()->cascadeOnDelete();
            $table->dropConstrainedForeignId('occupant_id');
        });

        Schema::table('leases', function(Blueprint $table){
            $table->foreignId('user_id')->after('occupant_id')->constrained()->cascadeOnDelete();
            $table->dropConstrainedForeignId('occupant_id');
        });

        Schema::table('service_requests', function(Blueprint $table){
            $table->foreignId('user_id')->after('occupant_id')->constrained()->cascadeOnDelete();
            $table->dropConstrainedForeignId('occupant_id');
        });

        Schema::table('applicants', function(Blueprint $table){
            $table->dropConstrainedForeignId('occupant_id');
        });

        Schema::dropIfExists('occupants');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::create('occupants', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->text('notes')->nullable();
            $table->foreignId('applicant_id')->nullable()->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('phone');
            $table->dropColumn('notes');
            $table->dropColumn('is_admin');
            $table->dropConstrainedForeignId('applicant_id');
            $table->dropSoftDeletes();
        });

        Schema::table('payments', function(Blueprint $table){
            $table->foreignId('occupant_id')->after('user_id')->constrained();
            $table->dropConstrainedForeignId('user_id');
        });

        Schema::table('leases', function(Blueprint $table){
            $table->foreignId('occupant_id')->after('user_id')->constrained();
            $table->dropConstrainedForeignId('user_id');
        });

        Schema::table('service_requests', function(Blueprint $table){
            $table->foreignId('occupant_id')->after('user_id')->constrained();
            $table->dropConstrainedForeignId('user_id');
        });

        Schema::table('applicants', function(Blueprint $table){
            $table->foreignId('occupant_id')->nullable()->constrained();
        });
    }
};
