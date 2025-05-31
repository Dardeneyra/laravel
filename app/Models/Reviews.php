<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $fillable = ['content'];
    public function reviewable()
    {
        return $this->morphTo();
    }
}
