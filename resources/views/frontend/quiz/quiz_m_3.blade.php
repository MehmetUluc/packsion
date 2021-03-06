<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
										<li class="past"><a href="/checkout/quiz/step/1"><span>1</span> Genel bilgi</a></li>
										<li class="active"><a href="/checkout/quiz/step/2"><span>2</span> Beden ölçüleri</a></li>
										<li><a href="/checkout/quiz/step/3"><span>3</span> Stil</a></li>
										<li><a href="javascript:;"><span>4</span> Tercihler</a></li>
										<li><a href="javascript:;"><span>5</span> Siparişi tamamla</a></li>
						            </ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block min-height-half">
					<div class="row">
					    @include('frontend.quiz.right')
					    <div class="column width-9">
					    	<!-- Step3: Stil -->
					    	<form id="quiz3" action="" method="post">
							<div class="form-group-container">
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Sizi ifade eden stil hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-casual" class="form-element check" name="quiz[stil][]" @if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) &&  in_array('casual', session('quiz_3')['stil'])) checked @endif  value="casual" type="checkbox" />
														<label for="expressingStyle-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/casual.jpg" />

														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-smart-casual" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) &&  in_array('smart_casual', session('quiz_3')['stil'])) checked @endif  name="quiz[stil][]" value="smart_casual" type="checkbox" />
														<label for="expressingStyle-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/smart-casual.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-classic" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) &&  in_array('classic', session('quiz_3')['stil'])) checked @endif  name="quiz[stil][]" value="classic" type="checkbox" />
														<label for="expressingStyle-classic" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/classic.jpg" />

														</label>
														<p class="title">Classic</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-fashion-forward" @if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) &&  in_array('fashion', session('quiz_3')['stil'])) checked @endif  class="form-element check" name="quiz[stil][]" value="fashion" type="checkbox" />
														<label for="expressingStyle-fashion-forward" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/fashion-forward.jpg" />

														</label>
														<p class="title">Fashion Forward</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">İşe giderken bu stillerden hangisini tercih edersiniz? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-toWork-casual" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) &&  in_array('casual_1', session('quiz_3')['bussiness_stil'])) checked @endif  name="quiz[bussiness_stil][]" value="casual_1" type="checkbox" />
														<label for="preferStyle-toWork-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-work-style/casual.jpg" />

														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-toWork-smart-casual" @if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) &&  in_array('smart_casual_1', session('quiz_3')['bussiness_stil'])) checked @endif class="form-element check" name="quiz[bussiness_stil][]" value="smart_casual_1" type="checkbox" />
														<label for="preferStyle-toWork-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-work-style/smart-casual.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-toWork-business" @if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) &&  in_array('bussiness', session('quiz_3')['bussiness_stil'])) checked @endif class="form-element check" name="quiz[bussiness_stil][]" value="bussiness" type="checkbox" />
														<label for="preferStyle-toWork-business" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/classic.jpg" />

														</label>
														<p class="title">Business</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Sizi ifade eden t-shirt hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-basic" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('basic', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="basic" type="checkbox" />
														<label for="expressingTshirt-basic" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/basic.jpg" />
														</label>
														<p class="title">Basic</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-pattern" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('pattern', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="pattern" type="checkbox" />
														<label for="expressingTshirt-pattern" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/pattern.jpg" />
														</label>
														<p class="title">Pattern</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-hoodies" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('hoodies', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="hoodies" type="checkbox" />
														<label for="expressingTshirt-hoodies" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/hoodies.jpg" />
														</label>
														<p class="title">Hoodies</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-polo" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('polo', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="polo" type="checkbox" />
														<label for="expressingTshirt-polo" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/polo.jpg" />
														</label>
														<p class="title">Polo</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-printed" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('printed', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="printed" type="checkbox" />
														<label for="expressingTshirt-printed" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/printed.jpg" />
														</label>
														<p class="title">Printed</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-oversize" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) &&  in_array('oversize', session('quiz_3')['tshirt'])) checked @endif name="quiz[tshirt][]" value="oversize" type="checkbox" />
														<label for="expressingTshirt-oversize" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/oversize.jpg" />
														</label>
														<p class="title">Oversize</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih ettiğiniz gömlek kalıbı hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-shirt-regular" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['gomlek']) &&  in_array('regular', session('quiz_3')['gomlek'])) checked @endif name="quiz[gomlek][]" value="regular" type="checkbox" />
														<label for="prefer-shirt-regular" class="checkbox-label">
															<img src="/assets/images/form/prefer-shirt/regular.jpg" />
														</label>
														<p class="title">Regular</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-shirt-fit" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['gomlek']) &&  in_array('fit', session('quiz_3')['gomlek'])) checked @endif name="quiz[gomlek][]" value="fit" type="checkbox" />
														<label for="prefer-shirt-fit" class="checkbox-label">
															<img src="/assets/images/form/prefer-shirt/fit.jpg" />
														</label>
														<p class="title">Fit</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-shirt-slim-fit" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['gomlek']) &&  in_array('slim', session('quiz_3')['gomlek'])) checked @endif name="quiz[gomlek][]" value="slim" type="checkbox" />
														<label for="prefer-shirt-slim-fit" class="checkbox-label">
															<img src="/assets/images/form/prefer-shirt/slim-fit.jpg" />
														</label>
														<p class="title">Slim Fit</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih ettiğiniz kazak kalıbı hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-sweater-bogazli" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) &&  in_array('ebogazli', session('quiz_3')['kazak'])) checked @endif name="quiz[kazak][]" value="ebogazli" type="checkbox" />
														<label for="prefer-sweater-bogazli" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-sweater/bogazli.jpg" />

														</label>
														<p class="title">Boğazlı</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-sweater-sifir-yaka" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) &&  in_array('esifir', session('quiz_3')['kazak'])) checked @endif name="quiz[kazak][]" value="esifir" type="checkbox" />
														<label for="prefer-sweater-sifir-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-sweater/sifir-yaka.jpg" />

														</label>
														<p class="title">Sıfır Yaka</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-sweater-v-yaka" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) &&  in_array('evyaka', session('quiz_3')['kazak'])) checked @endif name="quiz[kazak][]" value="evyaka" type="checkbox" />
														<label for="prefer-sweater-v-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-sweater/v-yaka.jpg" />

														</label>
														<p class="title">V Yaka</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih ettiğiniz pantolon kalıbı hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-regular" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['pantolon']) &&  in_array('regular', session('quiz_3')['pantolon'])) checked @endif name="quiz[pantolon][]" value="regular" type="checkbox" />
														<label for="prefer-pants-regular" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/regular.jpg" />

														</label>
														<p class="title">Regular</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-strech" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['pantolon']) &&  in_array('strech', session('quiz_3')['pantolon'])) checked @endif name="quiz[pantolon][]" value="strech" type="checkbox" />
														<label for="prefer-pants-strech" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/strech.jpg" />

														</label>
														<p class="title">Strech</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-straight" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['pantolon']) &&  in_array('straight', session('quiz_3')['pantolon'])) checked @endif name="quiz[pantolon][]" value="straight" type="checkbox" />
														<label for="prefer-pants-straight" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/straight.jpg" />

														</label>
														<p class="title">Straight</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-slim" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['pantolon']) &&  in_array('slim', session('quiz_3')['pantolon'])) checked @endif name="quiz[pantolon][]" value="slim" type="checkbox" />
														<label for="prefer-pants-slim" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/slim.jpg" />

														</label>
														<p class="title">Slim</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih etmeyeceğiniz renkler hangileridir? <span class="info-title">(Hiçbirini, birini veya birçoğunu seçin.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-1" class="form-element check" name="quiz[renk][]" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk1', session('quiz_3')['renk'])) checked @endif value="renk1" type="checkbox" />
														<label for="notprefer-color-1" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-01.jpg" />
														</label>
														<p class="title">Siyah</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-2" class="form-element check" name="quiz[renk][]" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk2', session('quiz_3')['renk'])) checked @endif value="renk2" type="checkbox" />
														<label for="notprefer-color-2" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-02.jpg" />
														</label>
														<p class="title">Koyu Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-3" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk3', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk3" type="checkbox" />
														<label for="notprefer-color-3" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-03.jpg" />
														</label>
														<p class="title">Orta Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-4" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk4', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk4" type="checkbox" />
														<label for="notprefer-color-4" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-04.jpg" />
														</label>
														<p class="title">Krem</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-5" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk5', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk5" type="checkbox" />
														<label for="notprefer-color-5" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-05.jpg" />
														</label>
														<p class="title">Asker Yeşili</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-6" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk6', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]6" value="renk6" type="checkbox" />
														<label for="notprefer-color-6" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-06.jpg" />
														</label>
														<p class="title">Yeşil</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-7" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk7', session('quiz_3')['renk'])) checked @endif  class="form-element check" name="quiz[renk][]" value="renk7" type="checkbox" />
														<label for="notprefer-color-7" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-07.jpg" />
														</label>
														<p class="title">Koyu Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-8" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk8', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk8" type="checkbox" />
														<label for="notprefer-color-8" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-08.jpg" />
														</label>
														<p class="title">Orta Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-9" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk9', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk9" type="checkbox" />
														<label for="notprefer-color-9" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-09.jpg" />
														</label>
														<p class="title">Açık Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-10" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk10', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk10" type="checkbox" />
														<label for="notprefer-color-10" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-10.jpg" />
														</label>
														<p class="title">Mor</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-11"  @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk11', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk11" type="checkbox" />
														<label for="notprefer-color-11" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/kirmizi.png" />
														</label>
														<p class="title">Kırmızı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-12"  @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk12', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk12" type="checkbox" />
														<label for="notprefer-color-12" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-12.jpg" />
														</label>
														<p class="title">Turuncu</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-13" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk13', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk13
														" type="checkbox" />
														<label for="notprefer-color-13" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-13.jpg" />
														</label>
														<p class="title">Sarı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-14" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk14', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk14" type="checkbox" />
														<label for="notprefer-color-14" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-14.jpg" />
														</label>
														<p class="title">Pembe</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-15" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk15', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk15" type="checkbox" />
														<label for="notprefer-color-15" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/altin.png" />
														</label>
														<p class="title">Altın</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-16" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk16', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk16" type="checkbox" />
														<label for="notprefer-color-16" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/gumus.png" />
														</label>
														<p class="title">Gümüş</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-17" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk17', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk17" type="checkbox" />
														<label for="notprefer-color-17" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/gri.png" />
														</label>
														<p class="title">Gri</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-18" @if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk18', session('quiz_3')['renk'])) checked @endif class="form-element check" name="quiz[renk][]" value="renk18" type="checkbox" />
														<label for="notprefer-color-18" class="checkbox-label">
															<img style="visibility: hidden;" src="/assets/images/form/notprefer-color/gri.png" />
														</label>
														<p class="title">Beyaz</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih etmeyeceğiniz desenler hangileridir? <span class="info-title">(Hiçbirini, birini veya birçoğunu seçin.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-1" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen1', session('quiz_3')['desen'])) checked @endif name="quiz[desen][]" type="checkbox" value="desen1" />
														<label for="notprefer-pattern-1" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-01.jpg" />
														</label>
														<p class="title">Floral</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-2" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen2', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen2"/>
														<label for="notprefer-pattern-2" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-02.jpg" />
														</label>
														<p class="title">Pötikare</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-3" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen3', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen3" />
														<label for="notprefer-pattern-3" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-03.jpg" />
														</label>
														<p class="title">Ekose</p>
													</div>
												</div>
												
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-4" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen4', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen4"/>
														<label for="notprefer-pattern-4" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-04.jpg" />
														</label>
														<p class="title">Çizgili</p>
													</div>
												</div>
											</div>
												<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-5" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen5', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen5" />
														<label for="notprefer-pattern-5" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-05.jpg" />
														</label>
														<p class="title">Slogan</p>
													</div>
												</div>

											
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-6" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen6', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen6"/>
														<label for="notprefer-pattern-6" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-06.jpg" />
														</label>
														<p class="title">Baskılı</p>
													</div>
												</div>
												
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-8" @if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen8', session('quiz_3')['desen'])) checked @endif class="form-element check" name="quiz[desen][]" type="checkbox" value="desen8"/>
														<label for="notprefer-pattern-8" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-08.jpg" />
														</label>
														<p class="title">Kamuflaj</p>
													</div>
												</div>


											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20 brand-box">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih ettiğiniz markalar hangileridir? <span class="info-title">(Hiçbirini, birini veya birçoğunu seçin.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-koton" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('koton', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="koton" type="checkbox" />
														<label for="prefer-brand-koton" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/koton.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-fabrika" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('fabrika', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="fabrika" type="checkbox" />
														<label for="prefer-brand-fabrika" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/fabrika.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-zara" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('zara', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="zara" type="checkbox" />
														<label for="prefer-brand-zara" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/zara.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-bershka" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('bershka', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="bershka" type="checkbox" />
														<label for="prefer-brand-bershka" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/bershka.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-jacknjones" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('jacknjones', session('quiz_3')['brand'])) checked @endif  class="form-element check" name="quiz[brand][]" value="jacknjones" type="checkbox" />
														<label for="prefer-brand-jacknjones" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/jacknjones.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-uspolo" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('uspolo', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="uspolo" type="checkbox" />
														<label for="prefer-brand-uspolo" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/uspolo.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-beymen" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('beymen', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="beymen" type="checkbox" />
														<label for="prefer-brand-beymen" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/beymen.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-network" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('network', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="network" type="checkbox" />
														<label for="prefer-brand-network" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/network.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-mavi" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('mavi', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="mavi" type="checkbox" />
														<label for="prefer-brand-mavi" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/mavi.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-hm" class="form-element check" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('hm', session('quiz_3')['brand'])) checked @endif name="quiz[brand][]" value="hm" type="checkbox" />
														<label for="prefer-brand-hm" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/hm.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-banana-republic" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('republic', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="republic" type="checkbox" />
														<label for="prefer-brand-banana-republic" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/banana-republic.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-gap" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('gap', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="gap" type="checkbox" />
														<label for="prefer-brand-gap" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/gap.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-lacoste" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('lacoste', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="lacoste" type="checkbox" />
														<label for="prefer-brand-lacoste" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/lacoste.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-fredperry" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('fredperry', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="fredperry" type="checkbox" />
														<label for="prefer-brand-fredperry" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/fredperry.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-tommy" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('tommy', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="tommy" type="checkbox" />
														<label for="prefer-brand-tommy" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/tommy.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-nike" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('nike', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="ozel" type="checkbox" />
														<label for="prefer-brand-nike" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/nike.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-wepublic" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('wepublic', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="wepublic" type="checkbox" />
														<label for="prefer-brand-wepublic" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/wepublic.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-ozel" @if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('ozel', session('quiz_3')['brand'])) checked @endif class="form-element check" name="quiz[brand][]" value="ozel" type="checkbox" />
														<label for="prefer-brand-ozel" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/ozel.jpg" />
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-footer right">
									<a href="/checkout/quiz/step/2" class="button thin border-black color-black">GERİ DÖN</a>
									<button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</button>
								</div>
							</div>
							</form
					    </div>
					</div>
				</div>


			</div>
