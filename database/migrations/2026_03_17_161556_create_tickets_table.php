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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('status')->default('abierto'); // abierto, en_revision, desarrollo, pruebas, cerrado
            $table->string('priority')->default('media');

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); // El Cliente
            $table->foreignId('assigned_to_id')->nullable()->constrained('users')->nullOnDelete(); // El Empleado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
