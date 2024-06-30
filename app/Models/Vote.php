<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'paslon_id',
    ];

    protected $table = 'votes';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')->select('name'); // Memilih kolom name' dari tabel 'users'
    }
    public function paslon()
    {
        return $this->belongsTo(Paslon::class);
    }
}
