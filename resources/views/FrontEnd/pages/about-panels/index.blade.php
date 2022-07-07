@extends('frontend.layouts.master')

@section('content')
    <section class="about-panels">
        <div class="fixed-container">
            <h1 class="about-panels__title h2">
                Солнечные панели 15КВТ. в г.Кишинев ул.Измаил
            </h1>
            <div class="about-panels__wrapper">
                <div class="about-panels-slider swiper">
                    <ul class="about-panels-slider__wrapper swiper-wrapper">
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                        <li class="about-panels-slider__item swiper-slide">
                            <img class="about-panels-slider__img" src="{{asset('frontend/assets')}}/images/content/house-big.png"
                                 alt="Дом с солнечными панелями" width="1730" height="775">
                        </li>
                    </ul>
                    <div class="about-panels-slider__prev swiper-button-prev"></div>
                    <div class="about-panels-slider__prev swiper-button-next"></div>
                </div>
                <div class="about-panels__pogination swiper-pagination"></div>
                <div class="about-panels-description">
                    <div class="about-panels-description__name">
                        Экономия до 15кв/ч
                        <span>2022</span>
                    </div>
                    <ul class="about-panels-description__row">
                        <li class="about-panels-description__item">
                            <p>
                                <span>Модель:</span>inki solar 385 w
                            </p>
                            <p>
                                <span>Система защиты:</span> ac/dc торговой марки ETI
                            </p>
                            <p>
                                <span>Cтанция:</span> 35 Квт</p>
                        </li>
                        <li class="about-panels-description__item">
                            <p>
                                <span>Инвертор:</span> Solis 30 k 5g
                            </p>
                            <p>
                                <span>Инвертор:</span> Huawei
                            </p>
                            <p>
                                <span>Панели:</span> Risen 375w mono</p>
                        </li>
                    </ul>
                    <div class="about-panels-description__inner">
                        <button class="about-panels-description__btn" type="button">
                            Узнать больше
                        </button>
                        <button class="about-panels-description__calc" type="button">
                        </button>
                        <a class="about-panels-description__link order-btn" href="#">
                            Хочу такой же
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="see-more-projects">
        <div class="fixed-container">
            <h2 class="see-more-projects__title h2">
                Посмотреть еще проекты
            </h2>
            <div class="see-more-projects__slider swiper">
                <ul class="see-more-projects__wrapper swiper-wrapper">
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/worker.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/workers.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/worker.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/workers.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/worker.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                    <li class="see-more-projects__item swiper-slide">
                        <img class="see-more-projects__img" src="{{asset('frontend/assets')}}/images/content/workers.png" alt="Наши сотрудники" width="960"
                             height="490">
                        <p class="see-more-projects__text">
                            Солнечные панели 36КВТ. в г.Бельцы
                        </p>
                    </li>
                </ul>
                <div class="see-more-projects__prev swiper-button-prev"></div>
                <div class="see-more-projects__next swiper-button-next"></div>
                <div class="see-more-projects__pagination swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
