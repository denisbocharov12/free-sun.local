<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('project_models')->insert([
            [
                'title'=>'Солнечная электростанция 15кВт. г.Кишинев',
                'mission'=>'На 100 % сократить расходы на электроэнергию и покрыть затраты на отопление',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'status'=>'active',
                'project_category_model_id' => 1,
                'project_models_model_id' => 1,
                'project_data_model_id' => 1,
                'project_invertor_model_id' => 1,
                'project_panel_model_id' => 1,
                'year'=>2021,
                'created_at' => now()->ceilYear(1)
            ],
        ]);
        DB::table('project_models')->insert([
            [
                'title'=>'Солнечная электростанция 125кВт. г.Бельцы',
                'mission'=>'На 100 % сократить расходы на электроэнергию и покрыть затраты на отопление',
                'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
                'status'=>'active',
                'project_category_model_id' => 2,
                'project_models_model_id' => 2,
                'project_data_model_id' => 2,
                'project_invertor_model_id' => 2,
                'project_panel_model_id' => 1,
                'year'=>2022,
                'created_at' => now()
            ],
        ]);

        DB::table('project_models_models')->insert([
            [
                'title'=>'Jinki solar 385 w',
            ],
            [
                'title'=>'Largo solarPanels 245 w',
            ],
        ]);

        DB::table('project_invertor_models')->insert([
            [
                'title'=>'Solis 30 k 5g',
            ],
            [
                'title'=>'Largo 30 k 5g',
            ],
        ]);

        DB::table('project_panel_models')->insert([
            [
                'title'=>'Solar Panel BI 1',
            ],
            [
                'title'=>'Solar Panel BI II',
            ],
        ]);

        DB::table('project_data_models')->insert([
            [
                'cost_electro_before'=> 60000,
                'cost_electro_after'=> 25000,
                'cost_otoplen_before'=> 410000,
                'cost_otoplen_after'=> 11000,
                'conservation'=>17,
            ],
            [
                'cost_electro_before'=> 50000,
                'cost_electro_after'=> 23000,
                'cost_otoplen_before'=> 360000,
                'cost_otoplen_after'=> 9000,
                'conservation'=>15,
            ],
        ]);
    }
}
