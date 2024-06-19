<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];

    public function plotingan(){
        $this->belongsTo(plotingan_pkl::class);
    }
}
