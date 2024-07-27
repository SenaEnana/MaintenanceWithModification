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
        Schema::create('technicians', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('technician_id');
                $table->string('first_name');
                $table->string('last_name');
                $table->string('email')->unique();
                $table->string('phone');
                $table->foreignId('job_type_id')->constrained(); 
                $table->foreignId('location_id')->constrained();
                $table->string('password'); 
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('technicians', function (Blueprint $table) {
            $table->dropForeign(['job_type_id']);
            $table->dropForeign(['location_id']);
        });

        Schema::dropIfExists('technicians');
    }
};
