

<?php $__env->startSection('content'); ?>

	<div class="content clearfix">



<section id="tcHero" class="owl-carousel owl-theme data-scrolled-into-view">
	<?php $__currentLoopData = $slideshows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="page-image" style="background-image: url(//packsion.com/<?php echo e($slide->image); ?>)">

    <div class="u-md-show tc-hero-mobile-img">
      <img src="//packsion.com/<?php echo e($slide->tablet); ?>">
    </div>

    <div class="overlay"></div>
		<?php if($slide->text == 1): ?>
    <div class="module-overlay u-posCenterCenter u-container u-boxShadow u-bg-color--white u-color--grayDark u-textCenter " style="">
      <div class="module-overlay__logo u-inlineBlock u-paddingAs u-bg-color--white">
				<img src="/assets/min_icon.png" />

      </div>

      <div class="module-content">

        <h1 class="u-textSerif module-overlay__header">
                      <?php echo e($slide->title); ?>

                  </h1>
        <p class="u-textSans u-paddingBs u-textSize--18-27">
                      <?php echo e($slide->top_label); ?>

                  </p>
				<?php if($slide->buttons == 1): ?>
        <div class="module-cta">
        	<?php if(!Auth::guard('customer')->check()): ?>
        		<a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded">
						Kadın
					</a>

					<a href="/checkout/quiz/step/1?gender=man&cache=flush" class="button--rounded button--eq-width">
						Erkek
					</a>
        	<?php else: ?>
					<a href="/boxes/kadin" class="button--rounded">
						Kadın
					</a>

					<a href="/boxes/erkek" class="button--rounded button--eq-width">
						Erkek
					</a>
			<?php endif; ?>
                  </div>

				<?php endif; ?>

      </div>

    </div>
	<?php endif; ?>

  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


  </div>


  </div>

</section>

<div class="row" style="margin-top:50px; margin-bottom: 20px;">
	
	<div class="column width-12 center" style="margin-bottom: 20px;">
		<h2 class="mb-20 all-caps"><strong>Nasıl Çalışır?</strong></h2>
		<a href="/nasil-calisir">
			<img src="/assets/packsion_steps.gif">
		</a>
	</div>
</div>
<div class="clearfix"></div>
<div class="row">
	<div class="">
		<div class="column width-4 offset-4 center mb-50">
			<div class="sep-divider">
				<h3><img src="/assets/min_icon.png"></h3>
			</div>
		</div>
	</div>
</div>
<div class="row flex style-box">
	</div>
<!-- <div class="row" style="margin-top:50px;">
	<div class="column width-8 offset-2 center">
		<h2 class="mb-20 all-caps" style="margin-top:34px;"><strong><?php echo e(trans('page.Stilistlerimiz sana özel kombin hazırlasın!')); ?></strong></h2>
		<p class="mb-20 op-4">UP TO 250 TRY / MONTH</p>
		<p class="fs-26"><?php echo e(trans('page.Select Your Plan')); ?></p>
	</div>
</div> -->
<!-- <div class="row flex style-box">
	<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<div id="card" class="column width-4 card view view-third">
    <div id="gifs-rows">
    	<div style="display:none;">
    		<img src="/assets/katman1.gif" />
    		<img src="/assets/katman2.gif" />
    		<img src="/assets/katman3.gif" />
    	</div>
    	<?php if($product->products_id == 83): ?>
      		<a class="link1" href="/product/<?php echo e($product->products_id); ?>" data-src="/assets/katman1.gif">
      			<img class="preset-file" src="/assets/katman1.jpg" data-orig="/assets/katman1.jpg" alt=""/>
      		</a>
      	<?php elseif($product->products_id == 84): ?>
      		<a class="link2" href="/product/<?php echo e($product->products_id); ?>" data-src="/assets/katman2.gif">
      			<img class="preset-file" src="/assets/katman2.jpg" data-orig="/assets/katman2.jpg" alt=""/>
      		</a>
      	<?php else: ?>
      		<a class="link3" href="/product/<?php echo e($product->products_id); ?>" data-src="/assets/katman3.gif">
      			<img class="preset-file" src="/assets/katman3.jpg" data-orig="/assets/katman3.jpg" alt=""/>
      		</a>
      	<?php endif; ?>
    

    </div>


	</div>

	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<span style="margin-left:15px;"><span style="color:red;">*</span> Görseller temsilidir.</span>
</div> -->
				<section class="section-block team-2">
					<!-- <div class="column width-4 offset-4 center mb-50">
						<div class="sep-divider">
							<h3>VEYA</h3>
						</div>
					</div> -->
					<div class="row">
						<div class="column width-8 offset-2 center">
							<i><img src="assets/images/icon/star.svg"/></i>
							<h3><strong><?php echo e(trans('page.INFLUENCER STYLE BOXES')); ?></strong> <br /> <?php echo e(trans('page.FOR YOU')); ?></h3>
						</div>
						<div class="column width-10 offset-1">
							<div class="row content-grid-3">
								<?php $__currentLoopData = $influencers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<div class="grid-item">
									<div class="no-margin-bottom">
										<a href="javascript:;">
											<img src="//packsion.com/<?php echo e($inf->photo); ?>" width="750" height="750" alt="" />
										</a>
									</div>
									<div class="team-content-info center">
										<h4 class="mb-5 all-caps">
											<a href="javascript:;"><?php echo e($inf->name); ?></a>
										</h4>
									</div>
								</div>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</div>
						</div>

					</div>

				</section>

				


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php if(session()->has('success')): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    swal({
      title: "Tebrikler",
      text: "Ödemeniz başarıyla alındı",
      icon: "success",
      button: "Tamam",
    });
</script>
<?php echo e(session()->forget('checkout_quiz_id')); ?>

<?php echo e(session()->forget('quiz')); ?>

<?php echo e(session()->forget('product_id')); ?>

<?php echo e(session()->forget('checkout_address_id')); ?>

<?php echo e(session()->forget('address_id')); ?>

<?php echo e(session()->forget('plan')); ?>

<?php echo e(session()->forget('order_id')); ?>

<?php endif; ?>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
		singleItem: true,

    margin:10,
		autoplay: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true,
						loop:true
        },
        600:{
            items:1,
            nav:false,
						loop:true
        },
        1000:{
            items:1,
            nav:true,
            loop:true
        }
    }
})

$(function(){
  $('#gifs-rows img').hover(function(){
    // on mouse enter
    console.log($(this).parent().data('src'));
    var customdata = $(this).parent().data('src');
    $(this).attr('src',customdata); 
  }, function(){
    // on mouse leave
    $(this).attr('src',$(this).attr('data-orig'));
  });

});
if ( $(window).width() < 739) { 
(function () {
		  var count = 0;

		  $('.link1').click(function (e) {
		  	e.preventDefault();
		    count += 1;

		    if (count == 2) {
		      // come code
		      window.location = $(this).attr('href');
		    }
		  });

		  $('.link2').click(function (e) {
		  	e.preventDefault();
		    count += 1;

		    if (count == 2) {
		      // come code
		      window.location = $(this).attr('href');
		    }
		  });
		  $('.link3').click(function (e) {
		  	e.preventDefault();
		    count += 1;

		    if (count == 2) {
		      // come code
		      window.location = $(this).attr('href');
		    }
		  });
		})();
	}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>