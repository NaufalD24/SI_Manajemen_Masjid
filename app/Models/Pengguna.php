<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'penggunas';
    
    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'id_imam',
        'id_jamaah',
        'id_donatur',
        'id_takmir',
        
    ];
    public function Imam()
    {
        return $this->belongsTo(Imam::class, 'id_imam');
    }
    
    public function Jamaah()
    {
        return $this->belongsTo(Jamaah::class, 'id_jamaah');
    }
    
    public function Donatur()
    {
        return $this->belongsTo(Donatur::class, 'id_donatur');
    }
    
    public function Takmir()
    {
        return $this->belongsTo(Takmir::class, 'id_takmir');
    }   
}
