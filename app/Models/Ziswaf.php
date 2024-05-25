<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ziswaf extends Model
{
    use HasFactory;

    protected $table = 'ziswafs';
    
    protected $fillable = [
        'id_donatur',
        'id_takmir',
        'alamat',
        'nominal_donasi',
        'metode_pembayaran',
        'kas_masuk',
        'kas_keluar',

    ];
    public function Donatur()
    {
        return $this->belongsTo(Donatur::class, 'id_donatur');
    }
    public function Takmir()
    {
        return $this->belongsTo(Takmir::class, 'id_takmir');
    }
}
