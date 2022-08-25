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
                        for="monthly_electricity"
                    >
                        Ежемесячный счет за электроэнергию (MDL)
                    </label>
                    <input
                        class="range-slider__input"
                        id="monthly_electricity"
                        type="text"
                        name="monthly_electricity"
                        value="710"
                        data-min="0"
                        data-max="100000"
                        data-from="710"
                    />
                    <span class="range-slider__value" id="monthly_electricity_value"></span>
                </div>
                <div class="range-slider">
                    <label
                        class="range-slider__label calc-label"
                        for="heated_area"
                    >
                        Отапливаемая площадь (М.КВ)
                    </label>
                    <input
                        class="range-slider__input"
                        id="heated_area"
                        type="text"
                        name="heated_area"
                        value="78"
                        data-min="0"
                        data-max="2000"
                        data-from="78"
                    />
                    <span class="range-slider__value" id="heated_area_value"></span>
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
                                    for="required_power"
                                >
                                    Требуемая мощность солнечной станции (кВт)
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="required_power"
                                    name="required_power"
                                    value="35"
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="required_qty"
                                >
                                    Требуемое количество солнечных панелей (шт.)
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="required_qty"
                                    name="required_qty"
                                    value="1063"
                                />
                            </li>
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="3"
                                >
                                    Необходимая площадь на крыше (м.кв)
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="required_area_roof"
                                    name="required_area_roof"
                                    value="12376"
                                />
                            </li>
                        </ul>
                        <ul class="solar-panel-calc__row">
                            <li class="solar-panel-calc__item">
                                <label
                                    class="solar-panel-calc__label calc-label"
                                    for="required_area_earth"
                                >
                                    Необходимая площадь на земле (м.кв)
                                </label>
                                <input
                                    class="solar-panel-calc__input"
                                    type="text"
                                    id="required_area_earth"
                                    name="required_area_earth"
                                    value="10.2089"
                                />
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
            <div class="wrap_calculator_offer_btn">
                <a id="calculator_offer_btn_add" class="order-btn" href="javascript:;" data-fancybox="" data-src="#CalculatorOffer" data-options="{'touch' : false}">
                    Получить офферту
                </a>
            </div>
        </div>
    </section>
@endsection
@include('FrontEnd.ModalWindows.calculator')
@section('scripts')
    <script>
        $(document).ready(function (){
            $("#monthly_electricity").ionRangeSlider({
                onStart: function (data) {
                    $("#monthly_electricity_value").text(data.from);
                },
                onChange: function (data) {
                    $("#monthly_electricity_value").text(data.from);
                },
                onFinish: function (){
                    setTimeout(changeCalculatorValues, 100);
                }
            });

            $("#heated_area").ionRangeSlider({
                onStart: function (data) {
                    $("#heated_area_value").text(data.from);

                },
                onChange: function (data) {
                    $("#heated_area_value").text(data.from);
                },
                onFinish: function (){
                    setTimeout(changeCalculatorValues, 100);
                }
            });
        });
        function changeCalculatorValues(){
            var monthly_electricity = $('#monthly_electricity').val();
            var heated_area = $('#heated_area').val();

            var token = "{{csrf_token()}}";
            var path = "{{route('calculator.change')}}";

            $.ajax({
                url: path,
                type: "POST",
                dataType:"JSON",
                data:{
                    monthly_electricity: monthly_electricity,
                    heated_area: heated_area,
                    _token: token
                },
                success:function (response) {
                    if (response['status']){
                        $('#required_power').val(response.result.required_power);
                        $('#required_qty').val(response.result.required_qty);
                        $('#required_area_roof').val(response.result.required_area_roof);
                        $('#required_area_earth').val(response.result.required_area_earth);
                    } else {
                        toastr["info"](response['msg'])
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                },
                error: function (err){
                    if(err.status == 422){
                        $.each(err.responseJSON.errors, function (i, error) {
                            var el = $(document).find('[name="'+i+'"]');
                            el.after($('<span style="text-align: center; color: red; font-size: 12px; margin-top: 3px">'+error[0]+'</span>'));
                        });
                    }
                }
            });
        }
        $(document).on('click','#calculator_offer_btn',function (e) {
            e.preventDefault();

            var monthly_electricity = $('#monthly_electricity').val();
            var heated_area = $('#heated_area').val();
            var required_power = $('#required_power').val();
            var required_qty = $('#required_qty').val();
            var required_area_roof = $('#required_area_roof').val();
            var required_area_earth = $('#required_area_earth').val();

            var offer_name_surname = $('#offer_name_surname').val();
            var offer_phone = $('#offer_phone').val();
            var offer_email = $('#offer_email').val();
            var offer_comment = $('#offer_comment').val();

            var token = "{{csrf_token()}}";
            var path = "{{route('calculator.offer')}}";

            $.ajax({
                url: path,
                type: "POST",
                dataType:"JSON",
                data:{
                    monthly_electricity: monthly_electricity,
                    heated_area: heated_area,
                    required_power: required_power,
                    required_qty: required_qty,
                    required_area_roof: required_area_roof,
                    required_area_earth: required_area_earth,
                    offer_name_surname: offer_name_surname,
                    offer_phone: offer_phone,
                    offer_email: offer_email,
                    offer_comment: offer_comment,
                    _token: token
                },
                success:function (response) {
                    if (response['status']){
                        $('.fancybox-button').click();
                        toastr["success"](response['msg'])
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    } else {
                        toastr["info"](response['msg'])
                        toastr.options = {
                            "closeButton": false,
                            "debug": false,
                            "newestOnTop": false,
                            "progressBar": true,
                            "positionClass": "toast-bottom-right",
                            "preventDuplicates": false,
                            "onclick": null,
                            "showDuration": "300",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        }
                    }
                },
                error: function (err){
                    if(err.status == 422){
                        $.each(err.responseJSON.errors, function (i, error) {
                            var el = $(document).find('[name="'+i+'"]');
                            el.after($('<span style="text-align: center; color: red; font-size: 12px; margin-top: 3px">'+error[0]+'</span>'));
                        });
                    }
                }
            });
        });
    </script>
@endsection
