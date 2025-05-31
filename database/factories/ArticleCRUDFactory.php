<?php

namespace Database\Factories;

use App\Models\ArticleCRUD;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleCRUDFactory extends Factory
{
    protected $model = ArticleCRUD::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
        ];
    }
}
