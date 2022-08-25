@extends('FrontEnd.layouts.master')

@section('content')
    <section class="our-projects">
        <div class="fixed-container">
            <div class="our-projects__wrapper">
                <h1 class="our-projects__title h2">
                    Наши проекты
                </h1>
                <div class="catalog_wrap">
                    @foreach(\App\Models\ProjectCategoryModel::all() as $item)
                        <a class="our-projects__link order-btn" href="{{route('catalog.category', $item->id)}}">
                            {{$item->title}}
                        </a>
                    @endforeach
                </div>
                @foreach($projects as $model)
                    <div class="our-projects__item">
                        <div class="our-projects__body">
                            <h2 class="our-projects__subtitle h3">
                                {{$model->title}}
                            </h2>
                            <div class="our-projects__text">
                                <p>
                                    <span>Объект:</span>
                                    {{$model->category->title}}
                                </p>
                                <p>
                                    <span>Задача:</span>
                                    {{$model->mission}}
                                </p>
                                <p>
                                    <span>Год:</span>
                                    {{$model->year}}
                                </p>
                            </div>
                            <a class="our-projects__link order-btn" href="{{route('project',$model)}}">
                                Обзор Проекта
                            </a>
                        </div>
                        <div class="our-projects-slider swiper">
                            <ul class="our-projects-slider__wrapper swiper-wrapper">
                                @foreach($model->getMedia() as $media)
                                    <li class="our-projects-slider__item swiper-slide">
                                        <img class="our-projects-slider__img" src="{{$media->getUrl()}}"
                                             alt="Дом с солнечными панелями" width="100%" height="500">
                                    </li>
                                @endforeach
                            </ul>
                            <div class="our-projects-slider__prev swiper-button-prev"></div>
                            <div class="our-projects-slider__next swiper-button-next"></div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="page-numbers">
                {{ $projects->links('vendor.pagination.custom') }}
                <ul class="page-numbers__numbers">
                    <li class="page-numbers__item page-numbers__item--1 page-numbers__item--active">
                    </li>
                    <li class="page-numbers__item page-numbers__item--2">
                    </li>
                    <li class="page-numbers__item page-numbers__item--3">
                    </li>
                    <li class="page-numbers__item page-numbers__item--arrow">
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
