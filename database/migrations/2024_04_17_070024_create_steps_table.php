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
        Schema::create('steps', function (Blueprint $table) {
            // $table->id();
            // $table->integer('objective_exercise_id');
            // $table->integer('exercise_id');
            $table->foreignId('objective_exercise_id')->constrained('objective_exercises')->cascadeOnDelete();
            $table->foreignId('exercise_id')->constrained('exercises')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};
