@extends('frontend.layouts.master')

@section('content')
    <section class="hero" style="background-image: url('{{asset('frontend/assets')}}/images/background/solar-panels.png')">
        <div class="fullwidth-container">
            <h1 class="hero__title h1">
                Солнечные панели на любой вкус
                <span>
                Самые дешевые солнечные панели во всей Молдове
              </span>
            </h1>
            <div class="hero__row">
                <ul class="benefits">
                    <li class="benefits__item">
                  <span class="benefits__title">
                    $
                  </span>
                        <span class="benefits__text">
                    Гарантированная низкая цена
                  </span>
                    </li>

                    <li class="benefits__item">
                  <span class="benefits__title">
                    25
                  </span>
                        <span class="benefits__text">
                    Лет гарантии на каждую панель
                  </span>
                    </li>

                    <li class="benefits__item">
                  <span class="benefits__title">
                    24/7
                  </span>
                        <span class="benefits__text">
                    Мониторинг потребляемой энергии
                  </span>
                    </li>
                </ul>
                <a class="hero__link order-btn" href="#">
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
                        <p>Экономичность</p>
                        <h2 class="double-section-main__title h2">
                            Электричество дешевле
                        </h2>
                        <div class="double-section-main__text">
                            <p>
                                Бесплатное электричество. Сразу после установки и пуска домашней солнечной электростанции вам
                                уже
                                не
                                нужно будет оплачивать счета за электроэнергию, ведь ее подарит солнце.
                                Экономьте вместе с
                                <a class="double-section-main__text-link" href="#">
                                    Free Sun.
                                </a>
                            </p>
                        </div>
                    </div>
                    <a class="economy__link order-btn" href="#">
                        <span>Заказать</span>
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
                        <p>Дизайн</p>
                        <h3 class="double-section-main__title h2">
                            Гладкий и прочный
                        </h3>
                        <div class="double-section-main__text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nisl vel ornare morbi porttitor nunc.
                                Urna,
                                facilisis eget consectetur consequat dignissim facilisis eu nunc. Elit neque rhoncus nulla sed
                                urna.
                                Quisque nulla nisl
                                <a class="double-section-main__text-link" href="#">
                                    Free Sun
                                </a>
                                turpis.
                            </p>
                        </div>
                    </div>
                    <div class="design__row">
                        <button class="design__button" type="button">
                            <span></span>
                            Узнать больше
                        </button>
                        <a class="design__link order-btn" href="#">
                            <span>Заказать</span>
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
                        Умная стена
                    </p>
                    <h2 class="smart-wall__title h2">
                        Домашняя резервная батарея
                    </h2>
                    <ul class="smart-wall__links">
                        <li class="smart-wall__item">
                            <a class="smart-wall__link order-btn" href="#">
                                <span>Заказать</span>
                            </a>
                        </li>
                        <li class="smart-wall__item">
                            <a class="smart-wall__link order-btn" href="#">
                                Узнать больше
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="smart-wall__text">
                    <p>
                        Lorem ipsum - dolor sit amet, consectetur adipiscing elit. Id ipsum hendrerit ultrices aliquet
                        lectus
                        nulla penatibus.
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
                    <div class="solar-panel-specifications__img"></div>
                    <div class="specifications">
                        <p class="specifications__title h3">
                            Характеристики
                        </p>
                        <ul class="specifications__list">
                            <li class="specifications__item">
                                <p class="specifications__name">Wattage</p>
                                <p class="specifications__desc">
                                    400 W
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">
                                    Operating Temperature
                                </p>
                                <p class="specifications__desc">
                                    -40°F up to +185°F
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">
                                    Dimensions
                                </p>
                                <p class="specifications__desc">
                                    74.4" x 41.2" x 1.57"<br>(including frame)
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Design</p>
                                <p class="specifications__desc">
                                    Black anodized aluminum <br>alloy frame<br>
                                    Black solar cells and <br>backsheet
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Warranty</p>
                                <p class="specifications__desc">
                                    25-year performance <br>guarantee
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Certifications</p>
                                <p class="specifications__desc">
                                    IEC / UL 61730,<br>
                                    CEC Listed,<br>
                                    IEC 61215
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Inverter Dimension</p>
                                <p class="specifications__desc">
                                    26" x 16" x 6"
                                </p>
                            </li>
                            <li class="specifications__item">
                                <p class="specifications__name">Inverter Warranty</p>
                                <p class="specifications__desc">
                                    20 years
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
                                <a class="last-sentence__link order-btn" href="#">
                                    <span>Заказать</span>
                                </a>
                            </li>
                            <li class="last-sentence__item">
                                <a class="last-sentence__link order-btn" href="#">
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
