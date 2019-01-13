


<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">


<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="row">
								<div class="column width-12">
									<div class="title-container">
										<div class="title-container-inner">
											<h1 class="inline all-caps mb-0 fw-700">Ürünler</h1>
											<ul class="breadcrumb all-caps">
												<li>
													<a href="/">Anasayfa</a>

												</li>
												<li>
													Ürünler
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block pt-30">
					<div class="row">

						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<div class="column width-3">
								<div class="product-item" style="position:relative;">
								<div class="product-image">
									<img src="/<?php echo e($product->products_image); ?>" />
									<div class="add-to-link">
										<div class="add-to-link">
											  <div class="quickview-button">
											    <a href="/products/product/ajax/<?php echo e($product->products_id); ?>" id="work-dresses" data-toggle="tooltip" data-placement="top" title="Quick View" class="sca-qv-button harman_btn3 item-quick-view" data-lightbox="ajax">
											      <span data-translate="product.quickview">İncele</span>
											    </a>
											  </div>
											</div>
										</div>
								</div>
							</div>
								<h3><?php echo e($product->products_name); ?></h3>
							</div>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>
</div>

<style type="text/css">
	
	.add-to-link {
  text-align: left;
  position: absolute;
  width: 100%;
  bottom: 0;
  z-index: 3;
  background-color: rgba(255, 255, 255, 0.7);
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -ms-transition: all 0.5s;
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  -ms-transform: translateY(100%);
  -moz-transform: translateY(100%);
}
.product-item:hover .add-to-link {
  bottom: 0;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  -ms-transition: all 0.5s;
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
  transform: translateY(0);
  -ms-transform: translateY(0);
  -moz-transform: translateY(0);
}
.quickview-button .sca-qv-button {
    width: 100%;
    text-align: center;
    height: 40px;
    line-height: 40px;
    display: block;
    opacity: 1;
    letter-spacing: 1px;
}
 .quickview-button .sca-qv-button {
    background: #222222 !important;
    border-color: #222222 !important;
    color: #ffffff !important;
}

.quickview-button .sca-qv-button:hover {
    background: #00ffff !important;
    border-color: #00ffff !important;
    color: #252525 !important;
}

</style>
    <?php $__env->stopSection(); ?>



    <?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="https://www.ozkaleligida.com/Themes/canvas/assets/js/plugins.js"></script>
    <script type="text/javascript" src="https://www.ozkaleligida.com/Themes/canvas/assets/js/functions.js"></script>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>