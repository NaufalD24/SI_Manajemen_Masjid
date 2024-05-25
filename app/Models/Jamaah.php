<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jamaah extends Model
{
    use HasFactory;

    protected $table = 'jamaahs';
    
    protected $fillable = [
        'nama_jamaah',
        'alamat',
        'jk',
        'no_hp',
    ];
}
