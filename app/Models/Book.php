<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    protected $table  = 'books';

    public function authors()
    {
        return $this->belongsToMany(Author::class, 'author_books');
    }
}
