<?php

namespace Database\Factories;

use App\Models\ProjectCategoryModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectCategoryModelFactory extends Factory
{
    protected $model = ProjectCategoryModel::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Частный сектор','Коммерческий сектор','Промышленный сектор'])
        ];
    }
}
