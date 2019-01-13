@extends('frontend.layouts.app')


@section('content')

<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<h1 class="inline all-caps mb-0 fw-700">Bize Ulaşın</h1>
									<ul class="breadcrumb all-caps">
										<li>
											<a href="/">Anasayfa</a>
										</li>
										<li>
											Bize Ulaşın
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block no-padding">
					<div class="row collapse full-width">
						<div class="column width-12 center">
							<div class="map-container" data-coordinates="[[41.024937,28.977231]]" data-icon='"assets/images/icon/map-marker.png"' data-info='"Kemeraltı Caddesi Galata İş Merkezi No: 30-1A K:6 <br /> Karaköy Beyoğlu / İstanbul"' data-zoom-level="15" data-style="greyscale">
								<div id="map-canvas"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block">
					<div class="row">
					    <div class="width-3 right-sidebar">
					    	<div class="content">
						        <div class="title" style="margin-top:42px;">
									Adres bilgisi
								</div>
								<p>
									Kemeraltı Caddesi Galata İş Merkezi <br />
									No: 30-1A K:6 Karaköy Beyoğlu / İstanbul
								</p>
								<div class="title">
									Telefon numarası
								</div>
								<p>
									0542 343 72 25<br />
									0542 343 <strong>PACK</strong>
								</p>
							</div>
					    </div>
					    <div class="column width-9">
							<div class="contact-form-container">
								<form class="" action="" method="post" novalidate>
									<h4 class="mb-30 all-caps fw-700">Bize Yazın <div class="form-response title-response"></div></h4>
									<div class="row">
										<div class="column width-6">
											<input type="text" name="fname" class="form-fname form-element large" placeholder="İsim*" tabindex="1" required>
										</div>
										<div class="column width-6">
											<input type="text" name="lname" class="form-lname form-element large" placeholder="Soyisim" tabindex="2">
										</div>
										<div class="column width-6">
											<input type="email" name="email" class="form-email form-element large" placeholder="E-Posta Adresi*" tabindex="3" required>
										</div>
										<div class="column width-6">
											<input type="text" name="subject" class="form-subject form-element large" placeholder="Konu" tabindex="4">
										</div>
										<div class="column width-6">
											<input type="text" name="honeypot" class="form-honeypot form-element large">
										</div>
									</div>
									<div class="row">
										<div class="column width-12">
											<div class="field-wrapper">
												<textarea name="message" class="form-message form-element large" placeholder="Mesajınız*" tabindex="7" required></textarea>
											</div>
										</div>
										<div class="column width-12">
											<input type="submit" value="Gönder" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-right">
										</div>
									</div>
								</form>
							</div>
					    </div>
					</div>
				</div>


			</div>







@stop


@section('script')
@if(session()->has('success'))
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

    swal({
      title: "Tebrikler",
      text: "İletiniz gönderildi, gerekli inceleme sağlandıktan sonra sizinle en kısa sürede iletişime geçilecektir.",
      icon: "success",
      button: "Tamam",
    });
</script>


@endif
<style type="text/css">
@media screen and (max-width: 752px) {
  	.right-sidebar {
    background-color: inherit;
    position:inherit;
    top: 0;
    bottom: 0;
    right: 0;
}
}

</style>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhyIdaGtgu61cQP29kheP-wKuE7y9meqE"></script>

@stop