<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PostsController extends Controller
{
    public function index(){

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }


        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = 'by '. $author->name;
        }

        return view('posts', [
            'title' => 'All Post:' . $title,
            'active' => 'posts',
            'posts' => post::latest()->filter(request(['cari', 'category', 'author']))->paginate(7)->withQueryString()
        ]);

    }


    public function show(post $post){
        return view('post', [
            'title' => 'single post',
            'active' => 'posts',
            'post' => $post
        ]);
    }

    public function post(Post $post)
{
    $categories = Category::all();
    return view('post.show', compact('post', 'categories'));
}

}
