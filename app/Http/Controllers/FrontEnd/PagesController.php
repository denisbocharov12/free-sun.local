<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function aboutPanels(){
        return view('FrontEnd.pages.about-panels.index');
    }

    public function aboutUs(){
        return view('FrontEnd.pages.our-company.index');
    }
    public function contacts(){
        return view('FrontEnd.pages.contacts.index');
    }
    public function blog(){
        return view('FrontEnd.Blog.index');
    }
}
