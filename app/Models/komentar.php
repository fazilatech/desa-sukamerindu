<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = [
        'informasi_id',
        'user_id',
        'komentar',
    ];

    public function informasi()
    {
        return $this->belongsTo(Informasi::class, 'informasi_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
