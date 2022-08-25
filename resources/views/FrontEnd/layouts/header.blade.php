<header class="header">
    <div class="fullwidth-container">
        <nav class="header__nav">
            @include('FrontEnd.layouts.template_components.logo')
            @include('FrontEnd.layouts.template_components.nav')
            <div class="header_right_components" style="display: flex; align-items: center; justify-content: flex-end">
                @include('FrontEnd.layouts.template_components.languages')
                @include('FrontEnd.layouts.template_components.header_burger')
            </div>
        </nav>
    </div>
</header>
