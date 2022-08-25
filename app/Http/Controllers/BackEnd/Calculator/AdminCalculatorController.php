<?php

namespace App\Http\Controllers\BackEnd\Calculator;

use App\Http\Controllers\Controller;
use App\Models\Calculator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCalculatorController extends Controller
{
    public function index(){
        $offers = Calculator::all();
        return view('BackEnd.Calculator.index',compact(['offers']));
    }

    public function view(Calculator $model){
        return view('BackEnd.Calculator.view',compact(['model']));
    }

    public function calculateDelete(Request $request){
        $id = $request->input('id');
        $offer = Calculator::where('id',$id)->first();
        $offer->delete();

        return response()->json(['msg'=> 'Офферта расчета успешно удалена!','status'=>true, 'deleted'=>$id]);
    }

}
