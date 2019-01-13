

<?php $__env->startSection('content'); ?>

	<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition no-height">
					<div class="row">
						<div class="column width-12">
							<div class="row">
								<div class="column width-6">
									<div class="title-container">
										<div class="title-container-inner">
											<ul class="breadcrumb all-caps">
												<li>
													<a href="/">Anasayfa</a>
												</li>
												<li>
													<a href="/boxes">Kutular</a>
												</li>
												<li>
													<?php echo e($influencer->name); ?>

												</li>
											</ul>
											<div class="mini-profile bio">
												<div class="avatar">
													<span class="img">
														<img src="//packsion.com/<?php echo e($influencer->photo); ?>" alt=""/>
													</span>
													<h3 class="all-caps fw-700 color-white"><?php echo e($influencer->name); ?></h3>
													<p class="color-white"><?php echo e($influencer->bio); ?></p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="column width-6">
									<div class="thumbnail video-thumbnail no-margin-bottom">
										<img src="//packsion.com/<?php echo e($influencer->video_kapak); ?>" alt="" />
										<div class="caption-over-outer">
											<div class="caption-over-inner center color-white">
												<div class="row">
													<div class="column width-12">
														<?php  $video = explode('v=', $influencer->video);  ?>
														<a href="https://www.youtube.com/embed/<?php echo e(end($video)); ?>?autoplay=1&amp;showinfo=0&amp;loop=1" data-caption="<?php echo e($influencer->name); ?>" class="lightbox-link icon-play bkg-hover-theme color-white color-hover-white xxxlarge"></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<section class="section-block team-2">
					<div class="row">
						<div class="column width-12 left">
							<h3>STYLE BOXES BY <span><?php echo e($influencer->name); ?></span></h3>
						</div>
					</div>
					<div class="row flex style-box">
						<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="column width-4">
							<div class="feature-column box-<?php echo e($loop->iteration); ?>">
								<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700">
									<a class="overlay-link" href="/influencer/product/<?php echo e($product->products_id); ?>">
										<img src="/assets/images/packsion-box.png" alt=""/>
										<div class="overlay-info">
											<h2 class="fw-800"><?php echo e($product->products_name); ?></h2>
											<h3><?php echo e((int)$product->products_price); ?> TRY / Ay</h3>
											<p><strong>Includes 5 Top, 3 Bottom, 1 Jacket <br /> every month.</strong></p>
											<button class="button border-white border-hover-white color-white color-hover-white"><strong><?php echo e(trans('page.Satın Al')); ?></strong></button>
										</div>
									</a>
								</div>
							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</div>
				</section>


			</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>