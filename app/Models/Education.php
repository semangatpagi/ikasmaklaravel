<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Education extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model
     *
     * @var string
     */
    protected $table = 'educations';

    /**
     * Atribut yang dapat diisi secara massal
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'institution_name',
        'institution_code',
        'major',
        'level',
        'start_year',
        'end_year',
    ];

    /**
     * Atribut yang harus dikonversi
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_year' => 'integer',
        'end_year' => 'integer',
    ];

    /**
     * Mendapatkan pengguna pemilik riwayat pendidikan ini
     *
     * @return BelongsTo<User, Education>
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
        return $this->start_year . ' - ' . $this->end_year;
    }
}
