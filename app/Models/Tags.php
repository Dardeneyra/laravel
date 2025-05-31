<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $fillable = ['name'];


    public function products()
    {
        return $this->morphedByMany(Product::class, 'taggable');
    }

    public function user()
    {
        return $this->morphedByMany(User::class, 'taggable');
    }
}
