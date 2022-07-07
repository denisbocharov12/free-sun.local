<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutPanels(){
        return view('FrontEnd.pages.about-panels.index');
    }
    public function calculator(){
        return view('FrontEnd.pages.calculator.index');
    }
    public function ourCompany(){
        return view('FrontEnd.pages.our-company.index');
    }
    public function ourProjects(){
        return view('FrontEnd.pages.our-projects.index');
    }
}
