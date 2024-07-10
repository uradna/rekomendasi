<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    // use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'kodepos',
        'telp',
        'website',
        'email',
        'kepala',
        'tipe',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
