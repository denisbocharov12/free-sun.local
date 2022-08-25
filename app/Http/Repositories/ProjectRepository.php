<?php

namespace App\Http\Repositories;

use App\Http\Requests\ProjectRequest;
use App\Models\ProjectDataModel;
use App\Models\ProjectModel;
use Illuminate\Support\Carbon;

class ProjectRepository
{
    public function createProject(ProjectRequest $request){
        $project = new ProjectModel();
        $project->fill([
            "title" => $request->input('title'),
            "mission" => $request->input('mission'),
            "description" => $request->input('description'),
            "status" => $request->input('status'),
            "year" => $request->input('year'),
            "project_category_model_id" => (int)$request->input('project_category_model_id'),
            "project_models_model_id" => (int)$request->input('project_models_model_id'),
            "project_invertor_model_id" => (int)$request->input('project_invertor_model_id'),
            "project_panel_model_id" => (int)$request->input('project_panel_model_id'),
        ])->save();
        return $project;
    }

    public function createProjectData(ProjectRequest $request, ProjectModel $model){
        $projectData = new ProjectDataModel();
        $projectData->cost_electro_before = $request->input('cost_electro_before');
        $projectData->cost_electro_after = $request->input('cost_electro_after');
        $projectData->cost_otoplen_before = $request->input('cost_otoplen_before');
        $projectData->cost_otoplen_after = $request->input('cost_otoplen_after');
        $projectData->conservation = $request->input('conservation');
        $projectData->save();
        $model->update([
            "project_data_model_id" => $projectData->id
        ]);
    }

    public function saveProjectData(ProjectRequest $request, ProjectModel $model){
        $model->data->update([
            "cost_electro_before" => $request->input('cost_electro_before'),
            "cost_electro_after" => $request->input('cost_electro_after'),
            "cost_otoplen_before" => $request->input('cost_otoplen_before'),
            "cost_otoplen_after" => $request->input('cost_otoplen_after'),
            "conservation" => $request->input('conservation'),
            "updated_at" => Carbon::now()
        ]);
    }

    public function updateProjectModel(ProjectRequest $request, ProjectModel $model){
        $model->update([
            "title" => $request->input('title'),
            "mission" => $request->input('mission'),
            "description" => $request->input('description'),
            "status" => $request->input('status'),
            "year" => $request->input('year'),
            "project_category_model_id" => (int)$request->input('project_category_model_id'),
            "project_models_model_id" => (int)$request->input('project_models_model_id'),
            "project_invertor_model_id" => (int)$request->input('project_invertor_model_id'),
            "project_panel_model_id" => (int)$request->input('project_panel_model_id'),
        ]);
    }
}
