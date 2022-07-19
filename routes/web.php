<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('register',[RegisterController::class,'create']);
Route::post('register',[RegisterController::class,'store']);
//new route to show all posts in one category:
/*Route::get('categories/{category:slug}',function (Category $category){
    return view('posts',[
        'posts'=>$category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
        ]);
})->name('category');*/

/*Route::get('authors/{author:username}',function (User $author){
    return view('posts.index',[
        'posts'=>$author->posts
    ]);
});*/
