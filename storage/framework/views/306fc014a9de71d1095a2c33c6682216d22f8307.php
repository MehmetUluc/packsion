


			<header class="header header-fixed-on-mobile header-dark" data-helper-in-threshold="200" data-helper-out-threshold="500" data-sticky-threshold="200" data-bkg-threshold="100" data-compact-threshold="100">
	<div class="header-inner-top">
		<div class="row nav-bar">
			<div class="column width-8 nav-bar-inner left">
				<ul>
					<li><a href="/nasil-calisir"><?php echo e(trans('page.Nasıl çalışır')); ?></a></li>
					<li><a href="/hakkimizda"><?php echo e(trans('page.Hakkımızda')); ?></a></li>
					<li><a href="/s-s-s">Sıkça sorulan sorular</a></li>
					<li><a href="/bize-ulasin"><?php echo e(trans('page.Bize ulaşın')); ?></a></li>
				</ul>
			</div>
			<div class="column width-4 nav-bar-inner right">
				<ul>
					<li><a href="https://www.instagram.com/packsioncom/" target="_blank">Instagram</a></li>
					<li class="sep"><span></span></li>
					<li><a href="https://www.facebook.com/packsioncom/" target="_blank">Facebook</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="header-inner">
		<div class="row nav-bar">
			<div class="column width-12 nav-bar-inner">
				<div class="logo">
					<div class="logo-inner">
						<a href="/"><img src="/assets/images/logo-dark.svg" alt="Packsion" /></a>
						<a href="/"><img src="/assets/images/logo.svg" alt="Packsion" /></a>
					</div>
				</div>
				<nav class="navigation nav-block secondary-navigation nav-right">
					<ul>
						<li>
							<div class="v-align-middle">
							<?php if(Auth::guard('customer')->check()): ?>
								<a href="/account/profile" class="button login no-label-on-mobile no-margin-bottom"><?php echo e(Auth::guard('customer')->user()->customers_firstname); ?></a>
							<?php else: ?>
								<a href="/customer/login" class="button login no-label-on-mobile no-margin-bottom"><?php echo e(trans('page.login')); ?></a>
							<?php endif; ?>
							</div>
						</li>

						<!-- Login olduktan sonra
						<li class="login-with">
							<div class="v-align-middle">
								<div class="dropdown">
									<a href="#" class="button medium thin border-black border-hover-theme color-black color-hover-theme all-caps fw-700 no-page-fade">Özkan Serbest</a>
									<ul class="dropdown-list">
										<li><a class="my-profile.php">Profilim</a></li>
										<li><a>Çıkış yap</a></li>
									</ul>
								</div>
							</div>
						</li>
						-->

						<!-- <li class="search-box">
							<div class="v-align-middle">
								<div class="dropdown nav-icon">
									<a href="" class="button no-label-on-mobile no-margin-bottom search no-page-fade"><img src="/assets/images/icon/search.svg" /></a>
									<div class="dropdown-list custom-content cart-overview">
										<div class="search-form-container site-search">
											<form action="#" method="get" novalidate>
												<div class="row">
													<div class="column width-12">
														<div class="field-wrapper">
															<input type="text" name="search" class="form-search form-element no-margin-bottom" placeholder="Aramaya başla...">
															<span class="border"></span>
														</div>
													</div>
												</div>
											</form>
											<div class="form-response"></div>
										</div>
									</div>
								</div>
							</div>
						</li> -->
						<li class="aux-navigation hide">
							<div class="v-align-middle">
								<a href="#" class="button no-label-on-mobile no-margin-bottom navigation-show side-nav-show">
									<span class="icon-menu"></span>
								</a>
							</div>
						</li>
					</ul>
				</nav>
				<nav class="navigation nav-block primary-navigation nav-left">
					<ul>
						<!-- <li class="<?php if(request()->segment(2) == ''): ?> current <?php endif; ?> all"><a href="/boxes"><?php echo e(trans('page.boxes')); ?></a></li> -->
						<?php if(!Auth::guard('customer')->check()): ?>
						<li class="woman <?php if(request('gender') == 'woman'): ?> current <?php endif; ?>"><a href="https://www.packsion.com/checkout/quiz/step/1?gender=woman&cache=flush"><?php echo e(trans('page.woman')); ?></a></li>
						<li class="man <?php if(request('gender') == 'man'): ?> current <?php endif; ?>"><a href="https://www.packsion.com/checkout/quiz/step/1?gender=man&cache=flush"><?php echo e(trans('page.man')); ?></a></li>
						<?php else: ?>
						<li class="woman <?php if(request()->segment(2) == 'kadin'): ?> current <?php endif; ?>"><a href="/boxes/kadin"><?php echo e(trans('page.woman')); ?></a></li>
						<li class="man <?php if(request()->segment(2) == 'erkek'): ?> current <?php endif; ?>"><a href="/boxes/erkek"><?php echo e(trans('page.man')); ?></a></li>
						<?php endif; ?>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
