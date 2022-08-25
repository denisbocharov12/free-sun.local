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
                                <th class="nk-tb-col"><span>Название</span></th>
                                <th class="nk-tb-col"><span>Создана</span></th>
                                <th class="nk-tb-col nk-tb-col-tools">
                                </th>
                            </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr id="category-{{$category->id}}" class="nk-tb-item">
                                    <td class="nk-tb-col">
                                        <span>{{$category->id}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                <span class="title">{{$category->title}}</span>
                                            </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">
                                            {{$category->created_at->format('D-M-Y')}}
                                        </span>
                                    </td>
                                    <td class="nk-tb-col nk-tb-col-tools">
                                        <ul class="nk-tb-actions gx-1 my-n1">
                                            <li class="mr-n1">
                                                <div class="dropdown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{route('admin.categories.edit', $category->id)}}"><em class="icon ni ni-edit"></em><span>Редактировать</span></a></li>
                                                            <li>
                                                                <a class="category_delete" href="#" data-id="{{$category->id}}"><em class="icon ni ni-trash"></em><span>Удалить</span></a>
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
        $('.category_delete').click(function () {
            var id = $(this).data('id');
            $.ajax({
                url: "{{route('admin.categories.delete')}}",
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
                        $('#category-' + response.deleted + '').fadeOut(1000);
                    }
                }
            })
        });
    </script>
@endsection
