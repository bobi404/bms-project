<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classroom extends Model
{
    use HasFactory;

    protected $fillable = [
        'guru_id',
        'akademik_id',
        'nama_kelas',
        'tingkat',
        'label',
    ];

    public function guru(): BelongsTo
    {
        return $this->belongsTo(Guru::class);
    }

    public function akademik(): BelongsTo
    {
        return $this->belongsTo(Akademik::class);
    }
}
