<?php $__env->startSection('content'); ?>



  <div class="wrapper reveal-side-navigation">
  		<div class="wrapper-inner">

  			<div class="content clearfix">

  				<div class="section-block intro-title-2 xxsmall bkg-charcoal-transition">
  					<div class="row">
  						<div class="column width-12">
  							<div class="row">
  								<div class="column width-12">
  									<div class="title-container">
  										<div class="title-container-inner">
  											<ul class="breadcrumb all-caps">
     												<li>
     													<a href="/">Anasayfa</a>
     												</li>
     												<li>
     													<?php echo e(Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname); ?>

     												</li>
  											</ul>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>

  				<div class="section-block hero-5 hero-5-2 height-auto min-height-half bkg-grey-ultralight mobile-bkg-white">
  					<div class="media-column width-5 bkg-white"></div>
  					<div class="row">
  						<div class="column width-4 half-padding-right left-side-menu mb-60 center">
  							<div class="profile">
  								<div class="img" style="background-image:url(assets/images/dummy-profile.jpg)"></div>
  								<div class="content">
  									<span class="fw-300">Merhaba :)</span>
  									<h4 class="fw-400"><?php echo e(Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname); ?></h4>
  								</div>
  							</div>
  							<ul>
                  <li><a href="/account/orders" class="button large bkg-hover-black color-hover-white">Siparişlerim</a></li>
   								<li class=""><a href="/account/profile" class="button large bkg-hover-black color-hover-white">Profilim</a></li>
   								<li class="active"><a href="/account/password" class="button large bkg-hover-black color-hover-white">Şifre İşlemleri</a></li>
   								<li><a href="/account/address" class="button large bkg-hover-black color-hover-white">Adreslerim</a></li>
                  <li class=""><a href="/account/quiz" class="button large bkg-hover-black color-hover-white">Kayıtlı Formlarım</a></li>
   								<li><a href="/customer/logout" class="button large thin border-black border-hover-theme color-black color-hover-theme">Çıkış Yap</a></li>
  							</ul>
  						</div>
  						<div class="column width-7 push-1">
  							<h3 class="mb-30 all-caps fw-700">Şifre İşlemleri</h3>
  							<div class="row">
  								<div class="column width-9">
  									<form class="" action="" method="post" novalidate>
  										<div class="row">
  											<div class="column width-12">
  												<div class="field-wrapper">
  													<input type="password" name="old_password" class="form-password form-element large" placeholder="Eski Şifre" tabindex="1">
  												</div>
  											</div>
  											<div class="column width-12">
  												<div class="field-wrapper">
  													<input type="password" name="password" class="form-password form-element large" placeholder="Şifre" tabindex="1">
  												</div>
  											</div>
  											<div class="column width-12">
  												<div class="field-wrapper">
  													<input type="password" name="confirm_password" class="form-password-repeat form-element large" placeholder="Şifre Tekrar" tabindex="2">
  												</div>
  											</div>
  											<div class="column width-6">
  												<input type="text" name="honeypot" class="form-honeypot form-element">
  											</div>
  										</div>
  										<div class="row">
  											<div class="column width-12">
  												<input type="submit" value="Güncelle" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
  											</div>
  										</div>
  									</form>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>


<script>
    document.body.className += " hidden-footer";

</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<?php if(session()->has('success')): ?>
<script type="text/javascript">

    swal({
      title: "Tebrikler",
      text: "Parolanız başarıyla değiştirildi",
      icon: "success",
      button: "Tamam",
    });
</script>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<script type="text/javascript">

    swal({
      title: "Üzgünüm!",
      text: "Bir sorun oluştu ve parolanız değiştirilemedi. Lütfen tekrar deneyiniz",
      icon: "error",
      button: "Tamam",
    });
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>