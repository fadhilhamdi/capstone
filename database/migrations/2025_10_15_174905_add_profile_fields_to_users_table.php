<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('tanggal_lahir')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->text('alamat')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['tanggal_lahir', 'nomor_telepon', 'alamat']);
        });
    }

};
