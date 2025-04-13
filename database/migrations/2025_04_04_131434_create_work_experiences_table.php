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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('position')->comment('Jabatan/posisi');
            $table->string('company_name')->comment('Nama perusahaan');
            $table->year('start_year')->comment('Tahun mulai');
            $table->year('end_year')->nullable()->comment('Tahun selesai, null jika masih bekerja');
            $table->boolean('is_current')->default(false)->comment('Status pekerjaan saat ini');
            $table->text('alamat_kantor')->nullable()->comment('Alamat kantor (opsional)');
            $table->string('kota')->nullable()->comment('Kota (opsional)');
            $table->string('provinsi')->nullable()->comment('Provinsi (opsional)');
            $table->text('description')->nullable()->comment('Deskripsi tugas/tanggung jawab (opsional)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
