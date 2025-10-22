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
        Schema::create('development_teams', function (Blueprint $table) {
            $table->id();
            $table->string('project_type');
            $table->integer('product_owners')->default(0);
            $table->integer('senior_devs')->default(0);
            $table->integer('junior_devs')->default(0);
            $table->integer('qa_testers')->default(0);
            $table->decimal('estimated_budget', 10, 2)->default(0);
            $table->string('start_time');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_teams');
    }
};
