<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;
    // protected $fillable = [
    //     'titel', 'exerpt', 'body' 
    // ];

    // protected $fillable = [
    //     'category_id', 'user_id', 'title', 'slug', 'exerpt', 'body', 'publis_at'
    // ];

        protected $guarded = ['id'];

        protected $with =['category', 'author'];
        public function scopeFilter($query, array $filters)
        {
            $query->when($filters['cari'] ?? false, function($query, $cari) {
                return $query->where(function($query) use ($cari) {
                    $query->where('titel', 'like', '%' . $cari . '%')
                          ->orWhere('body', 'like', '%' . $cari . '%');
                });
            });
        
            $query->when($filters['category'] ?? false, function($query, $category) {
                return $query->whereHas('category', function($query) use ($category) {
                    $query->where('slug', $category);
                });
            });
        
            $query->when($filters['author'] ?? false, function($query, $author) {
                return $query->whereHas('author', function($query) use ($author) {
                    $query->where('username', $author);
                });
            });
        }
            

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }   

public function getRouteKeyName()
{
    return 'slug';
}

public function sluggable(): array
{
    return [
        'slug' => [
            'source' => 'titel'
        ]
    ];
}
    

}
