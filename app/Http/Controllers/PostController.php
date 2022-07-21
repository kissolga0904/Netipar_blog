<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts.index',[
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
        ]);
    }

    public function show( Post $post){
        return view('posts.show', [
            'post'=> $post
        ]);
    }

    //7 restful actions: index, show, create, store, edit, update, destroy

    public function create(){

        return view('posts.create');
    }
}
