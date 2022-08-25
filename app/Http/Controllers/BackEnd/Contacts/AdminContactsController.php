<?php

namespace App\Http\Controllers\BackEnd\Contacts;

use App\Http\Controllers\Controller;
use App\Models\ContactsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminContactsController extends Controller
{
    public function index(){
        $contacts = ContactsModel::all();
        return view('BackEnd.Contacts.index',compact(['contacts']));
    }

    public function view(ContactsModel $model){
        return view('BackEnd.Contacts.view',compact(['model']));
    }

    public function projectDelete(Request $request){
        $id = $request->input('id');
        $project = ProjectModel::where('id',$id)->first();
        $project->delete();
        $project->data->delete();
        return response()->json(['msg'=> $project->title.' успешно удален!','status'=>true, 'deleted'=>$id]);
    }
    public function projectStatus(Request $request){
        if ($request->mode =='true'){
            DB::table('project_models')->where('id', $request->id)->update(['status'=>'active']);
        } else {
            DB::table('project_models')->where('id', $request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Успешное редактирование статуса','status'=>true]);
    }
}
