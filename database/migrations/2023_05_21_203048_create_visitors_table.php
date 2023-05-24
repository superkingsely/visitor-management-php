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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_name');
            $table->string('visitor_email');
            $table->string('visitor_mobile_no');
            $table->string('visitor_address');
            $table->string('visitor_meet_person_name');
            $table->string('visitor_department');
            $table->string('visitor_reason_to_meet');
            $table->string('visitor_enter_time');
            $table->string('visitor_outing_remark');
            $table->string('visitor_out_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
