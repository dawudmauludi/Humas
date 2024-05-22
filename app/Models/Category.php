<?php


namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\PostsController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name', 'slug'
    // ];



        protected $fillable = [
            'name', 'slug',
        ];

    public function posts(){
        return $this->hasMany(Post::class);
    }

 

    
}

