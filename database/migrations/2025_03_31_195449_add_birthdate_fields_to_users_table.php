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
            // Tambahkan field tempat_lahir jika belum ada
            if (!Schema::hasColumn('users', 'tempat_lahir')) {
                $table->string('tempat_lahir')->nullable()->after('nama_panggilan');
            }
            
            // Tambahkan field tanggal_lahir jika belum ada
            if (!Schema::hasColumn('users', 'tanggal_lahir')) {
                $table->date('tanggal_lahir')->nullable()->after('tempat_lahir');
            }
            
            // Tambahkan field media sosial (jika belum ada)
            if (!Schema::hasColumn('users', 'facebook')) {
                $table->string('facebook')->nullable()->after('email');
            }
            
            if (!Schema::hasColumn('users', 'instagram')) {
                $table->string('instagram')->nullable()->after('facebook');
            }
            
            if (!Schema::hasColumn('users', 'linkedin')) {
                $table->string('linkedin')->nullable()->after('instagram');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus kolom-kolom baru jika migrasi di-rollback
            $table->dropColumn(['facebook', 'instagram', 'linkedin']);
        });
    }
};
