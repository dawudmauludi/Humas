<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plotingan_pkl extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];

    public function ketersediaan()
    {
        return $this->belongsTo(Ketersediaan::class, 'id_ketersediaan');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function pembimbing()
    {
        return $this->belongsTo(Pembimbing::class, 'id_pembimbing');
    }
   


}
