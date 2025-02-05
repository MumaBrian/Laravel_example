<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmployerIdToJobListingsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            if (!Schema::hasColumn('job_listings', 'employer_id')) {
                $table->unsignedBigInteger('employer_id')->after('id');
                $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_listings', function (Blueprint $table) {
            $table->dropForeign(['employer_id']);
            $table->dropColumn('employer_id');
        });
    }
}