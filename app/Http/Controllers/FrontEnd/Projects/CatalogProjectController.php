<?php

namespace App\Http\Controllers\FrontEnd\Projects;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategoryModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class CatalogProjectController extends Controller
{
    public function index(){
        $projects = ProjectModel::active()
            ->paginate(12)
            ->appends(request()->query());
        return view('FrontEnd.Project.catalog',compact(['projects']));
    }
    public function category($id){
        $projects = ProjectModel::active()
            ->where('project_category_model_id', $id)
            ->paginate(12)
            ->appends(request()->query());
        return view('FrontEnd.Project.category',compact(['projects','id']));
    }
}
