<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    
    protected $fillable = [
        'macam_sholat',
        'waktu_masuk_sholat',
        'waktu_habis_sholat',
        
    ];
}
