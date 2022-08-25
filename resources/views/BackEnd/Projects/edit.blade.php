@extends('BackEnd.layouts.master')

@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title">Редактирования проекта - {{$project->title}}</h4>
                        </div>
                    </div>
                    <div class="card">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-inner">
                            <form action="{{route('admin.cases.update', $project->id)}}" enctype="multipart/form-data" method="POST" class="form-validate is-alter" id="update_project">
                                @csrf
                                @method('patch')
                                <div class="row g-gs">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="title" value="{{$project->title}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Название проекта</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <select name="project_category_model_id" class="form-select form-control form-control-lg" data-ui="lg">
                                                    @foreach(\App\Models\ProjectCategoryModel::get() as $category)
                                                        <option value="{{$category->id}}" {{$category->id == $project->category->id ? 'selected' : ''}}>{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label-outlined" for="outlined-select">Категория</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <select name="project_models_model_id" class="form-select form-control form-control-lg" data-ui="lg">
                                                    @foreach(\App\Models\ProjectModelsModel::get() as $model)
                                                        <option value="{{$model->id}}" {{$model->id == $project->model->id ? 'selected' : ''}}>{{$model->title}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label-outlined" for="outlined-select">Модель</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <select name="project_invertor_model_id" class="form-select form-control form-control-lg" data-ui="lg">
                                                    @foreach(\App\Models\ProjectInvertorModel::get() as $invertor)
                                                        <option value="{{$invertor->id}}" {{$invertor->id == $project->invertor->id ? 'selected' : ''}}>{{$invertor->title}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label-outlined" for="outlined-select">Инвертор</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <select name="project_panel_model_id" class="form-select form-control form-control-lg" data-ui="lg">
                                                    @foreach(\App\Models\ProjectPanelModel::get() as $panel)
                                                        <option value="{{$panel->id}}" {{$panel->id == $project->panel->id ? 'selected' : ''}}>{{$panel->title}}</option>
                                                    @endforeach
                                                </select>
                                                <label class="form-label-outlined" for="outlined-select">Панель</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="conservation" value="{{$project->data->conservation}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Выгода в кВт/ч</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="cost_electro_before" value="{{$project->data->cost_electro_before}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Расходы на эл. до</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="cost_electro_after" value="{{$project->data->cost_electro_after}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Расходы на эл. после</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="cost_otoplen_before" value="{{$project->data->cost_otoplen_before}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Расходы на от. до</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="cost_otoplen_after" value="{{$project->data->cost_otoplen_after}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Расходы на от. после</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="number" name="year" value="{{$project->year}}" class="form-control form-control-lg form-control-outlined">
                                                <label class="form-label-outlined" for="outlined-lg">Год проекта</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="fva-message">Миссия / Задача</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control form-control-sm" name="mission" id="fva-message" placeholder="Миссия / Задача">{{$project->mission}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="fva-message">Описание</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control form-control-sm" name="description" id="fva-message" placeholder="Полное описание">{{$project->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="fva-message">Загрузить изображения</label>
                                            <div class="form-control-wrap">
                                                <input type="file" name="media[]" multiple>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="dropzone-previews">
                                                @foreach($project->getMedia() as $image)
                                                    <div class="dz-preview dz-image-preview mb-3" id="dz-preview-{{$image->id}}">
                                                        <div class="dz-image" style="max-width: 30%">
                                                            <img width="50%" alt="" src="{{$image->getUrl()}}">
                                                        </div>
                                                        <div class="dz-details">
                                                            <div class="dz-size">
                                                                <span data-dz-size=""><strong>ID {{$image->title}}</strong> - {{$image->id}}</span>
                                                            </div>
                                                        </div>
                                                        <a class="dz-remove project-image-remove" id="project-image-remove-{{$image->id}}" href="#" data-id="{{$image->id}}" data-project-id="{{$project->id}}">Удалить файл</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-06">Статус</label>
                                            <div class="form-control-wrap ">
                                                <div class="form-control-select">
                                                    <select name="status" class="form-control">
                                                        <option value="active" {{$project->status == 'active' ? 'selected' : ''}}>Опубликован</option>
                                                        <option value="inactive" {{$project->status == 'inactive' ? 'selected' : ''}}>Неопубликован</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Обновить проект</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).on('click','.project-image-remove',function (e) {
            e.preventDefault();
            var image_id = $(this).data('id');
            var project_id = $(this).data('project-id');
            var token = "{{csrf_token()}}";
            var path = "{{route('admin.cases.delete-media')}}";
            $.ajax({
                url: path,
                type: "POST",
                dataType:"JSON",
                data:{
                    id: image_id,
                    project_id: project_id,
                    _token: token
                },
                success:function (response) {
                    if(response.status) {
                        $('#dz-preview-'+image_id).fadeOut();
                    } else {
                    }
                }
            });
        });
    </script>
@endsection
