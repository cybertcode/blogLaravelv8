<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {

        //retornamos relacion de uno a muchos y le pasamos el modelo Post
        return $this->hasMany(Post::class);
    }
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
    // // relación de muchos a muchos
    // public function tags()
    // {
    //     return $this->belongsToMany(Tag::class);
    // }
}