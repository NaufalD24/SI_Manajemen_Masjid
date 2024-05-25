<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;
    protected $table = 'donaturs';
    
    protected $fillable = [
        'nama_donatur',
        'id_jamaah',
        'alamat',
        'nominal_donasi',
        'metode_pembayaran',
    ];
    public function Jamaah()
    {
        return $this->belongsTo(Jamaah::class, 'id_jamaah');
    }
}
