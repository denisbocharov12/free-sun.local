<?php

namespace Database\Factories;

use App\Models\CategoryModel;
use App\Models\PostModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostModelFactory extends Factory
{
    protected $model = PostModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'category_model_id' => $this->faker->randomElement([1,2])
        ];
    }
}
