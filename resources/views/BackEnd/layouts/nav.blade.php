<div class="nk-sidebar-menu" data-simplebar>
    <ul class="nk-menu">
        <li class="nk-menu-heading">
            <h6 class="overline-title text-primary-alt">Меню</h6>
        </li><!-- .nk-menu-heading -->
        <li class="nk-menu-item has-sub">
            <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                <span class="nk-menu-text">Проекты</span>
            </a>
            <ul class="nk-menu-sub">
                <li class="nk-menu-item">
                    <a href="{{route('admin.cases.index')}}" class="nk-menu-link"><span class="nk-menu-text">Все проекты</span></a>
                </li>
                <li class="nk-menu-item">
                    <a href="{{route('admin.cases.create')}}" class="nk-menu-link"><span class="nk-menu-text">Добавить проект</span></a>
                </li>
            </ul><!-- .nk-menu-sub -->
        </li><!-- .nk-menu-item -->
        <li class="nk-menu-item has-sub">
            <a href="#" class="nk-menu-link nk-menu-toggle">
                <span class="nk-menu-icon"><em class="icon ni ni-list"></em></span>
                <span class="nk-menu-text">Категории</span>
            </a>
            <ul class="nk-menu-sub">
                <li class="nk-menu-item">
                    <a href="{{route('admin.categories.index')}}" class="nk-menu-link"><span class="nk-menu-text">Все категории</span></a>
                </li>
                <li class="nk-menu-item">
                    <a href="{{route('admin.categories.create')}}" class="nk-menu-link"><span class="nk-menu-text">Добавить категорию</span></a>
                </li>
            </ul><!-- .nk-menu-sub -->
        </li><!-- .nk-menu-item -->
        <li class="nk-menu-heading">
            <h6 class="overline-title text-primary-alt">Взаимодействия</h6>
        </li><!-- .nk-menu-heading -->
        <li class="nk-menu-item">
            <a href="{{route('admin.contact.index')}}" class="nk-menu-link" data-original-title="" title="">
                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                <span class="nk-menu-text">Обратная связь</span>
            </a>
        </li>
        <li class="nk-menu-item">
            <a href="{{route('admin.offer.index')}}" class="nk-menu-link" data-original-title="" title="">
                <span class="nk-menu-icon"><em class="icon ni ni-pen2"></em></span>
                <span class="nk-menu-text">Офферта</span>
            </a>
        </li>
        <li class="nk-menu-item">
            <a href="{{route('admin.calculate.index')}}" class="nk-menu-link" data-original-title="" title="">
                <span class="nk-menu-icon"><em class="icon ni ni-calc"></em></span>
                <span class="nk-menu-text">Калькулятор</span>
            </a>
        </li>
    </ul><!-- .nk-menu -->
</div><!-- .nk-sidebar-menu -->
