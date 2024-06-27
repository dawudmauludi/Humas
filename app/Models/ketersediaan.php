<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ketersediaan extends Model
{
    use HasFactory;

    protected $table = 'ketersediaans';

    protected $fillable = [
       'id_dudi','jurusan', 'jumlah_siswa', 'kuota', 'sisa_kuota', 'nama_siswa'
    ];

    protected $casts = [
        'nama_siswa' => 'array'
    ];

    
    public function dudi()
    {
        return $this->belongsTo(Dudi::class, 'id_dudi');
    }

    public function plotinganPkl()
    {
        return $this->hasMany(plotingan_pkl::class, 'id_ketersediaan');
    }
}
