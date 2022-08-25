<?php

namespace App\Http\Controllers\FrontEnd\Contacts;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Models\ContactsModel;
use Illuminate\Http\Request;

final class ContactsController extends Controller
{
    public function index(){
        return view('FrontEnd.pages.contacts.index');
    }

    public function store(ContactsRequest $request){
        $request->validated();
        if ($request->ajax()){
            $contact = ContactsModel::create($request->all());
            if ($contact){
                return response()->json(['status'=>true]);
            }
        } else{
            ContactsModel::create($request->all());
            toastr()->success('Мы успешно получили ваше сообщение!','Успех');
            return redirect()->route('index');
        }
    }
}
