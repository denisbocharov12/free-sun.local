@extends('FrontEnd.layouts.master')

@section('content')
    <section class="blog">
        <div class="fixed-container">
            <h1 class="blog__title h2">Блог</h1>
            <p class="blog__subtitle">
                Lorem ipsum dolor sit amet, consectetur adipiscing
            </p>
            <ul class="blog__wrapper">
                <li class="blog__item">
                    <article
                        class="blog-cards"
                        style="
                      background-image: url('{{asset('frontend/assets')}}/images/content/wind-farm.png');
                    "
                    >
                        <div class="blog-cards__content">
                            <p class="blog-cards__title">Рекомендуемое</p>
                            <div class="blog-cards__text">
                                Lorem ipsum dolor sit amet (consectetur adipiscing)
                            </div>
                            <a class="blog-cards__link" href="#"> Смотреть </a>
                        </div>
                    </article>
                </li>
                <li class="blog__item">
                    <article
                        class="blog-cards"
                        style="background-image: url('{{asset('frontend/assets')}}/images/content/earth.png')"
                    >
                        <div class="blog-cards__content">
                            <p class="blog-cards__title">ARTICLES</p>
                            <div class="blog-cards__text">
                                Lorem ipsum dolor sit amet (consectetur adipiscing)
                            </div>
                            <a class="blog-cards__link" href="#"> Читать статью </a>
                        </div>
                    </article>
                </li>
                <li class="blog__item">
                    <article
                        class="blog-cards"
                        style="
                      background-image: url('{{asset('frontend/assets')}}/images/content/education.png');
                    "
                    >
                        <div class="blog-cards__content">
                            <p class="blog-cards__title">VIDEO</p>
                            <div class="blog-cards__text">
                                Lorem ipsum dolor sit amet (consectetur adipiscing)
                            </div>
                            <a class="blog-cards__link" href="#"> Смотреть видео </a>
                        </div>
                    </article>
                </li>
            </ul>
            <div class="blog-slider swiper">
                <ul class="blog-slider__wrapper swiper-wrapper">
                    <li class="blog-slider__item swiper-slide">
                        <article
                            class="blog-cards"
                            style="
                        background-image: url('{{asset('frontend/assets')}}/images/content/wind-farm.png');
                      "
                        >
                            <div class="blog-cards__content">
                                <p class="blog-cards__title">Рекомендуемое</p>
                                <div class="blog-cards__text">
                                    Lorem ipsum dolor sit amet (consectetur adipiscing)
                                </div>
                                <a class="blog-cards__link" href="#"> Смотреть </a>
                            </div>
                        </article>
                    </li>
                    <li class="blog-slider__item swiper-slide">
                        <article
                            class="blog-cards"
                            style="background-image: url('{{asset('frontend/assets')}}/images/content/earth.png')"
                        >
                            <div class="blog-cards__content">
                                <p class="blog-cards__title">ARTICLES</p>
                                <div class="blog-cards__text">
                                    Lorem ipsum dolor sit amet (consectetur adipiscing)
                                </div>
                                <a class="blog-cards__link" href="#"> Читать статью </a>
                            </div>
                        </article>
                    </li>
                    <li class="blog-slider__item swiper-slide">
                        <article
                            class="blog-cards"
                            style="
                        background-image: url('{{asset('frontend/assets')}}/images/content/education.png');
                      "
                        >
                            <div class="blog-cards__content">
                                <p class="blog-cards__title">VIDEO</p>
                                <div class="blog-cards__text">
                                    Lorem ipsum dolor sit amet (consectetur adipiscing)
                                </div>
                                <a class="blog-cards__link" href="#">
                                    Смотреть видео
                                </a>
                            </div>
                        </article>
                    </li>
                </ul>
                <div class="blog-slider__pagination swiper-pagination"></div>
            </div>
        </div>
    </section>

    <div class="recommendations">
        <div class="fixed-container">
            <ul class="recommendations__wrapper">
                <li class="recommendations__item">
                    <a
                        class="recommendations__link recommendations__link--recommendations recommendations__link--active"
                        href="#"
                    >
                        Рекомендуемое
                    </a>
                </li>
                <li class="recommendations__item">
                    <a
                        class="recommendations__link recommendations__link--articles"
                        href="#"
                    >
                        Статьи
                    </a>
                </li>
                <li class="recommendations__item">
                    <a
                        class="recommendations__link recommendations__link--videos"
                        href="#"
                    >
                        Видео
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="recommended-articles">
        <div class="fixed-container">
            <ul class="recommended-articles__list">
                <li class="recommended-articles__item">
                    <article class="article">
                        <a class="article__link" href="#">
                            <img
                                class="article__img"
                                src="{{asset('frontend/assets')}}/images/content/work.png"
                                alt="Установка солнечных панелей"
                                width="630"
                                height="380"
                            />
                            <div class="article__body">
                                <h3 class="article__title h3">
                                    Особенности установки солнечных панелей на крышах
                                    домов
                                </h3>
                                <p class="article__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Praesent lectus eget nunc mauris et semper
                                    pretium lorem lectus. Sit mollis pulvinar pellentesque
                                    aliquet pellentesque adipiscing.
                                </p>
                            </div>
                        </a>
                    </article>
                </li>
                <li class="recommended-articles__item">
                    <article class="article">
                        <a class="article__link" href="#">
                            <img
                                class="article__img"
                                src="{{asset('frontend/assets')}}/images/content/salting.png"
                                alt="Отслеживание эффективности панелей"
                                width="630"
                                height="380"
                            />
                            <div class="article__body">
                                <h3 class="article__title h3">
                                    Отслеживание эффективности панелей в любой точке мира
                                </h3>
                                <p class="article__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Praesent lectus eget nunc mauris et semper
                                    pretium lorem lectus. Sit mollis pulvinar pellentesque
                                    aliquet pellentesque adipiscing.
                                </p>
                            </div>
                        </a>
                    </article>
                </li>
                <li class="recommended-articles__item">
                    <article class="article">
                        <a class="article__link" href="#">
                            <img
                                class="article__img"
                                src="{{asset('frontend/assets')}}/images/content/peculiarities.png"
                                alt="Особенности установки солнечных панелей"
                                width="630"
                                height="380"
                            />
                            <div class="article__body">
                                <h3 class="article__title h3">
                                    Особенности установки солнечных панелей на крышах
                                    домов
                                </h3>
                                <p class="article__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Praesent lectus eget nunc mauris et semper
                                    pretium lorem lectus. Sit mollis pulvinar pellentesque
                                    aliquet pellentesque adipiscing.
                                </p>
                            </div>
                        </a>
                    </article>
                </li>
            </ul>
            <div class="page-numbers">
                <ul class="page-numbers__numbers">
                    <li
                        class="page-numbers__item page-numbers__item--1 page-numbers__item--active"
                    ></li>
                    <li class="page-numbers__item page-numbers__item--2"></li>
                    <li class="page-numbers__item page-numbers__item--3"></li>
                    <li class="page-numbers__item page-numbers__item--arrow"></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
