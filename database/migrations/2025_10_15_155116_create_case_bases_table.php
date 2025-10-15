<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_bases', function (Blueprint $table) {
            $table->id();
            $table->float('a1')->nullable();
            $table->float('a2')->nullable();
            $table->float('a3')->nullable();
            $table->float('a4')->nullable();
            $table->float('a5')->nullable();
            $table->string('label')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('case_bases');
    }
};
