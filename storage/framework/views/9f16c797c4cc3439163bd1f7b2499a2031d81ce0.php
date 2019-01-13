

<?php $__env->startSection('content'); ?>


				<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
						                <li class="active"><a href="#"><span>1</span> Genel bilgi</a></li>
						                <li><a href="#"><span>2</span> Beden ölçüleri</a></li>
						                <li><a href="#"><span>3</span> Stil</a></li>
						                <li><a href="#"><span>4</span> Tercihler</a></li>
						                <li><a href="#"><span>5</span> Siparişi tamamla</a></li>
						            </ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block min-height-half">
					<div class="row">
					    <div class="width-3 right-sidebar">
					    	<div class="content">
						        <!-- <div class="title">
									Sipariş Özeti
								</div> -->
								<!--  -->
							</div>
					    </div>
					    <div class="column width-9">
								<div class="row">
							<div class="form-group-container">
								<?php if(Auth::guard('customer')->check() && count($quizzes) > 0): ?>

									<form class="" action="" method="post">
										<div class="column width-6">
									<div class="form-select form-element large">


										<select oninvalid="this.setCustomValidity('Lütfen bir form seçiniz')"
    oninput="this.setCustomValidity('')"  required name="exist_quiz" id="quiz-select" class="form-aux" onchange="if($(this).val() != ''){ $('.new_quiz').hide() }; if($(this).val() == 'new'){ $('.new_quiz').show() }; ">
											<option value="">Form Seçin</style>
											<option data-up="0" value="new">Yeni Form</option>
											<?php $__currentLoopData = $quizzes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option data-up="<?php echo e($quiz->updated); ?>" <?php if($quiz->default == 1): ?> selected <?php endif; ?> value="<?php echo e($quiz->id); ?>"><?php echo e($quiz->title); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										</select>
										<br />

										</div>
									</div>

										<div class="column width-3">
											<button type="submit" value="Kullan" class="kullan form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">Kullan</button>
										</div>
										<div class="column width-3">
											<a id="duzenle" style="text-align:center;" href="javascript:;" class="form-submit text-center button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">DÜZENLE</a>
										</div>




							</div>
							</div>
								</form>
								<?php endif; ?>
								<div class="new_quiz boxes mb-30" <?php if(Auth::guard('customer')->check()  && count($quizzes) > 0): ?> style="display:none" <?php endif; ?>>
									<div class="title">
										<h5 class="all-caps fw-700">Cinsiyet seçimi</h5>
									</div>
									<div class="rows">
										<div class="gender-select">
											<a href="/checkout/quiz/step/1?product_id=<?php echo e(request('product')); ?>&gender=woman&cache=flush" class="button thin border-black color-black large">K</a>
											<a href="/checkout/quiz/step/1?product_id=<?php echo e(request('product')); ?>&gender=man&cache=flush" class="button thin border-black color-black large">E</a>
										</div>
									</div>
								</div>
							</div>
					    </div>
					</div>
				</div>

			</div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
	jQuery('#quiz-select').on('change', function(){
		jQuery('#duzenle').attr('href', '/account/quiz/' + jQuery(this).val() + '/step/1?exist=1');
		if(jQuery(this).val() == 'new'){
			jQuery('.kullan').attr('disabled', 'disabled');
			jQuery('.kullan').css('display', 'none');
			jQuery('#duzenle').css('display', 'none');
		} else {
			jQuery('.kullan').attr('disabled', false);	
			jQuery('.kullan').css('display', 'inline-block');
			jQuery('#duzenle').css('display', 'inline-block');
		}

		if(jQuery(this).val() == ''){
			jQuery('.kullan').attr('disabled', 'disabled');
			jQuery('.kullan').css('display', 'none');
			jQuery('#duzenle').css('display', 'none');
			jQuery('.new_quiz').css('display', 'none');
		}

		if(jQuery('#quiz-select option:selected').data('up') == 0){
			jQuery('.kullan').attr('disabled', 'disabled');
			jQuery('.kullan').css('display', 'none');
		} else {
			jQuery('.kullan').attr('disabled', false);
			jQuery('.kullan').css('display', 'inline-block');
		}
	});

	jQuery('#quiz-select').change();
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>