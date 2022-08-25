<?php

namespace App\Http\Controllers\FrontEnd\Projects;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class SingleProjectController extends Controller
{
    public function index(ProjectModel $model){
        return view('FrontEnd.Project.single', compact(['model']));
    }
}
