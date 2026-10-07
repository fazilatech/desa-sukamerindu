<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Keluarga extends Model
{
    protected $table = 'keluarga';

    protected $fillable = [
        'no_kk',
        'kepala_keluarga_id',
        'alamat',
        'dusun',
    ];

    public function kepalaKeluarga(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'kepala_keluarga_id'
        );
    }

    public function anggota()
    {
        return $this->hasMany(
            User::class,
            'no_kk',
            'no_kk'
        );
    }
}
