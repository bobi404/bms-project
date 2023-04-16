<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Akademik extends Model
{
    use HasFactory;

    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class);
    }

    protected $fillable = [
        'nama',
        'deskripsi',
        'semester',
        'status'
    ];

    // protected $casts = [
    //     'semester' => 'boolean'
    // ];
}
