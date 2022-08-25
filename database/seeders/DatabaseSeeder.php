<?php

namespace Database\Seeders;

use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\ProjectCategoryModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(SpatieAdminsAndUsersSeeder::class);
        $this->call(AdminsSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectModelSeeder::class);
        CategoryModel::factory()->count(2)->create();
        PostModel::factory()->count(25)->create();
        ProjectCategoryModel::factory()->count(2)->create();
    }
}
