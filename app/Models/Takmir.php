<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takmir extends Model
{
    use HasFactory;

    protected $table = 'takmirs';
    
    protected $fillable = [
        'nama_takmir',
        'jabatan',
        'jk',
        'alamat',
        'no_hp',
        'tgl_bergabung',
    ];
}
