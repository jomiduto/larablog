<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    // use HasFactory;
    protected $fillable = ['title', 'url_clean', 'content', 'category_id', 'posted']; //Especifico nombre de las columnas de la tabla

    // Relación con la tabla Category mediante el modelo
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }
}
