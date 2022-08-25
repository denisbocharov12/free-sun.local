@extends('BackEnd.layouts.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="title nk-block-title">Создание проекта</h4>
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
                                <form action="{{route('admin.cases.store')}}" enctype="multipart/form-data" method="POST" class="form-validate is-alter">
                                    @csrf
                                    <div class="row g-gs">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" name="title" value="{{old('title')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Название проекта</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select name="project_category_model_id" class="form-select form-control form-control-lg" data-ui="lg">
                                                        @foreach(\App\Models\ProjectCategoryModel::get() as $category)
                                                            <option value="{{$category->id}}" >{{$category->title}}</option>
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
                                                            <option value="{{$model->id}}" >{{$model->title}}</option>
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
                                                            <option value="{{$invertor->id}}">{{$invertor->title}}</option>
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
                                                            <option value="{{$panel->id}}">{{$panel->title}}</option>
                                                        @endforeach
                                                    </select>
                                                    <label class="form-label-outlined" for="outlined-select">Панель</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="conservation" value="{{old('conservation')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Выгода в кВт/ч</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="cost_electro_before" value="{{old('cost_electro_before')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Расходы на эл. до</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="cost_electro_after" value="{{old('cost_electro_after')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Расходы на эл. после</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="cost_otoplen_before" value="{{old('cost_otoplen_before')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Расходы на от. до</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="cost_otoplen_after" value="{{old('cost_otoplen_after')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Расходы на от. после</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="number" name="year" value="{{old('year')}}" class="form-control form-control-lg form-control-outlined">
                                                    <label class="form-label-outlined" for="outlined-lg">Год проекта</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fva-message">Миссия / Задача</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" name="mission" id="fva-message" placeholder="Миссия / Задача"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="fva-message">Описание</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control form-control-sm" name="description" id="fva-message" placeholder="Полное описание"></textarea>
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="default-06">Статус</label>
                                                <div class="form-control-wrap ">
                                                    <div class="form-control-select">
                                                        <select name="status" class="form-control">
                                                            <option value="active" >Опубликован</option>
                                                            <option value="inactive">Неопубликован</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Создать проект</button>
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
