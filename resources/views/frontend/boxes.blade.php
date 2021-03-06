@extends('frontend.layouts.app')

@section('content')

<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="row">
								<div class="column width-6">
									<div class="title-container">
										<div class="title-container-inner">
											<h1 class="inline all-caps mb-0 fw-700">Kutular</h1>
											<ul class="breadcrumb all-caps">
												<li>
													<a href="/">Anasayfa</a>
												</li>
												<li>
													Kutular
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="column width-6">
									<div class="title-container">
										<div class="title-container-inner">
											<div class="grid-filter-menu1 right no-padding">
												<ul>
													<span class="color-white all-caps">Filtre</span>
													<li class="all"><a class="@if(!request()->segment(2)) active @endif" data-filter="*" href="/boxes" onclick="window.location">Tümü</a></li>
													<li class="woman"><a @if(request()->segment(2) == 'kadin') class="active woman" @endif href="/boxes/kadin" data-filter=".woman">Kadın</a></li>
													<li class="man"><a @if(request()->segment(2) == 'erkek') class="active woman" @endif href="/boxes/erkek" class="filter_man" data-filter=".man">Erkek</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block no-padding-top grid-container boxes fade-in-progressively show-media-column-on-mobile" data-layout-mode="masonry" data-grid-ratio=".5" data-animate-filter-duration="700" data-set-dimensions data-animate-resize data-animate-resize-duration="0">
					<div class="row">
					    <div class="width-3 right-sidebar">
					    	<div class="content">
						        <div class="title">
									Popüler Kutular
								</div>
							</div>
					    </div>
					    <div class="column width-9">
					    	<div class="row grid content-grid-12">
								<div class="grid-item grid-sizer man woman">
									<div class="mini-profile">
										<div class="avatar">
											<span class="img">
												<img src="/assets/images/influencer/dummy.png" alt=""/>
											</span>
											<h3 class="all-caps fw-400 special">Sana özel PACKSION Kutuları</h3>
											<a style="visibility: hidden;" href="/profile/packsion" class="button border-black border-hover-white color-black color-hover-white bkg-hover-theme all-caps">Detaylı gör</a>
										</div>
									</div>
									<div class="row flex style-box">
										@foreach($products as $product)
										<div class="column width-4">
											<div class="feature-column box-{{ $loop->iteration }}">
												<div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="700">
													<a class="overlay-link" href="/product/{{ $product->products_id }}?gender={{ request()->segment(2) }}">
														<img src="/assets/images/urun-list.png" alt=""/>
														<div class="overlay-info">
															<h2 class="fw-800">{{$product->products_name}}</h2>
															<h3>{{ (int)$product->products_price }} TRY / Ay</h3>
															<p><strong>{{ (int)$product->products_price }} ₺ değerinde kombin içermektedir.<br />Kargo ve stil danışmanlığı ücretsizdir.</strong></p>
															@if(Helper::countOfQuiz() > 0)
																<button class="button border-white border-hover-white color-white color-hover-white"><strong>{{ 'Sipariş Ver' }}</strong></button>
															@else
																<button class="button border-white border-hover-white color-white color-hover-white"><strong>{{ trans('page.Satın Al') }}</strong></button>
															@endif
														</div>
													</a>
												</div>
											</div>
										</div>
										@endforeach


									</div>
								</div>
							</div>


					    </div>
					</div>
				</div>

			</div>



@stop


@section('script')

<style type="text/css">
	.style-box .feature-column .thumbnail img {
    position: absolute;
    bottom: 0px;
    left: 0;
    right: 0;
    margin: 0px;
    margin-left: auto;
    max-width: 75%;
    margin-right: auto;
}

@media only screen and (max-width: 720px) {
	.style-box .feature-column .thumbnail {
	    float: left;
	    width: 100%;
	    height: 301px !important;
	    text-align: center;
	    color: #fff;
	}
}

h3.all-caps.fw-400.special {
    position: absolute;
    margin-top: 30px;
    margin-left: 114px;
}


</style>


@stop
