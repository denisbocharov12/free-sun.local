<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\CategoryModel;
use App\Models\PostModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('FrontEnd.pages.index.index');
    }
}
