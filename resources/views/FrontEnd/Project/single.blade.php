@extends('FrontEnd.layouts.master')

@section('content')
    <section class="about-panels">
        <div class="fixed-container">
            <h1 class="about-panels__title h2">
                {{$model->title}}
            </h1>
            <div class="about-panels__wrapper">
                <div class="about-panels-slider swiper">
                    <ul class="about-panels-slider__wrapper swiper-wrapper">
                        @foreach($model->getMedia() as $media)
                            <li class="about-panels-slider__item swiper-slide">
                                <img class="about-panels-slider__img" src="{{$media->getUrl()}}"
                                     alt="Дом с солнечными панелями" width="100%" height="720">
                            </li>
                        @endforeach
                    </ul>
                    <div class="about-panels-slider__prev swiper-button-prev"></div>
                    <div class="about-panels-slider__prev swiper-button-next"></div>
                </div>
                <div class="about-panels__pogination swiper-pagination"></div>
                <div class="about-panels-description">
                    <div class="about-panels-description__name">
                        Экономия до {{$model->data->conservation}}кв/ч
                        <span>{{$model->year}}</span>
                    </div>

                    <div class="about-panels-description__row">
                        <ul class="about-panels-description__list">
                            <div class="about-panels-description__name" style="margin-bottom: 20px;">
                                ДО
                            </div>
                            <li class="about-panels-description__item">
                                <span>Расходы на электроэнергию в год:</span>
                                <span>{{$model->data->cost_electro_before}} MDL</span>
                            </li>
                            <li class="about-panels-description__item">
                                <span>Расходы на отопление в год:</span>
                                <span>{{$model->data->cost_otoplen_before}} MDL</span>
                            </li>
                        </ul>
                        <ul class="about-panels-description__list">
                            <div class="about-panels-description__name" style="margin-bottom: 20px;">
                                ПОСЛЕ
                            </div>
                            <li class="about-panels-description__item">
                                <span>Расходы на электроэнергию в год:</span>
                                <span>{{$model->data->cost_electro_after}} MDL</span>
                            </li>
                            <li class="about-panels-description__item">
                                <span>Расходы на отопление в год:</span>
                                <span>{{$model->data->cost_otoplen_after}} MDL</span>
                            </li>
                        </ul>
                    </div>
                    <div class="about-panels-description__row" style="margin-bottom: 25px">
                        <div class="wrap">
                            <div class="about-panels-description__name" style="margin-bottom: 10px; font-size: 20px">
                                Задача:
                            </div>
                            <p>
                                {{$model->mission}}
                            </p>
                        </div>
                    </div>
                    @if($model->description !== null)
                        <div class="about-panels-description__row">
                            <div class="wrap">
                                <div class="about-panels-description__name" style="margin-bottom: 10px; font-size: 20px">
                                    Описание:
                                </div>
                                <p>
                                    {{$model->description}}
                                </p>
                            </div>
                        </div>
                    @endif
                    <div class="about-panels-description__inner">
{{--                        <button class="about-panels-description__btn" type="button">--}}
{{--                            Узнать больше--}}
{{--                        </button>--}}
                        <a href="{{route('calculator')}}" class="about-panels-description__calc" type="button">
                        </a>
                        <a class="about-panels-description__link order-btn" href="javascript:;" data-fancybox data-src="#ModalContacts" data-options='{"touch" : false}'>
                            Хочу такой же
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('FrontEnd.Project.components.see-more')
@endsection
