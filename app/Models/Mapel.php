<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mapel',
        'kkm',
        'tingkat',
        'deskripsi',
    ];
    
    public function guru(): HasMany
    {
        return $this->hasMany(Guru::class);
    }
}
