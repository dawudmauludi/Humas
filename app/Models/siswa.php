<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function plotinganPkl()
{
    return $this->hasOne(plotingan_pkl::class, 'id_siswa');
}
}
