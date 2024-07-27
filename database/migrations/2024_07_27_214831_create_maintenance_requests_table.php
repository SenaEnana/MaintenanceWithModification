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
        Schema::table('maintenance_requests', function (Blueprint $table) {
            if (!Schema::hasColumn('maintenance_requests', 'id')) {
                $table->id();
            }
            if (!Schema::hasColumn('maintenance_requests', 'customer_id')) {
                $table->foreignId('customer_id')->constrained();
            }
            if (!Schema::hasColumn('maintenance_requests', 'equipment_id')) {
                $table->foreignId('equipment_id')->constrained();
            }
            if (!Schema::hasColumn('maintenance_requests', 'request_type_id')) {
                $table->unsignedBigInteger('request_type_id');
                $table->foreign('request_type_id')->references('id')->on('request_types')->onDelete('cascade');
            }
            if (!Schema::hasColumn('maintenance_requests', 'description')) {
                $table->text('description');
            }
            if (!Schema::hasColumn('maintenance_requests', 'status')) {
                $table->enum('status', ['Pending', 'Completed']);
            }
            if (!Schema::hasColumn('maintenance_requests', 'created_at') || !Schema::hasColumn('maintenance_requests', 'updated_at')) {
                $table->timestamps();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('maintenance_requests', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['equipment_id']);
            $table->dropForeign(['request_type_id']);
        });

        Schema::dropIfExists('maintenance_requests');
    }
};
