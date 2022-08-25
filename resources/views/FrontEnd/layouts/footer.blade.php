<footer class="footer--black">
    @include('FrontEnd.ModalWindows.contact')
    <div class="fullwidth-container">
        <div class="footer__top footer__top--black">
            <div class="footer-box">
                <p class="footer-box__name">
                    Меню навигации
                </p>
                <ul class="footer-box__list">
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('index')}}">
                            Главная
                        </a>
                    </li>
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('about-us')}}">
                            О нас
                        </a>
                    </li>
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('catalog')}}">
                            Наши проекты
                        </a>
                    </li>
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('calculator')}}">
                            Калькулятор
                        </a>
                    </li>
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('contacts')}}">
                            Контакты
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-box">
                <p class="footer-box__name">
                    Дополнительно
                </p>
                <ul class="footer-box__list">
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="#">
                            Карта проектов
                        </a>
                    </li>
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="#">
                            Политики конфиденциальности
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-box">
                <p class="footer-box__name">
                    Рубрики
                </p>
                <ul class="footer-box__list">
                    <li class="footer-box__item">
                        <a class="footer-box__link" href="{{route('blog')}}">
                            Блог
                        </a>
                    </li>
                </ul>
            </div>
            <div class="contact-details">
                <div class="contact-details__name">
                    Свяжитесь с нами
                </div>
                <ul class="contact-details__list">
                    <li class="contact-details__item contact-details__item--email contact-details__item--black ">
                        <a class="contact-details__link" href="mailto:sales@freesun.md">
                            sales@freesun.md
                        </a>
                    </li>
                    <li class="contact-details__item contact-details__item--tel contact-details__item--black">
                        <a class="contact-details__link" href="tel:+37378777220">
                            +37378777220
                        </a>
                    </li>
                </ul>
                <ul class="socials">
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
            </div>
        </div>
        <div class="footer__copyright footer__copyright--black-version ">
            Free Sun 2022 | All rights reserved
        </div>
    </div>
</footer>
