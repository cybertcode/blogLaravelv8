<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // Relacion de uno a muchos inversa
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación de uno a uno polimórfica
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}