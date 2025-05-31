<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCRUD extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

}
