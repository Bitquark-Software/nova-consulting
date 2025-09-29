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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('status', ['draft','accepted','in_progress','done','cancelled'])->default('draft');
            $table->string('company_name');
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // cliente opcional
            $table->decimal('budget', 12, 2)->default(0);
            $table->decimal('budget_used', 12, 2)->default(0);
            $table->unsignedTinyInteger('progress')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
