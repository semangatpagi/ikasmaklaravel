<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkExperience extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'position',
        'company_name',
        'start_year',
        'end_year',
        'is_current',
        'alamat_kantor',
        'kota',
        'provinsi',
        'description'
    ];

    /**
     * Atribut yang harus dikonversi
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_current' => 'boolean',
        'start_year' => 'integer',
        'end_year' => 'integer',
    ];

    /**
     * Mendapatkan pengguna pemilik pengalaman kerja ini
     *
     * @return BelongsTo<User, WorkExperience>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Format tahun untuk tampilan
     */
    public function getYearRangeAttribute()
    {
        $startYear = $this->start_year;
        $endYear = $this->is_current ? 'Sekarang' : $this->end_year;
        
        return $startYear . ' - ' . $endYear;
    }
}
