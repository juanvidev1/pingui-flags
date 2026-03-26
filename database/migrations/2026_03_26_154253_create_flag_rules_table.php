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
        Schema::create('flag_rules', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('flag_id')->constrained('flags')->onDelete('cascade');
            $table->string('rule_type'); // e.g., 'percentage', 'user_id', 'attribute'
            $table->json('rule_value'); // e.g., { "percentage": 50 }, { "user_id": "123" }, { "attribute": { "country": "US" } }
            $table->integer('priority')->default(0); // Determines the order of rule evaluations, lower values are evaluated first
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flag_rules');
    }
};
