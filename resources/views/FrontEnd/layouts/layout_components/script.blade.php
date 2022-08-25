<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('/frontend')}}/assets/libs/fancybox/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/imask"></script>
<script src="{{asset('frontend/assets')}}/js/main.min.js"></script>

@yield('scripts')

<script>
    var elements = document.querySelectorAll('.phone_field');

    var maskOptions = {
        mask: '37300000000'
    };

    elements.forEach(element =>{
        var mask = IMask(element, maskOptions);
    });

    $(document).on('click','#modal_offer_btn',function (e) {
        e.preventDefault();
        var modal_name_surname = $('#modal_name_surname').val();
        var modal_phone = $('#modal_phone').val();
        var modal_email = $('#modal_email').val();
        var modal_offer_comment = $('#modal_offer_comment').val();

        var token = "{{csrf_token()}}";
        var path = "{{route('offer.store')}}";
        $.ajax({
            url: path,
            type: "POST",
            dataType:"JSON",
            data:{
                name_surname: modal_name_surname,
                phone: modal_phone,
                email: modal_email,
                comment: modal_offer_comment,
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
