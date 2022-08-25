@extends('FrontEnd.layouts.master')

@section('content')
    <section class="hero" style="background-image: url('{{asset('frontend/assets')}}/images/background/solar-panels.png')">
        <div class="fullwidth-container">
            <h1 class="hero__title h1">
                Солнечные электростанции под ключ
            </h1>
            <div class="hero__row">
                <ul class="benefits">
                    <li class="benefits__item">
                  <span class="benefits__title">
                    $
                  </span>
                        <span class="benefits__text">
                    Доступная цена
                  </span>
                    </li>

                    <li class="benefits__item">
                  <span class="benefits__title">
                    25
                  </span>
                        <span class="benefits__text">
                    Лет гарантии
                  </span>
                    </li>
                    <li class="benefits__item">
                  <span class="benefits__title">
                    24/7
                  </span>
                        <span class="benefits__text">
                    Мониторинг выроботки
                  </span>
                    </li>
                </ul>
                <a class="hero__link order-btn" href="javascript:;" data-fancybox data-src="#ModalContacts" data-options='{"touch" : false}'>
                    <span>Заказать сейчас</span>
                </a>
            </div>
            <a class="hero__arrow-down" href="#"></a>
        </div>
    </section>
    <section class="economy double-section-main">
        <div class="double-section-main__container fullwidth-container">
            <div class="double-section-main__wrapper">
                <div class="double-section-main__body">
                    <div class="double-section-main__inner">
                        <p>Солнечные электростанции</p>
                        <h2 class="double-section-main__title h2">
                            Промышленный сектор
                        </h2>
                        <div class="double-section-main__text">
                            <p>
                                Существует немало способов сделать производство более эффективным. Одним из наиболее простых и действенных решений является перевод бизнеса на солнечную энергию.
                                Промышленная солнечная электростанция позволит вашему предприятию обрести полную энергетическую независимость.
                            </p>
                        </div>
                    </div>
                    <a class="economy__link order-btn" href="{{route('catalog.category', 1)}}">
                        <span>Больше</span>
                    </a>

                </div>
                <div class="double-section-main__bg" style="background-image: url('{{asset('frontend/assets')}}/images/background/economy-bg.png')">
                </div>
            </div>
        </div>
    </section>
    <section class="design double-section-main">
        <div class="double-section-main__container fullwidth-container">
            <div class="double-section-main__wrapper">
                <div class="double-section-main__body">
                    <div class="double-section-main__inner">
                        <p>Солнечные электростанции</p>
                        <h3 class="double-section-main__title h2">
                            Частный сектор
                        </h3>
                        <div class="double-section-main__text">
                            <p>
                                Солнечные батареи для частного дома – наилучший на данный момент способ обеспечить себя экологичным электричеством и не зависеть от постоянного роста тарифов.
                                Сразу после установки и пуска домашней солнечной электростанции вам уже не нужно будет оплачивать счета за электроэнергию, ведь ее подарит солнце.
                                Экономьте вместе с FreeSun.
                            </p>
                        </div>
                    </div>
                    <div class="design__row">
                        <a class="design__link order-btn" href="{{route('catalog.category', 2)}}">
                            <span>Больше</span>
                        </a>
                    </div>
                </div>
                <div class="double-section-main__bg" style="background-image: url('{{asset('frontend/assets')}}/images/background/design-bg.png')">
                </div>
            </div>
        </div>
    </section>
    <section class="smart-wall">
        <div class="smart-wall__wrapper">
            <div class="smart-wall__bg" style="background-image: url('{{asset('frontend/assets')}}/images/background/smart-wall.png')"></div>
            <div class="smart-wall__body">
                <div class="smart-wall__inner">
                    <p class="smart-wall__subtitle">
                        Онлайн-калькулятор
                    </p>
                    <h2 class="smart-wall__title h2">
                        Солнечной электростанции
                    </h2>
                    <ul class="smart-wall__links">
                        <li class="smart-wall__item">
                            <a class="smart-wall__link order-btn" href="{{route('calculator')}}">
                                <span>Рассчитать</span>
                            </a>
                        </li>
                        <li class="smart-wall__item">
                            <a class="smart-wall__link order-btn" href="javascript:;" data-fancybox data-src="#ModalContacts" data-options='{"touch" : false}'>
                                Получить оферту
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="smart-wall__text">
                    <p>
                        Наш онлайн-калькулятор, поможет вам рассчитать необходимую мощность солнечной электростанции, подходящей для вашего дома, в зависимости от того, сколько вы хотите компенсировать из своих счетов за электроэнергию и отопление.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="solar-panel-specifications swiper-slide">
        <div class="container">
            <h3 class="sr-only">
                Характеристики
            </h3>
            <div class="solar-panel-specifications__wrapper">
                <div class="solar-panel-specifications__body">
                    <img
                        class="solar-panel-specifications__img"
                        src="{{asset('frontend/assets')}}/images/content/s-panel.png"
                        alt="Солнечная панель"
                        width="635"
                        height="660px"
                    />
                    <div class="specifications">
                        <p class="specifications__title h3">
                            Характеристики
                        </p>
                        <ul class="specifications__list">
                            <li class="specifications__item">
                                <p class="specifications__name">Мощность
                                </p>
                                <p class="specifications__desc">
                                    410 Вт
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">
                                    Вес
                                </p>
                                <p class="specifications__desc">
                                    -до 21.5 кг
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">
                                    Размеры
                                </p>
                                <p class="specifications__desc">
                                    1724 x 1134 x 30 мм
                                    <br>(включая рамки)
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Количество ячеек</p>
                                <p class="specifications__desc">
                                    108 (12 x 9) I 182x91 мм
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Технологии</p>
                                <p class="specifications__desc">
                                    Высокая производительность при слабом освещении.<br>
                                    Работает в пасмурные, дождливые дни
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Рабочая температура
                                </p>
                                <p class="specifications__desc">
                                    - 40 to +85°C
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Гарантия</p>
                                <p class="specifications__desc">
                                    Не менее 97% номинальной мощности в течение первого года.<br>
                                    После этого макс. деградация 0,5086% в год.<br>
                                    Не менее 86,83% номинальной мощности до 20 лет.<br>
                                    Не менее 81,75% номинальной мощности до 30 лет.<br>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="last-sentence swiper-slide">
        <div class="fixed-container">
            <div class="last-sentence__wrapper">
                <div class="last-sentence__inner">
                    <div class="last-sentence__body">
                        <h2 class="last-sentence__title h2">
                            Зарядите свой дом
                        </h2>
                        <p class="last-sentence__text">
                            Экономьте и живите выгодно и с комфортом
                        </p>
                        <ul class="last-sentence__links">
                            <li class="last-sentence__item">
                                <a class="last-sentence__link order-btn" href="javascript:;" data-fancybox data-src="#ModalContacts" data-options='{"touch" : false}'>
                                    <span>Заказать</span>
                                </a>
                            </li>
                            <li class="last-sentence__item">
                                <a class="last-sentence__link order-btn" href="{{route('about-us')}}">
                                    Узнать больше
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
