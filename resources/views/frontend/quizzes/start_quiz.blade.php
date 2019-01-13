@extends('frontend.layouts.app')

@section('content')


				<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
						                <li class="active"><a href="#"><span>1</span> Genel bilgi</a></li>
						                <li><a href="#"><span>2</span> Beden ölçüleri</a></li>
						                <li><a href="#"><span>3</span> Stil</a></li>
						                <li><a href="#"><span>4</span> Tercihler</a></li>
						                <li><a href="#"><span>5</span> Siparişi tamamla</a></li>
						            </ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block min-height-half">
					<div class="row">
					    <div class="width-3 right-sidebar">
					    	<div class="content">
						        <div class="title">
									Sipariş Özeti
								</div>
								<div class="style-box">
									<div class="package-info box-2">
										<div class="text">
											@php
												$prod_id = request('product') ?? session('product_id');
											@endphp
											<h3 class="fw-800">{{ Helper::getProductName($prod_id) }}</h3>
											<h4 style="visibility:hidden">by <span class="all-caps">Umut Eker</span></h4>
										</div>
										<h4 class="price">{{ number_format(Helper::getProductPrice($prod_id), 0) }} TRY</h4>
									</div>
								</div>
							</div>
					    </div>
					    <div class="column width-9">
							<div class="form-group-container">
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Cinsiyet seçimi</h5>
									</div>
									<div class="rows">
										<div class="gender-select">
											<a href="/checkout/quiz/step/1?product_id={{ request('product') }}&gender=woman&cache=flush" class="button thin border-black color-black large">K</a>
											<a href="/checkout/quiz/step/1?product_id={{ request('product') }}&gender=man&cache=flush" class="button thin border-black color-black large">E</a>
										</div>
									</div>
								</div>
							</div>
					    </div>
					</div>
				</div>

			</div>


@endsection
