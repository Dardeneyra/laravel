<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Teacher extends Model
{
    public function monitor(): HasOneThrough
    {
    return $this->hasOneThrough(
        Monitor::class,
        Classroom::class
    );
    }
}

