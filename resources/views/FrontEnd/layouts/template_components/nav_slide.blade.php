<div class="burger-menu">
    <div class="burger-menu__wrapper">
        <button class="burger-menu__btn" type="button"></button>
        <ul class="burger-menu__nav">
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('index') ? 'burger-menu__link--active' : '' }}" href="{{route('index')}}">
                    Главная
                </a>
            </li>
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('about-us') ? 'burger-menu__link--active' : '' }}" href="{{route('about-us')}}">
                    О нас
                </a>
            </li>
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('catalog') ? 'burger-menu__link--active' : '' }}" href="{{route('catalog')}}">
                    Наши проекты
                </a>
            </li>
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('calculator') ? 'burger-menu__link--active' : '' }}" href="{{route('calculator')}}">
                    Калькулятор
                </a>
            </li>
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('contacts') ? 'burger-menu__link--active' : '' }}" href="{{route('contacts')}}">
                    Контакты
                </a>
            </li>
            <li class="burger-menu__item">
                <a class="burger-menu__link grey-effects {{ request()->routeIs('blog') ? 'burger-menu__link--active' : '' }}" href="{{route('blog')}}">
                    Блог
                </a>
            </li>
        </ul>
        <a class="burger-menu__language" href="#">
            Ru
        </a>
    </div>
</div>
