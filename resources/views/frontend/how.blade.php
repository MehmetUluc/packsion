@extends('frontend.layouts.app')


@section('content')


	<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="row">
								<div class="column width-12">
									<div class="title-container">
										<div class="title-container-inner">
											<h1 class="inline all-caps mb-0 fw-700">Nasıl Çalışır?</h1>
											<ul class="breadcrumb all-caps">
												<li>
													<a href="/">Anasayfa</a>

												</li>
												<li>
													Nasıl Çalışır
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
					    <div class="column width-6 pull-right" style="min-height:500px;">
								<div class="videocontent" style="max-width:744px; margin-left:auto; margin-right:auto">
								<video id="my-video" class="video-js" controls preload="auto" class="video-js vjs-default-skin"
  controls preload="auto" width="100%" height="488px"
								poster="//packsion.com/images/kapak_gorsel.jpg" data-setup="{}">
									<source src="/tanitim.mp4" type='video/mp4'>

									<p class="vjs-no-js">
										To view this video please enable JavaScript, and consider upgrading to a web browser that
										<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
									</p>
								</video>
							</div>
					    </div>
					    <div class="column width-6" style="min-height:500px;">
					    	<br >
					    	<br >
					    	<br >
							<ul style="list-style: none;">
								<li>
									<div class="column width-2"><img class="img-responsive" src="/assets/genel.png" width="120" /></div><div class="column width-10"> Stil formunu doldurarak giyim tarzınızı ve tercihleriniz hakkında stil danışmanınıza fikir verin.
									</div> 
								</li>
								<br />
								<hr>
								<li>
									<div class="column width-2"><img class="img-responsive" src="/assets/iletisim.png" width="120" /></div><div class="column width-10"> Stil danışmanlarımız sizinle iletişime geçtikten sonra  size özel kombininizi hazırlasın.
									</div> 
								</li>
								<br />
								<hr>
								<li>
									<div class="column width-2"><img class="img-responsive" src="/assets/iade.png" width="120" /></div><div class="column width-10"> Kıyafetlerinizi ev konforunda deneyin. Size uygun olmayan ürünleri 14 gün içerisinde ücretsiz olarak iade edin.
									</div> 
								</li>
								<br />
								<hr>
								<li>
									<div class="column width-2"><img class="img-responsive" src="/assets/kargo.png" width="120" /></div><div class="column width-10"> Siz kutunuzun keyfini çıkarın. Kargonuzu satın alma ve iadelerde biz ödeyelim.

									</div> 
								</li>
								<br />
								<hr>
								<li>
									<div class="column width-2"><img class="img-responsive" src="/assets/uye.png" width="120" /></div><div class="column width-10"> Farkı fiyatlardaki stil dolu kutularımızdan istediğinizi seçerek hemen bir Packsioner olabilirsiniz.

									</div> 
								</li>
							</ul>
					    </div>
					</div>
				</div>

			</div>

@stop
