@extends('FrontEnd.layouts.master')

@section('content')
    <section class="contacts">
        <div class="fixed-container">
            <h1 class="contacts__title h2">Свяжитесь с нами</h1>
            <div class="contacts__wrapper">
                <ul class="contacts-info">
                    <li class="contacts-info__item">
                        <p class="contacts-info__title contacts-info__title--email">
                            Email:
                        </p>
                        <a
                            class="contacts-info__link"
                            href="mailto:sales@freesun.md"
                        >
                            sales@freesun.md
                        </a>
                    </li>
                    <li class="contacts-info__item">
                        <p
                            class="contacts-info__title contacts-info__title--location"
                        >
                            Наш офис:
                        </p>
                        <a class="contacts-info__link" href="#">
                            ул.Ленина 65А г.Комрат
                        </a>
                    </li>
                    <li class="contacts-info__item">
                        <p class="contacts-info__title contacts-info__title--phone">
                            Номера:
                        </p>
                        <a class="contacts-info__link" href="tel:+37378777220">
                            +37378777220 - Михаил
                        </a>
                    </li>
                    <li class="contacts-info__item">
                        <p
                            class="contacts-info__title contacts-info__title--social"
                        >
                            Мы в соц.сетях:
                        </p>
                        <ul class="contacts-info__socials socials">
{{--                            <li class="socials__item">--}}
{{--                                <a--}}
{{--                                    class="contacts-info__links socials__link socials__link--linkedin"--}}
{{--                                    href="#"--}}
{{--                                ></a>--}}
{{--                                <span class="sr-only">Линкедин</span>--}}
{{--                            </li>--}}
                            <li class="socials__item">
                                <a
                                    class="socials__link socials__link--instagram"
                                    href="https://instagram.com/freesunofmoldova?igshid=YmMyMTA2M2Y=" target="_blank"
                                ></a>
                                <span class="sr-only">Instagram</span>
                            </li>
                            <li class="socials__item">
                                <a
                                    class="socials__link socials__link--facebook"
                                    href="https://www.facebook.com/freesunofmoldova" target="_blank"
                                ></a>
                                <span class="sr-only">Facebook</span>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="contacts-form" action="{{route('contacts.store')}}" method="POST">
                    @csrf
                    <h3 class="contacts-form__title h3">
                        Оставьте заявку, если есть вопросы:
                    </h3>
                    <div class="contacts-form__wrapper">
                        <ul class="contacts-form__inputs">
                            <li class="contacts-form__item">
                                <label class="contacts-form__label" for="name"
                                >Имя</label
                                >
                                <input
                                    class="contacts-form__input field"
                                    type="text"
                                    name="name"
                                    id="name"
                                    placeholder="Иван"
                                    required
                                />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                            <li class="contacts-form__item">
                                <label class="contacts-form__label" for="surname"
                                >Фамилия</label
                                >
                                <input
                                    class="contacts-form__input field"
                                    type="text"
                                    name="surname"
                                    id="surname"
                                    placeholder="Иванов"
                                    required
                                />
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                            <li class="contacts-form__item">
                                <label class="contacts-form__label" for="Phone"
                                >Номер телефона:</label
                                >
                                <input
                                    class="contacts-form__input field phone_field"
                                    type="number"
                                    name="phone"
                                    id="Phone"
                                    placeholder="067857647"
                                />
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                            <li class="contacts-form__item">
                                <label class="contacts-form__label" for="email"
                                >Email:</label
                                >
                                <input
                                    class="contacts-form__input field"
                                    type="email"
                                    name="email"
                                    id="email"
                                    placeholder="sales@freesun.md"
                                    required
                                />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                        </ul>
                        <div class="contacts-form__inner">
                            <label class="contacts-form__label" for="textarea"
                            >Вопрос/комментарий:</label
                            >
                            <textarea
                                class="contacts-form__textarea field"
                                name="comment"
                                id="textarea"
                                placeholder="Type here.."
                            ></textarea>
                            @error('comment')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="contacts-form__row">
                        <div class="contacts-form__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Arcu amet, adipiscing tincidunt pellentesque sed
                            adipiscing condimentum at.
                        </div>
                        <button class="contacts-form__button" type="submit">
                            Отправить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
