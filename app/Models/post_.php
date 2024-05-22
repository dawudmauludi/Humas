<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class post 
{
   private static $blog_spots = [[
        'title' => 'Ini Dawud',
        'slug' => 'judul-slide-pertama',
        'author' => 'Dawud',
        'body' => 'halo perkenalkan nama saya dawud mauludi saya lahir di pasuruan, saya sekarang sekolah di smk negri 1 pasuruan, saya mengambil jurusan rekayasa perangkat lunak,
        saya sekarang tinggak di ngemplak, hobi saya bermain bola, tapi sekarang saya suka ngoding.'
    ],
    [
        'title' => 'Himmatul Aliyah',
        'slug' => 'judul-slide-kedua',
        'author' => 'Dawud',
        'body' => 'Dan himmatul aliyah adalah nama pacar saya dia adalah perempuan yang kuat, dan cantik dan dia juga pintar memasak, sekarang dia tinggal bersama orang tuanya di keraton, dia hoby tidur dan checkout dia suka sekali menghabiskabn uangnya '
    ]
    
    ];

    public static function all(){
        return collect(self::$blog_spots);
    }

    public static function find($slug){
        $posts = static::all();

    //        $post = [];  
    // foreach($posts as $p){
    //     if($p['slug'] === $slug){
    //         $post = $p;
    //     }
    // }    

    return $posts->firstWhere('slug', $slug);

    }
}
