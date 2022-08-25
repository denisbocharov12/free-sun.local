<?php

namespace App\Http\Repositories;

use App\Http\Requests\CategoryRequest;
use App\Models\ProjectCategoryModel;

class CategoryRepository
{
    public function create(CategoryRequest $request){

        $category = new ProjectCategoryModel();

        $category->fill([
            'title' => $request->input('title')
        ])->save();

        return $category;
    }

    public function update(CategoryRequest $request, ProjectCategoryModel $model){

        $model->update([
           'title' => $request->input('title')
        ]);

    }
}
