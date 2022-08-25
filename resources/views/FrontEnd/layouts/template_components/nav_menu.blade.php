<li class="menu__item">
    <a class="menu__link grey-effects {{ request()->routeIs('index') ? 'menu__link--active' : '' }}" href="{{route('index')}}">Главная</a>
</li>
<li class="menu__item">
    <a class="menu__link grey-effects {{ request()->routeIs('about-us') ? 'menu__link--active' : '' }}" href="{{route('about-us')}}">О нас</a>
</li>
<li class="menu__item">
    <a class="menu__link grey-effects {{ request()->routeIs('catalog') ? 'menu__link--active' : '' }}" href="{{route('catalog')}}">Наши проекты</a>
</li>
<li class="menu__item">
    <a class="menu__link grey-effects {{ request()->routeIs('contacts') ? 'menu__link--active' : '' }}" href="{{route('contacts')}}">Контакты</a>
</li>
<li class="menu__item">
    <a class="menu__link grey-effects {{ request()->routeIs('blog') ? 'menu__link--active' : '' }}" href="{{route('blog')}}">Блог</a>
</li>
