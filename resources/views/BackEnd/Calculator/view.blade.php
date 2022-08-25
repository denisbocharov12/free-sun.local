@extends('BackEnd.layouts.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Рассчетная форма <strong class="text-primary small"># {{$model->id}}</strong></h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Создана: <span class="text-base">{{$model->created_at->format('D-M-Y')}}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{url()->previous()}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Назад</span></a>
                                <a href="{{url()->previous()}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="invoice">
                            <div class="invoice-wrap">
                                <div class="invoice-head">
                                    <div class="invoice-contact">
                                        <span class="overline-title">Рассчетная форма к</span>
                                        <div class="invoice-contact-info">
                                            <h4 class="title">FREESUN MOLDOVA от</h4>
                                            <ul class="list-plain">
                                                <li><em class="icon ni ni-user"></em><span>{{$model->offer_name_surname}}</span></li>
                                                <li><em class="icon ni ni-call-fill"></em><span>{{$model->offer_phone}}</span></li>
                                                <li><em class="icon ni ni-emails"></em><span>{{$model->offer_email}}</span></li>

                                                <li><em class="icon ni ni-square-fill-c"></em><span>Ежемесячный счет за электроэнергию: <b>{{$model->monthly_electricity}} MDL</b></span></li>
                                                <li><em class="icon ni ni-square-fill-c"></em><span>Отапливаемая площадь: <b>{{$model->heated_area}} М.КВ</b></span></li>
                                                <li><em class="icon ni ni-square-fill-c"></em><span>Требуемая мощность солнечной станции: <b>{{$model->required_power}} кВт</b></span></li>
                                                <li><em class="icon ni ni-square-fill-c"></em><span>Требуемое количество солнечных панелей: <b>{{$model->required_qty}} шт</b></span></li>
                                                <li><em class="icon ni ni-square-fill-c"></em><span>Необходимая площадь на крыше: <b>{{$model->required_area_roof}} М.КВ</b></span></li>
                                                <li><em class="icon ni ni-square-fill-c"></em><span>Необходимая площадь на земле: <b>{{$model->required_area_earth}} М.КВ</b></span></li>
                                                <li><em class="icon ni ni-comments"></em>Комментарий:
                                                    <span>
                                                        @if($model->offer_comment == null)
                                                            Комментария нет
                                                        @else
                                                            {{$model->offer_comment}}
                                                        @endif
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .invoice-head -->
                            </div><!-- .invoice-wrap -->
                        </div><!-- .invoice -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
