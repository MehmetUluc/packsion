@extends('frontend.layouts.app')


@section('content')

	@php
		$page = Helper::getPage(request()->segment(1));
	@endphp
	<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="row">
								<div class="column width-12">
									<div class="title-container">
										<div class="title-container-inner">
											<h1 class="inline all-caps mb-0 fw-700">{{ $page->name }}</h1>
											<ul class="breadcrumb all-caps">
												<li>
													<a href="/">Anasayfa</a>
												</li>
												<li>
													{{ $page->name }}
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
					    <div class="column width-12">
								@if($page->file)
					    		<div class="grid-item">
										<div class="thumbnail">
											<img src="//packsion.com/{{ $page->file }}" width="100%" alt=""/>
										</div>
									</div>
								@endif
							<h3 class="mb-30 all-caps fw-700">{{ $page->subname }}</h3>
							{!! $page->description !!}
					    </div>
					</div>
				</div>

			</div>



@stop
