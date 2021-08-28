<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    protected $fillable = ['title', 'url_clean', 'content', 'category_id']; //Especifico nombre de las columnas de la tabla
}
