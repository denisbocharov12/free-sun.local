<?php

namespace App\Http\Controllers\BackEnd\Offers;

use App\Http\Controllers\Controller;
use App\Models\Offers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminOffersController extends Controller
{
    public function index(){
        $offers = Offers::all();
        return view('BackEnd.Offers.index',compact(['offers']));
    }

    public function view(Offers $model){
        return view('BackEnd.Offers.view',compact(['model']));
    }

    public function calculatorDelete(Request $request){
        $id = $request->input('id');
        $offer = Offers::where('id',$id)->first();
        $offer->delete();
        return response()->json(['msg'=> 'Офферта успешно удалена!','status'=>true, 'deleted'=>$id]);
    }
}
