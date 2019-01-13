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
													{{ $influencer->name }}
												</li>
											</ul>
											<div class="mini-profile bio">
												<div class="avatar">
													<span class="img">
														<img src="//packsion.com/{{ $influencer->photo }}" alt=""/>
													</span>
													<h3 class="all-caps fw-700 color-white">{{ $influencer->name }}</h3>
													<p class="color-white">{{ $influencer->bio }}</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="column width-6">
									<div class="thumbnail video-thumbnail no-margin-bottom">
										<img src="//packsion.com/{{ $influencer->video_kapak }}" alt="" />
										<div class="caption-over-outer">
											<div class="caption-over-inner center color-white">
												<div class="row">
													<div class="column width-12">
														@php $video = explode('v=', $influencer->video); @endphp
														<a href="https://www.youtube.com/embed/{{ end($video) }}?autoplay=1&amp;showinfo=0&amp;loop=1" data-caption="{{ $influencer->name }}" class="lightbox-link icon-play bkg-hover-theme color-white color-hover-white xxxlarge"></a>
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
							<h3>STYLE BOXES BY <span>{{ $influencer->name }}</span></h3>
						</div>
					</div>
					<div class="row flex style-box">
						@foreach($products as $product)
						<div class="column width-4">
							<div class="feature-column box-{{ $loop->iteration }}">
								<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700">
									<a class="overlay-link" href="/influencer/product/{{ $product->products_id }}">
										<img src="/assets/images/packsion-box.png" alt=""/>
										<div class="overlay-info">
											<h2 class="fw-800">{{$product->products_name}}</h2>
											<h3>{{ (int)$product->products_price }} TRY / Ay</h3>
											<p><strong>Includes 5 Top, 3 Bottom, 1 Jacket <br /> every month.</strong></p>
											<button class="button border-white border-hover-white color-white color-hover-white"><strong>{{ trans('page.Satın Al') }}</strong></button>
										</div>
									</a>
								</div>
							</div>
						</div>
						@endforeach

					</div>
				</section>


			</div>


@stop
