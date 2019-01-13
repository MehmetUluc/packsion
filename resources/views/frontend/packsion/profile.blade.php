@extends('frontend.layouts.app')

@section('content')

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
													Packsion
												</li>
											</ul>
											<div class="mini-profile bio">
												<div class="avatar">
													<span class="img">
														<img src="//packsion.com/resources/assets/images/product_images/1529360177.packsionbanner-10-min.png" alt=""/>
													</span>
													<h3 class="all-caps fw-700 color-white">Packsion</h3>

												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="column width-6">
									<div class="thumbnail video-thumbnail no-margin-bottom">
										<img src="//packsion.com/resources/assets/images/product_images/1529360177.packsionbanner-10-min.png" alt="" />
										<div class="caption-over-outer">
											<div class="caption-over-inner center color-white">
												<div class="row">
													<div class="column width-12">

                            @php $video = explode('v=', 'https://www.youtube.com/watch?v=UhMwi_8E4Ow'); @endphp
														<a href="https://www.youtube.com/embed/{{ end($video) }}?autoplay=1&amp;showinfo=0&amp;loop=1" data-caption="Packsion" class="lightbox-link icon-play bkg-hover-theme color-white color-hover-white xxxlarge"></a>
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

						</div>
					</div>
					<div class="row flex style-box">
						<img src="//packsion.com/resources/assets/images/product_images/1529360177.packsionbanner-10-min.png" alt="" />

					</div>
				</section>


			</div>


@stop
