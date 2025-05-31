<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Carbon\Carbon;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function latestGrade(): HasOne
    {
    return  $this->hasOne(Grade::class)->latestOfMany();
    }
    public function firstGrade(): HasOne
    {
    return  $this->hasOne(Grade::class)->oldestOfMany();
    }

    public function highestGrade(): HasOne
    {
    return  $this->hasOne(Grade::class)->ofMany('score','max');
    }

    function lowestGrade(): HasOne
    {
    return  $this->hasOne(Grade::class)->ofMany('score','min');
    }

    public function grades(): hasMany
    {
        return $this->hasMany(Grade::class);
    }

    public function latestValidGrade()
    {
        return  $this->hasOne(Grade::class)->ofMany(['received_at' => 'max','score' => 'max'], function ($query) {
            $query->where('received_at', '<=', Carbon::parse('2023-04-04'));
        });
    }
}
