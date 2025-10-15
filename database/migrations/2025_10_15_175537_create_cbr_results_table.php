<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cbr_results', function (Blueprint $table) {
            $table->id();
            $table->json('input_features'); // Menyimpan nilai A1–A5
            $table->string('predicted_label');
            $table->float('similarity', 8, 4);
            $table->string('level');
            $table->text('solution')->nullable();
            $table->text('recommendation')->nullable();
            $table->text('suggestion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cbr_results');
    }
};
