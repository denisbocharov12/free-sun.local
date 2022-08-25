@extends('BackEnd.layouts.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Все товары</h4>
                            </div>
                        </div>
                        <table class="datatable-init nowrap nk-tb-list is-separate" id="list_product" data-auto-responsive="false">
                            <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col">
                                    <span>ID</span>
                                </th>
                                <th class="nk-tb-col"><span>Проект</span></th>
                                <th class="nk-tb-col"><span>Категория</span></th>
                                <th class="nk-tb-col"><span>Модель</span></th>
                                <th class="nk-tb-col"><span>Инвертор</span></th>
                                <th class="nk-tb-col"><span>Панель</span></th>
                                <th class="nk-tb-col"><span class="tb-tnx-status d-none d-md-inline-block">Статус</span></th>
                                <th class="nk-tb-col nk-tb-col-tools">
                                </th>
                            </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr id="project-{{$project->id}}" class="nk-tb-item">
                                    <td class="nk-tb-col">
                                        <span>{{$project->id}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                @if(count($project->getMedia()) > 0)
                                                    <img src="{{$project->getFirstMedia()->getUrl()}}" alt="" class="thumb">
                                                @else
                                                    <img style="width: 50px; margin-right: 5px" src="{{asset('backend/assets/images/logo-dark.png')}}" alt="#">
                                                @endif
                                                <span class="title">{{$project->title}}</span>
                                            </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">
                                            {{$project->category->title}}
                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead"> {{$project->model->title}}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{$project->invertor->title}}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        {{$project->panel->title}}
                                    </td>
                                    <td class="nk-tb-col">
                                        <label class="switch">
                                            <input id="toggle-btn" type="checkbox" name="toggle" value="{{$project->id}}" {{$project->status === 'active' ? 'checked' : ''}}>
                                            <div>
                                                <span></span>
                                            </div>
                                        </label>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{route('admin.cases.edit', $project->id)}}"><em class="icon ni ni-edit"></em><span>Редактировать</span></a></li>
                                                            <li>
                                                                <a class="project_delete" href="#" data-id="{{$project->id}}"><em class="icon ni ni-trash"></em><span>Удалить</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr><!-- .nk-tb-item -->
                            @endforeach
                            </tbody>
                        </table><!-- .nk-tb-list -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.project_delete').click(function () {
            var id = $(this).data('id');
            $.ajax({
                url: "{{route('admin.cases.delete')}}",
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    id: id
                },
                success:function (response) {
                    if (response.status){
                        toastr["success"](response.msg)
                        toastr.options = {
                            "closeButton": true,
                            "closeClass" : "toast-close-button",
                            "closeHtml" : false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            "toastClass": "toastr"
                        }
                        $('#project-' + response.deleted + '').fadeOut(1000);
                    }
                }
            })
        });
        $('input[name=toggle]').change(function () {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            $.ajax({
                url: "{{route('admin.cases.status')}}",
                type: "POST",
                data: {
                    _token: '{{csrf_token()}}',
                    mode: mode,
                    id: id
                },
                success:function (response) {
                    if (response.status){
                        toastr["success"](response.msg)
                        toastr.options = {
                            "closeButton": true,
                            "closeClass" : "toast-close-button",
                            "closeHtml" : false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut",
                            "toastClass": "toastr"
                        }
                    }
                }
            })
        });
    </script>
@endsection
