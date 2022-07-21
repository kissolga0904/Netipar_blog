<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('ping', function (){
    $mailchimp = new MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us13'
    ]);

    $response = $mailchimp->lists->addListMember('53dd251d1a',[
        'email_address'=>'olga2001@indamail.hu',
        'status'=>'subscribed'
    ]);
    ddd($response);
});

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::post('posts/{post:slug}/comments',[PostCommentsController::class,'store']);

Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');

Route::get('login', [SessionsController::class,'create'])->middleware('guest');
Route::post('login', [SessionsController::class,'store'])->middleware('guest');
Route::post('logout', [SessionsController::class,'destroy'])->middleware('auth');
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
