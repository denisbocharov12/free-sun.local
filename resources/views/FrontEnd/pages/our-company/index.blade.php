@extends('frontend.layouts.master')

@section('content')
    <section
        class="our-company"
        style="background-image: url('{{asset('frontend/assets')}}/images/background/our-panels.png')"
    >
        <div class="fixed-container">
            <div class="our-company__body">
                <h1 class="our-company__title h1">Наша компания</h1>
                <p class="our-company__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Sagittis ipsum tincidunt et in proin. Id justo libero
                </p>
            </div>
        </div>
    </section>
    <section class="our-benefits">
        <div class="fixed-container">
            <h2 class="our-benefits__title h1">
                Преимущества работать с нами:
            </h2>
            <ul class="our-benefits__wrapper">
                <li class="our-benefits__item our-benefits__item--safety">
                    <div class="our-benefits__name">Безопасность</div>
                    <div class="our-benefits__text">
                        Мы оформляем умные сделки контракты при помощи универсальных
                        токенов .
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--economy">
                    <div class="our-benefits__name">Экономичность</div>
                    <div class="our-benefits__text">
                        Оформив заказ более чем на 10000 вы получаете кэшбэк почти
                        5%. Вы возвращаете свои деньги себе
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--paperwork">
                    <div class="our-benefits__name">Оформление</div>
                    <div class="our-benefits__text">
                        Оформив заказ более чем на 10000 вы получаете кэшбэк почти
                        5%. Вы возвращаете свои деньги себе
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--calls">
                    <div class="our-benefits__name">Звонки</div>
                    <div class="our-benefits__text">
                        В любой момент можете бесплатно позвонить нашему оператору и
                        задать все вопросы
                    </div>
                </li>
                <li
                    class="our-benefits__item our-benefits__item--fast-shipping"
                >
                    <div class="our-benefits__name">Быстрая доставка</div>
                    <div class="our-benefits__text">
                        Заказав у нас солнечные панели, они будут у вас уже через 2
                        дня и наши работники установят их бесплатно
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--tracking">
                    <div class="our-benefits__name">Отслеживание</div>
                    <div class="our-benefits__text">
                        Отслеживайте состояние своих панелей прямо с вашего
                        устройства
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section
        class="work-stages"
        style="background-image: url('{{asset('frontend/assets')}}/images/background/stages.png')">
        <div class="work-stages__container fullwidth-container">
            <div class="work-stages__wrapper">
                <div class="work-stages__texts">
                    <h2 class="work-stages__title h1">Этапы работы:</h2>
                    <div class="work-stages__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <a class="work-stages__link order-btn" href="#">
                        Смотреть больше
                    </a>
                </div>
                <ul class="stages">
                    <li class="stages__item stages__item--first">
                        <img
                            class="stages__img"
                            src="{{asset('frontend/assets')}}/images/content/first-stage.png"
                            alt="Первый этап работы"
                            width="391"
                            height="449"
                        />
                        <div class="stages__inner">
                            <p class="stages__name">Lorem Ipsum</p>
                            <p class="stages__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                    <li class="stages__item stages__item--second">
                        <img
                            class="stages__img"
                            src="{{asset('frontend/assets')}}/images/content/stage2.png"
                            alt="Второй этап работы"
                            width="391"
                            height="449"
                        />
                        <div class="stages__inner">
                            <p class="stages__name">Lorem Ipsum</p>
                            <p class="stages__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                    <li class="stages__item stages__item--third">
                        <img
                            class="stages__img"
                            src="{{asset('frontend/assets')}}/images/content/stage3.png"
                            alt="Третий этап работы"
                            width="391"
                            height="449"
                        />
                        <div class="stages__inner">
                            <p class="stages__name">Lorem Ipsum</p>
                            <p class="stages__text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </li>
                </ul>

                <div class="stages-slider swiper">
                    <ul class="stages-slider__wrapper swiper-wrapper">
                        <li class="stages-slider__item swiper-slide">
                            <img
                                class="stages-slider__img"
                                src="{{asset('frontend/assets')}}/images/content/first-stage.png"
                                alt="Первый этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stages-slider__inner">
                                <p class="stages-slider__name">Lorem Ipsum</p>
                                <p class="stages-slider__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <img
                                class="stages-slider__img"
                                src="{{asset('frontend/assets')}}/images/content/stage2.png"
                                alt="Второй этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stages-slider__inner">
                                <p class="stages-slider__name">Lorem Ipsum</p>
                                <p class="stages-slider__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <img
                                class="stages-slider__img"
                                src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                alt="Третий этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stages-slider__inner">
                                <p class="stages-slider__name">Lorem Ipsum</p>
                                <p class="stages-slider__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
