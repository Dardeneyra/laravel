<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Library;
use App\Models\Bookks;


class City extends Model
{
    public function books(): HasManyThrough
    {
        return $this->hasManyThrough(
            Bookks::class,
        Library::class,
        'city_id',
        'library_id',
        'id'
        );
    }
}
