<?php

namespace App\Models;


use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    // public static function boot()
    // {
    //     // parent::boot();
        
    //     // self::creating(function ($post){
    //     //     $post->user()->associate(auth()->user()->id);
    //     //     $post->category()->associate(request()->category);
    //     // });
    // }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getTitleAttribut($attribute)
    {
        return Str::title($attribute);
    }
}
