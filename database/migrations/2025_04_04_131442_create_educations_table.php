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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('institution_name')->comment('Nama institusi pendidikan');
            $table->string('institution_code', 3)->comment('Kode/inisial institusi (2-3 huruf)');
            $table->string('major')->nullable()->comment('Jurusan/program studi');
            $table->string('level')->comment('Jenjang pendidikan (SD, SMP, SMA, S1, S2, dll)');
            $table->year('start_year')->comment('Tahun mulai');
            $table->year('end_year')->comment('Tahun selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
