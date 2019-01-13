<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
										<li class="past"><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/1"><span>1</span> Genel bilgi</a></li>
										<li class="active"><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/2"><span>2</span> Beden ölçüleri</a></li>
										<li><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/3"><span>3</span> Stil</a></li>
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
					    <?php echo $__env->make('frontend.quizzes.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
														<input id="expressingStyle-casual" class="form-element check" name="quiz[stil][]" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['stil']) &&  in_array('casual', session('exist_quiz')['stil'])): ?> checked <?php endif; ?>  value="casual" type="checkbox" />
														<label for="expressingStyle-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/casual.jpg" />

														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-smart-casual" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['stil']) &&  in_array('smart_casual', session('exist_quiz')['stil'])): ?> checked <?php endif; ?>  name="quiz[stil][]" value="smart_casual" type="checkbox" />
														<label for="expressingStyle-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/smart-casual.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-classic" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['stil']) &&  in_array('classic', session('exist_quiz')['stil'])): ?> checked <?php endif; ?>  name="quiz[stil][]" value="classic" type="checkbox" />
														<label for="expressingStyle-classic" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/expressing-style/classic.jpg" />

														</label>
														<p class="title">Classic</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="expressingStyle-fashion-forward" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['stil']) &&  in_array('fashion', session('exist_quiz')['stil'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[stil][]" value="fashion" type="checkbox" />
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
														<input id="preferStyle-toWork-casual" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['bussiness_stil']) &&  in_array('casual_1', session('exist_quiz')['bussiness_stil'])): ?> checked <?php endif; ?>  name="quiz[bussiness_stil][]" value="casual_1" type="checkbox" />
														<label for="preferStyle-toWork-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-work-style/casual.jpg" />

														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-toWork-smart-casual" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['bussiness_stil']) &&  in_array('smart_casual_1', session('exist_quiz')['bussiness_stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[bussiness_stil][]" value="smart_casual_1" type="checkbox" />
														<label for="preferStyle-toWork-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-work-style/smart-casual.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-toWork-business" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['bussiness_stil']) &&  in_array('bussiness', session('exist_quiz')['bussiness_stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[bussiness_stil][]" value="bussiness" type="checkbox" />
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
														<input id="expressingTshirt-basic" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('basic', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="basic" type="checkbox" />
														<label for="expressingTshirt-basic" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/basic.jpg" />
														</label>
														<p class="title">Basic</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-pattern" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('pattern', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="pattern" type="checkbox" />
														<label for="expressingTshirt-pattern" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/pattern.jpg" />
														</label>
														<p class="title">Pattern</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-hoodies" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('hoodies', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="hoodies" type="checkbox" />
														<label for="expressingTshirt-hoodies" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/hoodies.jpg" />
														</label>
														<p class="title">Hoodies</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-polo" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('polo', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="polo" type="checkbox" />
														<label for="expressingTshirt-polo" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/polo.jpg" />
														</label>
														<p class="title">Polo</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-printed" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('printed', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="printed" type="checkbox" />
														<label for="expressingTshirt-printed" class="checkbox-label">
															<img src="/assets/images/form/expressing-tshirt/printed.jpg" />
														</label>
														<p class="title">Printed</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="expressingTshirt-oversize" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['tshirt']) &&  in_array('oversize', session('exist_quiz')['tshirt'])): ?> checked <?php endif; ?> name="quiz[tshirt][]" value="oversize" type="checkbox" />
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
														<input id="prefer-shirt-regular" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['gomlek']) &&  in_array('regular', session('exist_quiz')['gomlek'])): ?> checked <?php endif; ?> name="quiz[gomlek][]" value="regular" type="checkbox" />
														<label for="prefer-shirt-regular" class="checkbox-label">
															<img src="/assets/images/form/prefer-shirt/regular.jpg" />
														</label>
														<p class="title">Regular</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-shirt-fit" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['gomlek']) &&  in_array('fit', session('exist_quiz')['gomlek'])): ?> checked <?php endif; ?> name="quiz[gomlek][]" value="fit" type="checkbox" />
														<label for="prefer-shirt-fit" class="checkbox-label">
															<img src="/assets/images/form/prefer-shirt/fit.jpg" />
														</label>
														<p class="title">Fit</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-shirt-slim-fit" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['gomlek']) &&  in_array('slim', session('exist_quiz')['gomlek'])): ?> checked <?php endif; ?> name="quiz[gomlek][]" value="slim" type="checkbox" />
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
														<input id="prefer-sweater-bogazli" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['kazak']) &&  in_array('ebogazli', session('exist_quiz')['kazak'])): ?> checked <?php endif; ?> name="quiz[kazak][]" value="ebogazli" type="checkbox" />
														<label for="prefer-sweater-bogazli" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-sweater/bogazli.jpg" />

														</label>
														<p class="title">Boğazlı</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-sweater-sifir-yaka" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['kazak']) &&  in_array('esifir', session('exist_quiz')['kazak'])): ?> checked <?php endif; ?> name="quiz[kazak][]" value="esifir" type="checkbox" />
														<label for="prefer-sweater-sifir-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-sweater/sifir-yaka.jpg" />

														</label>
														<p class="title">Sıfır Yaka</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-sweater-v-yaka" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['kazak']) &&  in_array('evyaka', session('exist_quiz')['kazak'])): ?> checked <?php endif; ?> name="quiz[kazak][]" value="evyaka" type="checkbox" />
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
														<input id="prefer-pants-regular" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['pantolon']) &&  in_array('regular', session('exist_quiz')['pantolon'])): ?> checked <?php endif; ?> name="quiz[pantolon][]" value="regular" type="checkbox" />
														<label for="prefer-pants-regular" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/regular.jpg" />

														</label>
														<p class="title">Regular</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-strech" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['pantolon']) &&  in_array('strech', session('exist_quiz')['pantolon'])): ?> checked <?php endif; ?> name="quiz[pantolon][]" value="strech" type="checkbox" />
														<label for="prefer-pants-strech" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/strech.jpg" />

														</label>
														<p class="title">Strech</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-straight" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['pantolon']) &&  in_array('straight', session('exist_quiz')['pantolon'])): ?> checked <?php endif; ?> name="quiz[pantolon][]" value="straight" type="checkbox" />
														<label for="prefer-pants-straight" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/prefer-pants/straight.jpg" />

														</label>
														<p class="title">Straight</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="prefer-pants-slim" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['pantolon']) &&  in_array('slim', session('exist_quiz')['pantolon'])): ?> checked <?php endif; ?> name="quiz[pantolon][]" value="slim" type="checkbox" />
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
														<input id="notprefer-color-1" class="form-element check" name="quiz[renk][]" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk1', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> value="renk1" type="checkbox" />
														<label for="notprefer-color-1" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-01.jpg" />
														</label>
														<p class="title">Siyah</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-2" class="form-element check" name="quiz[renk][]" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk2', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> value="renk2" type="checkbox" />
														<label for="notprefer-color-2" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-02.jpg" />
														</label>
														<p class="title">Koyu Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-3" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk3', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk3" type="checkbox" />
														<label for="notprefer-color-3" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-03.jpg" />
														</label>
														<p class="title">Orta Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-4" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk4', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk4" type="checkbox" />
														<label for="notprefer-color-4" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-04.jpg" />
														</label>
														<p class="title">Krem</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-5" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk5', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk5" type="checkbox" />
														<label for="notprefer-color-5" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-05.jpg" />
														</label>
														<p class="title">Asker Yeşili</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-6" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk6', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]6" value="renk6" type="checkbox" />
														<label for="notprefer-color-6" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-06.jpg" />
														</label>
														<p class="title">Yeşil</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-7" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk7', session('exist_quiz')['renk'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[renk][]" value="renk7" type="checkbox" />
														<label for="notprefer-color-7" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-07.jpg" />
														</label>
														<p class="title">Koyu Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-8" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk8', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk8" type="checkbox" />
														<label for="notprefer-color-8" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-08.jpg" />
														</label>
														<p class="title">Orta Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-9" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk9', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk9" type="checkbox" />
														<label for="notprefer-color-9" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-09.jpg" />
														</label>
														<p class="title">Açık Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-10" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk10', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk10" type="checkbox" />
														<label for="notprefer-color-10" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-10.jpg" />
														</label>
														<p class="title">Mor</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-11"  <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk11', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk11" type="checkbox" />
														<label for="notprefer-color-11" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-11.jpg" />
														</label>
														<p class="title">Kırmızı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-12"  <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk12', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk12" type="checkbox" />
														<label for="notprefer-color-12" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-12.jpg" />
														</label>
														<p class="title">Turuncu</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-13" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk13', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk13
														" type="checkbox" />
														<label for="notprefer-color-13" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-13.jpg" />
														</label>
														<p class="title">Sarı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-14" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['renk']) && in_array('renk14', session('exist_quiz')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk14" type="checkbox" />
														<label for="notprefer-color-14" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-14.jpg" />
														</label>
														<p class="title">Pembe</p>
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
														<input id="notprefer-pattern-1" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen1', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> name="quiz[desen][]" type="checkbox" value="desen1" />
														<label for="notprefer-pattern-1" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-01.jpg" />
														</label>
														<p class="title">Floral</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-2" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen2', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen2"/>
														<label for="notprefer-pattern-2" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-02.jpg" />
														</label>
														<p class="title">Pötikare</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-3" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen3', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen3" />
														<label for="notprefer-pattern-3" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-03.jpg" />
														</label>
														<p class="title">Ekose</p>
													</div>
												</div>
												
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-4" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen4', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen4"/>
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
														<input id="notprefer-pattern-5" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen5', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen5" />
														<label for="notprefer-pattern-5" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-05.jpg" />
														</label>
														<p class="title">Slogan</p>
													</div>
												</div>

											
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-6" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen6', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen6"/>
														<label for="notprefer-pattern-6" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-06.jpg" />
														</label>
														<p class="title">Baskılı</p>
													</div>
												</div>
												
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-8" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['desen']) && in_array('desen8', session('exist_quiz')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen8"/>
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
														<input id="prefer-brand-koton" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('koton', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="koton" type="checkbox" />
														<label for="prefer-brand-koton" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/koton.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-fabrika" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('fabrika', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="fabrika" type="checkbox" />
														<label for="prefer-brand-fabrika" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/fabrika.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-zara" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('zara', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="zara" type="checkbox" />
														<label for="prefer-brand-zara" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/zara.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-bershka" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('bershka', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="bershka" type="checkbox" />
														<label for="prefer-brand-bershka" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/bershka.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-jacknjones" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('jacknjones', session('exist_quiz')['brand'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[brand][]" value="jacknjones" type="checkbox" />
														<label for="prefer-brand-jacknjones" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/jacknjones.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-uspolo" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('uspolo', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="uspolo" type="checkbox" />
														<label for="prefer-brand-uspolo" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/uspolo.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-beymen" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('beymen', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="beymen" type="checkbox" />
														<label for="prefer-brand-beymen" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/beymen.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-network" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('network', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="network" type="checkbox" />
														<label for="prefer-brand-network" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/network.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-mavi" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('mavi', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="mavi" type="checkbox" />
														<label for="prefer-brand-mavi" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/mavi.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-hm" class="form-element check" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('hm', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> name="quiz[brand][]" value="hm" type="checkbox" />
														<label for="prefer-brand-hm" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/hm.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-banana-republic" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('republic', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="republic" type="checkbox" />
														<label for="prefer-brand-banana-republic" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/banana-republic.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-gap" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('gap', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="gap" type="checkbox" />
														<label for="prefer-brand-gap" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/gap.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-lacoste" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('lacoste', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="lacoste" type="checkbox" />
														<label for="prefer-brand-lacoste" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/lacoste.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-fredperry" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('fredperry', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="fredperry" type="checkbox" />
														<label for="prefer-brand-fredperry" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/fredperry.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-tommy" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('tommy', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="tommy" type="checkbox" />
														<label for="prefer-brand-tommy" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/tommy.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-nike" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('nike', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="ozel" type="checkbox" />
														<label for="prefer-brand-nike" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/nike.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-wepublic" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('wepublic', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="wepublic" type="checkbox" />
														<label for="prefer-brand-wepublic" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/wepublic.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-ozel" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['brand']) && in_array('ozel', session('exist_quiz')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="ozel" type="checkbox" />
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
									<a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/2" class="button thin border-black color-black">GERİ DÖN</a>
									<button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</button>
								</div>
							</div>
							</form
					    </div>
					</div>
				</div>


			</div>
