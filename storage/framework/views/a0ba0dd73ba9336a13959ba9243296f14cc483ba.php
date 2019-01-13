

<?php $__env->startSection('content'); ?>

	<?php if(Request::get('cache') == 'flush'): ?>
		<?php 
			session()->forget('quiz');
			session()->forget('quiz_1');
			session()->forget('quiz_2');
			session()->forget('quiz_3');
			session()->forget('quiz_4');
			session()->forget('checkout_quiz_id');
		 ?>
	<?php endif; ?>

	<?php if(session('gender') == 'man'): ?>
		<?php if($step == 1): ?>
			<?php echo $__env->make('frontend.quiz.quiz_m_1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($step == 2): ?>
			<?php echo $__env->make('frontend.quiz.quiz_m_2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($step == 3): ?>
			<?php echo $__env->make('frontend.quiz.quiz_m_3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($step == 4): ?>
			<?php echo $__env->make('frontend.quiz.quiz_m_4', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>
	<?php elseif(session('gender') == 'woman'): ?>
		<?php if($step == 1): ?>
			<?php echo $__env->make('frontend.quiz.quiz_w_1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($step == 2): ?>
			<?php echo $__env->make('frontend.quiz.quiz_w_2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php elseif($step == 3): ?>
			<?php echo $__env->make('frontend.quiz.quiz_w_3', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php else: ?>
			<?php echo $__env->make('frontend.quiz.quiz_w_4', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php endif; ?>
	<?php endif; ?>
<style type="text/css">
	em.error {
    float: left;
    clear: both;
    width: 100%;
    margin-bottom: 3px;
    font-size: 11px;
    color: red;
}

@media  only screen and (max-width: 767px) {
	.section-block.intro-title-2 {
	    display: none;
	}

	nav.navigation.nav-block.secondary-navigation.nav-right {
	    display: none;
	} 
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="/assets/jquery.ui.touch-punch.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  	$("#your-length").slider({
			    range: "min",
			    min: 140,
			    max: 240,
			    value: <?php echo e(session('quiz_1')['boy'] ?? '140'); ?>,
			    slide: function(e, ui) {
		    		$(this).find(".current-value").html(ui.value);
		    		$(this).find(".quiz_boy").val(ui.value);
			    }
		  	});
		  	$("#your-weight").slider({
			    range: "min",
			    min: 40,
			    max: 150,
			    value: <?php echo e(session('quiz_1')['kilo'] ?? '40'); ?>,
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

		        function isNumber(e){
    e = e || window.event;
    var charCode = e.which ? e.which : e.keyCode;
    return /\d/.test(String.fromCharCode(charCode));
}

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
		      window.location = "/checkout/quiz/step/1";
		    }
		  });
		})();

		(function () {
		  var count = 0;

		  $('.beden').click(function () {
		    count += 1;
		  <?php if(request()->segment(4) != 1): ?>
		    if (count == 2) {
		      // come code
		      window.location = "/checkout/quiz/step/2";
		    }
		  <?php endif; ?>
		  });
		})();

</script>


<?php if(session()->has('exist')): ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script type="text/javascript">
	swal("Üzgünüm", 'Bu email adresi ile daha önce kayıt olunmuş. Eğer bu mail adresi size aitse lütfen hesabınıza giriş yaparak yeniden deneyin. Ya da başka bir email adresi ile devam edin.', "error");
</script>

<?php endif; ?>

<style type="text/css">
	@media  only screen and (max-width: 767px) {
		form#quiz .column.width-2, form#quiz3 .column.width-4, form#quiz3 .column.width-3, form#quiz3 .column.width-2 {
			width: 50%;
			height: 225px;
		}

		form#quiz3 .brand-box .column.width-2 {
			height:inherit;
		}
	}
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>