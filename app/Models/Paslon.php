<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'visi',
        'misi',
        'gambar',
    ];

    protected $table = 'paslon';

}
