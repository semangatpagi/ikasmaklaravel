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
        Schema::table('users', function (Blueprint $table) {
            // Rename name column to nama_lengkap
            $table->renameColumn('name', 'nama_lengkap');
            
            // Add additional columns
            $table->string('nama_panggilan')->nullable()->after('nama_lengkap');
            $table->enum('role', ['unverified', 'member', 'member_plus', 'admin', 'super_admin'])->default('unverified')->after('remember_token');
            $table->string('angkatan')->nullable()->after('email_verified_at');
            $table->integer('tahun_masuk')->nullable()->after('angkatan');
            $table->integer('tahun_lulus')->nullable()->after('tahun_masuk');
            $table->text('alamat_rumah')->nullable()->after('tahun_lulus');
            $table->string('provinsi_rumah')->nullable()->after('alamat_rumah');
            $table->string('kota_rumah')->nullable()->after('provinsi_rumah');
            $table->string('whatsapp')->nullable()->after('kota_rumah');
            $table->string('pekerjaan')->nullable()->after('whatsapp');
            $table->string('perusahaan')->nullable()->after('pekerjaan');
            $table->text('alamat_kantor')->nullable()->after('perusahaan');
            $table->string('provinsi_kantor')->nullable()->after('alamat_kantor');
            $table->string('kota_kantor')->nullable()->after('provinsi_kantor');
            $table->string('nama_usaha')->nullable()->after('kota_kantor');
            $table->string('bidang_usaha')->nullable()->after('nama_usaha');
            $table->text('saran')->nullable()->after('bidang_usaha');
            $table->string('foto')->nullable()->after('saran');
            $table->timestamp('admin_verified_at')->nullable()->after('foto');
            $table->date('membership_expiry')->nullable()->after('role');
            $table->boolean('is_active')->default(true)->after('membership_expiry');
            $table->string('verification_token')->nullable()->after('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Rename nama_lengkap back to name
            $table->renameColumn('nama_lengkap', 'name');
            
            // Drop additional columns
            $table->dropColumn([
                'nama_panggilan',
                'role',
                'angkatan',
                'tahun_masuk',
                'tahun_lulus',
                'alamat_rumah',
                'provinsi_rumah',
                'kota_rumah',
                'whatsapp',
                'pekerjaan',
                'perusahaan',
                'alamat_kantor',
                'provinsi_kantor',
                'kota_kantor',
                'nama_usaha',
                'bidang_usaha',
                'saran',
                'foto',
                'admin_verified_at',
                'membership_expiry',
                'is_active',
                'verification_token'
            ]);
        });
    }
};
