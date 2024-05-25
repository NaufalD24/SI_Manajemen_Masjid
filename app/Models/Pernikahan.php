<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pernikahan extends Model
{
    use HasFactory;

    protected $table = 'pernikahans';
    
    protected $fillable = [
        'id_jamaah',
        'nik_ktp_pria',
        'nik_ktp_wanita',
        'alamat',
        
    ];
    public function Jamaah()
    {
        return $this->belongsTo(Jamaah::class, 'id_jamaah');
    }
}
