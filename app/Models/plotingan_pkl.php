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

    public function dudi()
    {
        return $this->belongsTo(Dudi::class, 'id_dudi');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function pembimbing()
    {
        return $this->belongsTo(pembina::class, 'id_pemimbing');
    }


}
