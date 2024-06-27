<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dudi extends Model
{
    use HasFactory;
    protected $guarded =[
        'id'
    ];


    public function ketersediaans()
    {
        return $this->hasMany(Ketersediaan::class, 'id_dudi');
    }
}
