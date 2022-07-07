@extends('frontend.layouts.master')

@section('content')
    <section class="our-projects">
        <div class="fixed-container">
            <div class="our-projects__wrapper">
                <h1 class="our-projects__title h2">
                    Наши проекты
                </h1>
                <div class="our-projects__item">
                    <div class="our-projects__body">
                        <h2 class="our-projects__subtitle h3">
                            Солнечные панели 15КВТ. в г.Кишинев
                        </h2>
                        <div class="our-projects__text">
                            <p>
                                <span>Модель:</span>
                                Jinki solar 385 w
                            </p>
                            <p>
                                <span>Инвертор:</span>
                                Solis 30 k 5g
                            </p>
                            <p>
                                <span>Система защиты:</span>
                                ac/dc торговой марки ETI
                            </p>
                            <p>2021г</p>
                        </div>
                        <a class="our-projects__link order-btn" href="#">
                            Обзор Проекта
                        </a>
                    </div>
                    <div class="our-projects-slider swiper">
                        <ul class="our-projects-slider__wrapper swiper-wrapper">
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/house.png"
                                     alt="Дом с солнечными панелями" width="810" height="500">
                            </li>
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/solar.png" alt="Солнечные панели"
                                     width="810" height="500">
                            </li>
                        </ul>
                        <div class="our-projects-slider__prev swiper-button-prev"></div>
                        <div class="our-projects-slider__next swiper-button-next"></div>
                    </div>
                </div>

                <div class="our-projects__item">
                    <div class="our-projects__body">
                        <h2 class="our-projects__subtitle h3">
                            Солнечные панели 15КВТ. в г.Кишинев
                        </h2>
                        <div class="our-projects__text">
                            <p>
                                <span>Модель:</span>
                                Jinki solar 385 w
                            </p>
                            <p>
                                <span>Инвертор:</span>
                                Solis 30 k 5g
                            </p>
                            <p>
                                <span>Система защиты:</span>
                                ac/dc торговой марки ETI
                            </p>
                            <p>2021г</p>
                        </div>
                        <a class="our-projects__link order-btn" href="#">
                            Обзор Проекта
                        </a>
                    </div>
                    <div class="our-projects-slider swiper">
                        <ul class="our-projects-slider__wrapper swiper-wrapper">
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/house.png"
                                     alt="Дом с солнечными панелями" width="810" height="500">
                            </li>
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/solar.png" alt="Солнечные панели"
                                     width="810" height="500">
                            </li>
                        </ul>
                        <div class="our-projects-slider__prev swiper-button-prev"></div>
                        <div class="our-projects-slider__next swiper-button-next"></div>
                    </div>
                </div>

                <div class="our-projects__item">
                    <div class="our-projects__body">
                        <h2 class="our-projects__subtitle h3">
                            Солнечные панели 15КВТ. в г.Кишинев
                        </h2>
                        <div class="our-projects__text">
                            <p>
                                <span>Модель:</span>
                                Jinki solar 385 w
                            </p>
                            <p>
                                <span>Инвертор:</span>
                                Solis 30 k 5g
                            </p>
                            <p>
                                <span>Система защиты:</span>
                                ac/dc торговой марки ETI
                            </p>
                            <p>2021г</p>
                        </div>
                        <a class="our-projects__link order-btn" href="#">
                            Обзор Проекта
                        </a>
                    </div>
                    <div class="our-projects-slider swiper">
                        <ul class="our-projects-slider__wrapper swiper-wrapper">
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/house.png"
                                     alt="Дом с солнечными панелями" width="810" height="500">
                            </li>
                            <li class="our-projects-slider__item swiper-slide">
                                <img class="our-projects-slider__img" src="{{asset('frontend/assets')}}/images/content/solar.png" alt="Солнечные панели"
                                     width="810" height="500">
                            </li>
                        </ul>
                        <div class="our-projects-slider__prev swiper-button-prev"></div>
                        <div class="our-projects-slider__next swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <div class="page-numbers">
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
                <div class="page-numbers__text">
                    Page <span>1</span> of <span>3</span>
                </div>
            </div>
        </div>
    </section>
@endsection
