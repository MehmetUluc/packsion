@extends('frontend.layouts.app')

@section('content')

	@if(Request::get('cache') == 'flush')
		@php
			session()->forget('quiz');
			session()->forget('quiz_1');
			session()->forget('quiz_2');
			session()->forget('quiz_3');
			session()->forget('quiz_4');
			session()->forget('checkout_quiz_id');
		@endphp
	@endif

	@if(session('gender') == 'man')
		@if($step == 1)
			@include('frontend.quizzes.quiz_m_1')
		@elseif($step == 2)
			@include('frontend.quizzes.quiz_m_2')
		@elseif($step == 3)
			@include('frontend.quizzes.quiz_m_3')
		@elseif($step == 4)
			@include('frontend.quizzes.quiz_m_4')
		@endif
	@elseif(session('gender') == 'woman')
		@if($step == 1)
			@include('frontend.quizzes.quiz_w_1')
		@elseif($step == 2)
			@include('frontend.quizzes.quiz_w_2')
		@elseif($step == 3)
			@include('frontend.quizzes.quiz_w_3')
		@else($step == 4)
			@include('frontend.quizzes.quiz_w_4')
		@endif
	@endif
<style type="text/css">
	em.error {
    float: left;
    clear: both;
    width: 100%;
    margin-bottom: 3px;
    font-size: 11px;
    color: red;
}
</style>
@stop

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="/assets/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  	$("#your-length").slider({
			    range: "min",
			    min: 140,
			    max: 240,
			    value: {{ session('quiz_1')['boy'] ?? '140'  }},
			    slide: function(e, ui) {
		    		$(this).find(".current-value").html(ui.value);
		    		$(this).find(".quiz_boy").val(ui.value);
			    }
		  	});
		  	$("#your-weight").slider({
			    range: "min",
			    min: 40,
			    max: 150,
			    value: {{ session('quiz_1')['kilo'] ?? '40'  }},
			    slide: function(e, ui) {
			      	$(this).find(".current-value").html(ui.value);
			      	$(this).find(".quiz_kilo").val(ui.value);
			    }
		  	});

		  	$("#datepicker").datepicker({
	            yearRange: '1950:2017',
	            changeMonth: true,
	            changeYear: true,
	            defaultDate: "01/01/1950",
							dayNames:[ "pazar", "pazartesi", "salı", "çarşamba", "perşembe", "cuma", "cumartesi" ],//günlerin adı

							dayNamesMin: [ "pa", "pzt", "sa", "çar", "per", "cum", "cmt" ],//kısaltmalar
							monthNamesShort: [ "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran", "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık" ],//ay seçim alanın düzenledik
							language: 'tr'
	        });
		});
	</script>

	<script type="text/javascript" src="/assets/js/jquery.validate.min.js"></script>

	<script type="text/javascript">

(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#quiz").validate({
				ignore: [],
                rules: {

                    'quiz[title]': {
                        required: true,
                    },
                    'quiz[dob]': {
                        required: true,

                    },
                    'quiz[goz_rengi]': {
                        required: true,

                    },
                    'quiz[ten_rengi]': {
                        required: true,

                    },
                    'quiz[vucut]': {
                        required: true,

                    },
					'quiz[job]': {
                        required: true,

                    },


                },
                errorElement: "em",
                errorPlacement: function(error, element) {
				    error.appendTo( element.parent().parent().parent() );
				  },
                messages: {
                    'quiz[title]': "Lütfen adınızı girin",
                    'quiz[dob]': "Doğum tarihi alanı zorunludur",
                    'quiz[job]': "Mesleğiniz alanı zorunludur",
                    'quiz[goz_rengi]': "Göz rengi zorunlu bir alandır",
                    'quiz[sac_rengi]': "Saç rengi zorunlu bir alandır",
                    'quiz[ten_rengi]': "Ten rengi zorunlu bir alandır",
                    'quiz[vucut]': "Vücut tipi zorunlu bir alandır",
                   },
                focusInvalid: false,
			    invalidHandler: function(form, validator) {

			        if (!validator.numberOfInvalids())
			            return;

			        $('html, body').animate({
			            scrollTop: $(validator.errorList[0].element).offset().top
			        }, 2000);

			    },
                submitHandler: function(form) {
                    form.submit();
                }
            });



            $("#quiz2").validate({
				ignore: [],
                rules: {

                    'quiz[üst_beden]': {
                        required: true,
                    },

                    'quiz[kot_beden]': {
                        required: true,

                    },
                    'quiz[alt_beden]': {
                        required: true,

                    },
                    'quiz[ayakkabi_no]': {
                        required: true,

                    },


                },
                errorElement: "em",
                errorPlacement: function(error, element) {
				    error.appendTo( element.parent().parent().parent() );
				  },
				  focusInvalid: false,
			    invalidHandler: function(form, validator) {

			        if (!validator.numberOfInvalids())
			            return;

			        $('html, body').animate({
			            scrollTop: $(validator.errorList[0].element).offset().top
			        }, 2000);

			    },
                messages: {
                    'quiz[üst_beden]': "Bu alan zorunludur",

                    'quiz[kot_beden]': "Bu alan zorunludur",
                    'quiz[alt_beden]': "Bu alan zorunludur",
                    'quiz[ayakkabi_no]': "Bu alan zorunludur",

                   },
                submitHandler: function(form) {
                    form.submit();
                }
            });


            $("#quiz3").validate({
				ignore: [],
                rules: {

                    'quiz[stil][]': {
                        required: true,
                    },
                    'quiz[bussiness_stil][]': {
                        required: true,

                    },
                    'quiz[tshirt][]': {
                        required: true,

                    },
                    'quiz[gomlek][]': {
                        required: true,

                    },
                    'quiz[kazak][]': {
                        required: true,

                    },

                    'quiz[pantolon][]': {
                        required: true,

                    },


                },
                errorElement: "em",
                errorPlacement: function(error, element) {
				    error.appendTo( element.parent().parent().parent() );
				  },
				  focusInvalid: false,
			    invalidHandler: function(form, validator) {

			        if (!validator.numberOfInvalids())
			            return;

			        $('html, body').animate({
			            scrollTop: $(validator.errorList[0].element).offset().top
			        }, 2000);

			    },
                messages: {
                    'quiz[stil][]': "Bu alan zorunludur",
                    'quiz[bussiness_stil][]': "Bu alan zorunludur",
                    'quiz[tshirt][]': "Bu alan zorunludur",
                    'quiz[gomlek][]': "Bu alan zorunludur",
                    'quiz[kazak][]': "Bu alan zorunludur",
                    'quiz[pantolon][]': "Bu alan zorunludur",

                   },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });
	})(jQuery, window, document);




		(function () {
		  var count = 0;

		  $('.genel').click(function () {
		    count += 1;

		    if (count == 2) {
		      // come code
		      window.location = $('.genel a').attr('href');
		    }
		  });
		})();

		(function () {
		  var count = 0;

		  $('.beden').click(function () {
		    count += 1;

		    if (count == 2) {
		      // come code
		      window.location = $('.beden a').attr('href');
		    }
		  });
		})();

</script>
<style type="text/css">
	@media only screen and (max-width: 767px) {
		form#quiz .column.width-2, form#quiz3 .column.width-4, form#quiz3 .column.width-3, form#quiz3 .column.width-2 {
			width: 50%;
			height: 225px;
		}

		form#quiz3 .brand-box .column.width-2 {
			height:inherit;
		}
	}
</style>
@stop
