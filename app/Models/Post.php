<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //everything is fillable, except what you provide to this array
    protected $guarded = [];

    //default for every post query you perform
    protected $with = ['category', 'author'];

    //the other things will be ignored, we just care about the title, excerpt and the body
    //protected $fillable = ['title', 'excerpt', 'body', 'id'];
    /* not neccessary in this case
    public function getRouteKeyName()
    {
        return 'slug';
    }
    */
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, fn ($query,$search)=>
            $query
                ->where('title', 'like', '%' . $search. '%')
                ->orWhere('body', 'like', '%' . $search . '%'));

        $query->when($filters['category'] ?? false, fn ($query,$category)=>
        $query->whereHas('category', fn($query) =>
            $query->where('slug', $category)));
    }

    public function category(){
        //relationship between a post and a category
        return $this ->belongsTo(Category::class);
    }

    public function author()
    {
        return $this ->belongsTo(User::class, 'user_id');
    }
}
