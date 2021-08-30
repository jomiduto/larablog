<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostImage extends Model
{
    // use HasFactory;
    protected $fillable = ['post_id', 'image']; //Especifico nombre de las columnas de la tabla

    // Relación con la tabla Category mediante el modelo
    public function post()
    {
        return $this->belongsTo(Post::class)->withDefault();
    }
}
