<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Images extends Model
{
    protected $fillable = ['url'];
    public function imageable()
    {
      return $this->morphTo();
    }
}
