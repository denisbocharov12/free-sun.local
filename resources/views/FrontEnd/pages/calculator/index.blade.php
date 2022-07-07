@extends('FrontEnd.layouts.master')

@section('content')
    <section class="solar-panel-calc">
        <div class="fixed-container">
            <h1 class="solar-panel-calc__title h2">
                Калькулятор для солнечных панелей
            </h1>
            <form class="solar-panel-calc__wrapper" action="#">
                <div class="range-slider">
                    <label
                        class="range-slider__label calc-label"
                        for="range-slider"
                    >
                        Ежемесячный счет за электроэнергию (MDL)
                    </label>
                    <input
                        class="range-slider__input"
                        id="range-slider"
                        type="text"
                        name="range-slider"
                        value="540"
                        data-min="0"
                        data-max="1500"
                        data-from="540"
                    />
                    <span class="range-slider__value"></span>
                </div>
                <div class="solar-panel-calc__body">
                    <p class="solar-panel-calc__text">
                        *Эти данные только примерны, для точных подчетов нужна
                        помощь специалистов
                    </p>
                    <div class="solar-panel-calc__form">
                        <ul class="solar-panel-calc__row">
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="1"
                                >
                                    Ежедневно используемое электричество
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="1"
                                    name="Daily electricity used"
                                    value="35kWn"
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="2"
                                >
                                    Потребляемая электроэнергия в месяц
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="2"
                                    name="Consumed electricity per month"
                                    value="1063 kWn"
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="3"
                                >
                                    Электроэнергия, используемая ежегодно
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="3"
                                    name="Electricity used annually"
                                    value="12376 kWn"
                                />
                            </li>
                        </ul>
                        <ul class="solar-panel-calc__row">
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="4"
                                >
                                    Номинальная мощность фотоэл.системы
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="4"
                                    name="Rated power of photovoltaic system"
                                    value="10.2089 kWp"
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="5"
                                >
                                    Требуемое количество солнечных панелей
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="5"
                                    name="Required number of solar panels"
                                    value="26 шт."
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="6"
                                >
                                    Необходимая площать для установки
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="6"
                                    name="Required area for installation"
                                    value="46 mp."
                                />
                            </li>
                        </ul>
                        <ul class="solar-panel-calc__row">
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="7"
                                >
                                    Количество CO2, не представляемого ежегодно
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="7"
                                    name="Amount of CO2 not reported annually"
                                    value="4011 kg."
                                />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
