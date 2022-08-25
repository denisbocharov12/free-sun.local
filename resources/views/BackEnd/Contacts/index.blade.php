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
                                <h4 class="nk-block-title">Все контактные формы</h4>
                            </div>
                        </div>
                        <table class="datatable-init nowrap nk-tb-list is-separate" id="list_product" data-auto-responsive="false">
                            <thead>
                            <tr class="nk-tb-item nk-tb-head">
                                <th class="nk-tb-col">
                                    <span>ID</span>
                                </th>
                                <th class="nk-tb-col"><span>Имя</span></th>
                                <th class="nk-tb-col"><span>Фамилия</span></th>
                                <th class="nk-tb-col"><span>Номер телефона</span></th>
                                <th class="nk-tb-col"><span>Email</span></th>
                                <th class="nk-tb-col"><span>Коммент</span></th>
                                <th class="nk-tb-col"><span class="tb-tnx-status d-none d-md-inline-block">Статус обработки</span></th>
                                <th class="nk-tb-col nk-tb-col-tools">
                                </th>
                            </tr><!-- .nk-tb-item -->
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr id="contact-{{$contact->id}}" class="nk-tb-item">
                                    <td class="nk-tb-col">
                                        <span>{{$contact->id}}</span>
                                    </td>
                                    <td class="nk-tb-col tb-col-sm">
                                            <span class="tb-product">
                                                <span class="title">{{$contact->name}}</span>
                                            </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-sub">
                                            {{$contact->surname}}
                                        </span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead"> {{$contact->phone}}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        <span class="tb-lead">{{$contact->email}}</span>
                                    </td>
                                    <td class="nk-tb-col">
                                        {{$contact->comment}}
                                    </td>
                                    <td class="nk-tb-col">
                                        <label class="switch">
                                            <input id="toggle-btn" type="checkbox" name="toggle" value="{{$contact->id}}" {{$contact->status === 'active' ? 'checked' : ''}}>
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
                                                            <li><a href="{{route('admin.contact.view', $contact->id)}}"><em class="icon ni ni-edit"></em><span>Просмотреть</span></a></li>
                                                            <li>
                                                                <a class="contact_delete" href="#" data-id="{{$contact->id}}"><em class="icon ni ni-trash"></em><span>Удалить</span></a>
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
        $('.contact_delete').click(function () {
            var id = $(this).data('id');
            $.ajax({
                url: "{{route('admin.contact.delete')}}",
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
                        $('#contact-' + response.deleted + '').fadeOut(1000);
                    }
                }
            })
        });
        $('input[name=toggle]').change(function () {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            $.ajax({
                url: "{{route('admin.contact.status')}}",
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
