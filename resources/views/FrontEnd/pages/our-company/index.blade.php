@extends('FrontEnd.layouts.master')

@section('content')
    <section
        class="our-company"
        style="background-image: url('{{asset('frontend/assets')}}/images/background/our-panels.png')"
    >
        <div class="fixed-container">
            <div class="our-company__body">
                <h1 class="our-company__title h1">FREE SUN</h1>
                <p class="our-company__text">
                    Берем все самое лучшее и адоптируем под вас
                </p>
            </div>
        </div>
    </section>
    <section class="our-benefits">
        <div class="fixed-container">
            <h2 class="our-benefits__title h1">
                Преимущества работаты с нами:
            </h2>
            <ul class="our-benefits__wrapper">
                <li class="our-benefits__item our-benefits__item--safety">
                    <div class="our-benefits__name">Гарантия качества</div>
                    <div class="our-benefits__text">
                        Предоставляем 25 летнюю гарнатию на солнечные электростанции, установленные нашими специалистами
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--economy">
                    <div class="our-benefits__name">Экономичность</div>
                    <div class="our-benefits__text">
                        Предлагаем самые выгодные  и оптимальные решения, которые позволяют начать экономить немедленно и имеют быстрый срок окупаемости инвестиций
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--paperwork">
                    <div class="our-benefits__name">Документация</div>
                    <div class="our-benefits__text">
                        Оформляем весь пакет документов для проектирования, монтажа, запуска СЭС, и подключения ее к электросетям on-grid
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--calls">
                    <div class="our-benefits__name">Тех.Поддержка </div>
                    <div class="our-benefits__text">
                        Осуществляем постоянную тех.поддержку на всех этапах реализации проекта с последующим гарантийным сервисным обслуживанием
                    </div>
                </li>
                <li
                    class="our-benefits__item our-benefits__item--fast-shipping"
                >
                    <div class="our-benefits__name">Прямые поставки</div>
                    <div class="our-benefits__text">
                        Осуществляем прямые поставки всего необходимого оборудования для солнечных электростанций, от лучших мировых производителей
                    </div>
                </li>
                <li class="our-benefits__item our-benefits__item--tracking">
                    <div class="our-benefits__name">Мониторинг 24/7</div>
                    <div class="our-benefits__text">
                        Отслеживайте состояние работы своих солнечных электростанций прямо с вашего устройства в режиме онлайн - 24/7
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section
        class="work-stages"
        style="background-image: url('{{asset('frontend/assets')}}/images/background/stages.png')"
    >
        <div class="work-stages__container fullwidth-container">
            <div class="work-stages__wrapper">
                <div class="work-stages__texts">
                    <h2 class="work-stages__title h1">Этапы работы:</h2>
                    <div class="work-stages__text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                    <a class="work-stages__link order-btn" href="{{route('catalog')}}">
                        Смотреть больше
                    </a>
                </div>
                <ul class="work-stages__list">
                    <li class="work-stages__item">
                        <article class="stage-cards stage-cards--first">
                            <img
                                class="stage-cards__img"
                                src="{{asset('frontend/assets')}}/images/content/first-stage.png"
                                alt="Первый этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stage-cards__inner">
                                <p class="stage-cards__name">Анализ</p>
                                <p class="stage-cards__text">
                                    Обследование объекта, расчеты, проработка решения
                                </p>
                            </div>
                        </article>
                    </li>
                    <li class="work-stages__item">
                        <article class="stage-cards stage-cards--second">
                            <img
                                class="stage-cards__img"
                                src="{{asset('frontend/assets')}}/images/content/stage2.png"
                                alt="Второй этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stage-cards__inner">
                                <p class="stage-cards__name">Проект</p>
                                <p class="stage-cards__text">
                                    Подготовка проектной и технической документации
                                </p>
                            </div>
                        </article>
                    </li>
                    <li class="work-stages__item">
                        <article class="stage-cards stage-cards--third">
                            <img
                                class="stage-cards__img"
                                src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                alt="Третий этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stage-cards__inner">
                                <p class="stage-cards__name">Монтаж</p>
                                <p class="stage-cards__text">
                                    Проведение монтажных работ в соответствии с проектом
                                </p>
                            </div>
                        </article>
                    </li>
                    <li class="work-stages__item">
                        <article class="stage-cards stage-cards--four">
                            <img
                                class="stage-cards__img"
                                src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                alt="Третий этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stage-cards__inner">
                                <p class="stage-cards__name">Сдача в эксплуатацию</p>
                                <p class="stage-cards__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>
                        </article>
                    </li>
                    <li class="work-stages__item">
                        <article class="stage-cards stage-cards--five">
                            <img
                                class="stage-cards__img"
                                src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                alt="Третий этап работы"
                                width="391"
                                height="449"
                            />
                            <div class="stage-cards__inner">
                                <p class="stage-cards__name">Подключение к сетям</p>
                                <p class="stage-cards__text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.
                                </p>
                            </div>
                        </article>
                    </li>
                </ul>

                <div class="stages-slider swiper">
                    <ul class="stages-slider__wrapper swiper-wrapper">
                        <li class="stages-slider__item swiper-slide">
                            <article class="stage-cards stage-cards--first">
                                <img
                                    class="stage-cards__img"
                                    src="{{asset('frontend/assets')}}/images/content/first-stage.png"
                                    alt="Первый этап работы"
                                    width="391"
                                    height="449"
                                />
                                <div class="stage-cards__inner">
                                    <p class="stage-cards__name">Анализ</p>
                                    <p class="stage-cards__text">
                                        Обследование объекта, расчеты, проработка решения
                                    </p>
                                </div>
                            </article>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <article class="stage-cards stage-cards--second">
                                <img
                                    class="stage-cards__img"
                                    src="{{asset('frontend/assets')}}/images/content/stage2.png"
                                    alt="Второй этап работы"
                                    width="391"
                                    height="449"
                                />
                                <div class="stage-cards__inner">
                                    <p class="stage-cards__name">Проект</p>
                                    <p class="stage-cards__text">
                                        Подготовка проектной и технической документации
                                    </p>
                                </div>
                            </article>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <article class="stage-cards stage-cards--third">
                                <img
                                    class="stage-cards__img"
                                    src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                    alt="Третий этап работы"
                                    width="391"
                                    height="449"
                                />
                                <div class="stage-cards__inner">
                                    <p class="stage-cards__name">Монтаж</p>
                                    <p class="stage-cards__text">
                                        Проведение монтажных работ в соответствии с проектом
                                    </p>
                                </div>
                            </article>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <article class="stage-cards stage-cards--four">
                                <img
                                    class="stage-cards__img"
                                    src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                    alt="Третий этап работы"
                                    width="391"
                                    height="449"
                                />
                                <div class="stage-cards__inner">
                                    <p class="stage-cards__name">Сдача в эксплуатацию</p>
                                    <p class="stage-cards__text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </p>
                                </div>
                            </article>
                        </li>
                        <li class="stages-slider__item swiper-slide">
                            <article class="stage-cards stage-cards--five">
                                <img
                                    class="stage-cards__img"
                                    src="{{asset('frontend/assets')}}/images/content/stage3.png"
                                    alt="Третий этап работы"
                                    width="391"
                                    height="449"
                                />
                                <div class="stage-cards__inner">
                                    <p class="stage-cards__name">Подключение к сетям</p>
                                    <p class="stage-cards__text">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                    </p>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="our-merits">
        <div class="fixed-container">
            <ul class="our-merits__wrapper">
                <li class="our-merits__item">
                    <p class="our-merits__bg"></p>
                    <p class="our-merits__value">840+</p>
                    <p class="our-merits__text">клиентов по Молдове</p>
                </li>
                <li class="our-merits__item">
                    <p class="our-merits__bg"></p>
                    <p class="our-merits__value">150</p>
                    <p class="our-merits__text">реализовано проектов</p>
                </li>
                <li class="our-merits__item">
                    <p class="our-merits__bg"></p>
                    <p class="our-merits__value">5+</p>
                    <p class="our-merits__text">лет опыта работы</p>
                </li>
                <li class="our-merits__item">
                    <p class="our-merits__bg"></p>
                    <p class="our-merits__value">100%</p>
                    <p class="our-merits__text">клиентов довольны</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="info-block">
        <div class="info-block__wrapper">
            <h2 class="info-block__text h1">Реализованные проекты</h2>
            <a class="info-block__link" href="{{route('catalog')}}">Просмотреть</a>
        </div>
    </div>

@endsection
