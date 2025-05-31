<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nette\Utils\Image;


class Product extends Model
{
    public function image(): \Illuminate\Database\Eloquent\Relations\MorphOne
    {
        return $this->morphOne(Images::class, 'imageable');
    }

    public function tags()
    {
        return $this->morphToMany(Tags::class, 'taggable');
    }
}
