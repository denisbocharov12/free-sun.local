<?php

namespace App\Http\Services;

use App\Http\Requests\ProjectRequest;
use App\Models\ProjectModel;
use Illuminate\Support\Facades\File;

class ProjectService
{
    public function addingMediaToCollection(ProjectModel $model, ProjectRequest $request){
       if ($request->has('media')){
           $model->addMultipleMediaFromRequest(['media'])
               ->each(function ($fileAdder) {
                   $fileAdder->toMediaCollection();
               });
       }
       else{
           return;
       }
    }

    public function deleteMediaFromModel(ProjectModel $model, $id){
        if (!empty($model->getMedia()->where('id',$id)->first())){
            $model->deleteMedia($id);
            return true;
        } else{
            return false;
        }
    }
}
