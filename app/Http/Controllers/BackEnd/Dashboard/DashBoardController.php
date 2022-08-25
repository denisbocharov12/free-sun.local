<?php

namespace App\Http\Controllers\BackEnd\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

final class DashBoardController extends Controller
{
    public function index(){
        return view('backend.dashboard.index');
    }
}
