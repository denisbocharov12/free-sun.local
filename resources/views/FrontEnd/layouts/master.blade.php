<!DOCTYPE html>
<html lang="ru">
@include('FrontEnd.layouts.layout_components.head')
<body>
<div class="wrapper">
    <div class="container">
        @include('FrontEnd.layouts.header')
        <main id="main">
            @yield('content')
        </main>
    </div>
    @include('FrontEnd.layouts.template_components.nav_slide')
    @include('FrontEnd.layouts.template_components.chat')
    @include('FrontEnd.layouts.footer')
</div>
@include('FrontEnd.layouts.layout_components.script')
</body>
</html>
