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
					    <?php echo $__env->make('frontend.quiz.right', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingStyle-casual" class="form-element check"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) &&  in_array('casual', session('quiz_3')['stil'])): ?> checked <?php endif; ?>  name="quiz[stil][]" value="casual" type="checkbox" />
														<label for="expressingStyle-casual" class="checkbox-label tooltip-image">
                              <img src="/assets/images/form/woman/casual.jpg" />
														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingStyle-smart-casual" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) && in_array('smart_casual', session('quiz_3')['stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[stil][]" value="smart_casual" type="checkbox" />
														<label for="expressingStyle-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/smart_casual.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingStyle-classic" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) && in_array('classic', session('quiz_3')['stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[stil][]" value="classic" type="checkbox" />
														<label for="expressingStyle-classic" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/classic.jpg" />

														</label>
														<p class="title">Classic</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingStyle-freppy" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) && in_array('freppy', session('quiz_3')['stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[stil][]" value="fashion_forward" type="checkbox" />
														<label for="expressingStyle-freppy" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/fashion_forward.jpg" />

														</label>
														<p class="title">Fashion Forward</p>
													</div>
												</div>

                        <div class="column width-4">
													<div class="hide-check">
														<input id="expressingStyle-fashion-forward" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['stil']) && in_array('fashion', session('quiz_3')['stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[stil][]" value="street_style" type="checkbox" />
														<label for="expressingStyle-fashion-forward" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/street_style.jpg" />

														</label>
														<p class="title">Street Style</p>
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
												<div class="column width-4">
													<div class="hide-check">
														<input id="preferStyle-toWork-casual" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) && in_array('casual_1', session('quiz_3')['bussiness_stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[bussiness_stil][]" value="casual_1" type="checkbox" />
														<label for="preferStyle-toWork-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/casual_1.jpg" />

														</label>
														<p class="title">Casual</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="preferStyle-toWork-smart-casual" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) &&  in_array('smart_casual_1', session('quiz_3')['bussiness_stil'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[bussiness_stil][]" value="smart_casual_1" type="checkbox" />
														<label for="preferStyle-toWork-smart-casual" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/smart_casual_1.jpg" />

														</label>
														<p class="title">Smart Casual</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="preferStyle-toWork-business" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['bussiness_stil']) &&  in_array('classic', session('quiz_3')['bussiness_stil'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[bussiness_stil][]" value="classic_1" type="checkbox" />
														<label for="preferStyle-toWork-business" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/classic_1.jpg" />

														</label>
														<p class="title">Classic</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

                <div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Kendinizi hangi renk grubu içinde görüyorsunuz? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-group_1"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk_group1']) && in_array('renk_group1', session('quiz_3')['renk_group'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk_group][]" value="renk_group1" type="checkbox" />
														<label for="preferStyle-group_1" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/w14.jpg" />

														</label>
														<p class="title">Mavi, Soğuk tonları</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-group_2" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk_group1']) && in_array('renk_group2', session('quiz_3')['renk_group'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk_group][]" value="renk_group2" type="checkbox" />
														<label for="preferStyle-group_2" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/w15.jpg" />

														</label>
														<p class="title">Renkli, Dinamik, Canlı</p>
													</div>
												</div>
												<div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-group_3" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk_group1']) && in_array('renk_group3', session('quiz_3')['renk_group'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk_group][]" value="renk_group3" type="checkbox" />
														<label for="preferStyle-group_3" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/w16.jpg" />

														</label>
														<p class="title">Siyah, Beyaz, Gri</p>
													</div>
												</div>
                        <div class="column width-3">
													<div class="hide-check">
														<input id="preferStyle-group_4"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk_group1']) && in_array('renk_group4', session('quiz_3')['renk_group'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk_group][]" value="renk_group4" type="checkbox" />
														<label for="preferStyle-group_4" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/w17.jpg" />

														</label>
														<p class="title">Pastel, Toprak Tonları</p>
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
														<input id="notprefer-pattern-1" class="form-element check" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen1', session('quiz_3')['desen'])): ?> checked <?php endif; ?> name="quiz[desen][]" type="checkbox" value="desen1" />
														<label for="notprefer-pattern-1" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-01.jpg" />
														</label>
														<p class="title">Floral</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-2" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen2', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen2"/>
														<label for="notprefer-pattern-2" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-02.jpg" />
														</label>
														<p class="title">Pötikare</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-3" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen3', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen3" />
														<label for="notprefer-pattern-3" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-03.jpg" />
														</label>
														<p class="title">Ekose</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-4" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen4', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen4"/>
														<label for="notprefer-pattern-4" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-04.jpg" />
														</label>
														<p class="title">Çizgili</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-5" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen5', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen5" />
														<label for="notprefer-pattern-5" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-05.jpg" />
														</label>
														<p class="title">Slogan</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-6" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen6', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen6"/>
														<label for="notprefer-pattern-6" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-06.jpg" />
														</label>
														<p class="title">Baskılı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-7" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen7', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen7"/>
														<label for="notprefer-pattern-7" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-07.jpg" />
														</label>
														<p class="title">Payet</p>
													</div>
												</div>
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-8" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen8', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen8"/>
														<label for="notprefer-pattern-8" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-08.jpg" />
														</label>
														<p class="title">Kamuflaj</p>
													</div>
												</div>
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-9" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen9', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen9"/>
														<label for="notprefer-pattern-9" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-09.jpg" />
														</label>
														<p class="title">Dantel</p>
													</div>
												</div>
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-10" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen10', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen10"/>
														<label for="notprefer-pattern-10" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-10.jpg" />
														</label>
														<p class="title">Leopar</p>
													</div>
												</div>
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-12" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen12', session('quiz_3')['desen'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[desen][]" type="checkbox" value="desen12"/>
														<label for="notprefer-pattern-12" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-11.jpg" />
														</label>
														<p class="title">İnci</p>
													</div>
												</div>
                        <div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-pattern-13" class="form-element check" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['desen']) && in_array('desen13', session('quiz_3')['desen'])): ?> checked <?php endif; ?> name="quiz[desen][]" type="checkbox" value="desen13"/>
														<label for="notprefer-pattern-13" class="checkbox-label">
															<img src="/assets/images/form/woman/kadin_desen-12.jpg" />
														</label>
														<p class="title">Tüy</p>
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
														<input id="notprefer-color-1" class="form-element check" name="quiz[renk][]" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk1', session('quiz_3')['renk'])): ?> checked <?php endif; ?> value="renk1" type="checkbox" />
														<label for="notprefer-color-1" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-01.jpg" />
														</label>
														<p class="title">Siyah</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-2" class="form-element check" name="quiz[renk][]" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk2', session('quiz_3')['renk'])): ?> checked <?php endif; ?> value="renk2" type="checkbox" />
														<label for="notprefer-color-2" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-02.jpg" />
														</label>
														<p class="title">Koyu Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-3" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk3', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk3" type="checkbox" />
														<label for="notprefer-color-3" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-03.jpg" />
														</label>
														<p class="title">Orta Kahve</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-4" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk4', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk4" type="checkbox" />
														<label for="notprefer-color-4" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-04.jpg" />
														</label>
														<p class="title">Krem</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-5" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk5', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk5" type="checkbox" />
														<label for="notprefer-color-5" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-05.jpg" />
														</label>
														<p class="title">Asker Yeşili</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-6" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk6', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]6" value="renk6" type="checkbox" />
														<label for="notprefer-color-6" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-06.jpg" />
														</label>
														<p class="title">Yeşil</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-7" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk7', session('quiz_3')['renk'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[renk][]" value="renk7" type="checkbox" />
														<label for="notprefer-color-7" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-07.jpg" />
														</label>
														<p class="title">Koyu Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-8" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk8', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk8" type="checkbox" />
														<label for="notprefer-color-8" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-08.jpg" />
														</label>
														<p class="title">Orta Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-9" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk9', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk9" type="checkbox" />
														<label for="notprefer-color-9" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-09.jpg" />
														</label>
														<p class="title">Açık Mavi</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-10" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk10', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk10" type="checkbox" />
														<label for="notprefer-color-10" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-10.jpg" />
														</label>
														<p class="title">Mor</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-11"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk11', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk11" type="checkbox" />
														<label for="notprefer-color-11" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/kirmizi.png" />
														</label>
														<p class="title">Kırmızı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-12"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk12', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk12" type="checkbox" />
														<label for="notprefer-color-12" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-12.jpg" />
														</label>
														<p class="title">Turuncu</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-13" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk13', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk13
														" type="checkbox" />
														<label for="notprefer-color-13" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-13.jpg" />
														</label>
														<p class="title">Sarı</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-14" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk14', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk14" type="checkbox" />
														<label for="notprefer-color-14" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/pantonecolors-14.jpg" />
														</label>
														<p class="title">Pembe</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-15" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk15', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk15" type="checkbox" />
														<label for="notprefer-color-15" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/altin.png" />
														</label>
														<p class="title">Altın</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-16" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk16', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk16" type="checkbox" />
														<label for="notprefer-color-16" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/gumus.png" />
														</label>
														<p class="title">Gümüş</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-17" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk17', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk17" type="checkbox" />
														<label for="notprefer-color-17" class="checkbox-label">
															<img src="/assets/images/form/notprefer-color/gri.png" />
														</label>
														<p class="title">Gri</p>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="notprefer-color-18" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['renk']) && in_array('renk18', session('quiz_3')['renk'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[renk][]" value="renk18" type="checkbox" />
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
										<h5 class="all-caps fw-700">Sizi ifade eden t-shirt hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingTshirt-basic" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) && in_array('croptop', session('quiz_3')['tshirt'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[tshirt][]" value="croptop" type="checkbox" />
														<label for="expressingTshirt-basic" class="checkbox-label">
															<img src="/assets/images/form/woman/shirt/croptop.jpg" />
														</label>
														<p class="title">Croptop</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingTshirt-pattern" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) && in_array('oversize', session('quiz_3')['tshirt'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[tshirt][]" value="oversize" type="checkbox" />
														<label for="expressingTshirt-pattern" class="checkbox-label">
															<img src="/assets/images/form/woman/shirt/oversize.jpg" />
														</label>
														<p class="title">Oversize</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="expressingTshirt-hoodies" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['tshirt']) && in_array('straight', session('quiz_3')['tshirt'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[tshirt][]" value="straight" type="checkbox" />
														<label for="expressingTshirt-hoodies" class="checkbox-label">
															<img src="/assets/images/form/woman/shirt/straight.jpg" />
														</label>
														<p class="title">Straight</p>
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
                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-regular" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['pantolon']) && in_array('clutte', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[pantolon][]" value="clutte" type="checkbox" />
                            <label for="prefer-pants-regular" class="checkbox-label tooltip-image">
                              <img src="/assets/images/form/woman/clutte.jpg" />

                            </label>
                            <p class="title">Culotte</p>
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-strech" <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['pantolon']) && in_array('wideleg', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[pantolon][]" value="wideleg" type="checkbox" />
                            <label for="prefer-pants-strech" class="checkbox-label tooltip-image">
                              <img src="/assets/images/form/woman/wideleg.jpg" />

                            </label>
                            <p class="title">Wideleg</p>
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-straight" <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['pantolon']) && in_array('carrotleg', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[pantolon][]" value="carrotleg" type="checkbox" />
                            <label for="prefer-pants-straight" class="checkbox-label tooltip-image">
                              <img src="/assets/images/form/woman/carrotleg.jpg" />

                            </label>
                            <p class="title">Carrot Leg</p>
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-slim"  <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['pantolon']) && in_array('straight', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[pantolon][]" value="straight" type="checkbox" />
                            <label for="prefer-pants-slim" class="checkbox-label tooltip-image">
                                <img src="/assets/images/form/woman/straight.jpg" />
                            </label>
                            <p class="title">Straight</p>
                          </div>
                        </div>

                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-skinny" <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['pantolon']) && in_array('skinny', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[pantolon][]" value="skinny" type="checkbox" />
                            <label for="prefer-pants-skinny" class="checkbox-label tooltip-image">
                                <img src="/assets/images/form/woman/skinny.jpg" />
                            </label>
                            <p class="title">Skinny</p>
                          </div>
                        </div>
                        <div class="column width-4">
                          <div class="hide-check">
                            <input id="prefer-pants-tayt" <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['pantolon']) && in_array('tayt', session('quiz_3')['pantolon'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[pantolon][]" value="tayt" type="checkbox" />
                            <label for="prefer-pants-tayt" class="checkbox-label tooltip-image">
                                <img src="/assets/images/form/woman/tayt.jpg" />
                            </label>
                            <p class="title">Tayt</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Tercih ettiğiniz etek kalıbı hangisidir? <span class="info-title">(Bir ya da birden fazla seçim yapabilirsiniz.)</span></h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-skirt-1" class="form-element check" <?php if(session()->has('quiz_3')  && isset(session('quiz_3')['etek']) && in_array('mini', session('quiz_3')['etek'])): ?> checked <?php endif; ?> name="quiz[etek][]" value="mini" type="checkbox" />
														<label for="prefer-skirt-1" class="checkbox-label">

															<img src="/assets/images/form/woman/mini.jpg" />
														</label>
														<p class="title">Mini</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-skirt-2" class="form-element check" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['etek']) && in_array('midi', session('quiz_3')['etek'])): ?> checked <?php endif; ?> name="quiz[etek][]" value="midi" type="checkbox" />
														<label for="prefer-skirt-2" class="checkbox-label">
														<img src="/assets/images/form/woman/midi.jpg" />
														</label>
														<p class="title">Midi</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-skirt-3" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['etek']) && in_array('flared', session('quiz_3')['etek'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[etek][]" value="flared" type="checkbox" />
														<label for="prefer-skirt-3" class="checkbox-label">
														<img src="/assets/images/form/woman/flared.jpg" />
														</label>
														<p class="title">Flared</p>
													</div>
												</div>
                        <div class="column width-4">
													<div class="hide-check">
														<input id="prefer-skirt-4" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['etek']) && in_array('pencil', session('quiz_3')['etek'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[etek][]" value="pencil" type="checkbox" />
														<label for="prefer-skirt-4" class="checkbox-label">
															<img src="/assets/images/form/woman/pencil.jpg" />
														</label>
														<p class="title">Pencil</p>
													</div>
												</div>
                        <div class="column width-4">
													<div class="hide-check">
														<input id="prefer-skirt-5" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['etek']) && in_array('maxi', session('quiz_3')['etek'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[etek][]" value="maxi" type="checkbox" />
														<label for="prefer-skirt-5" class="checkbox-label">
															<img src="/assets/images/form/woman/maxi.jpg" />
														</label>
														<p class="title">Maxi</p>
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
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-sweater-bogazli" class="form-element check" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) && in_array('balikci_yaka', session('quiz_3')['kazak'])): ?> checked <?php endif; ?> name="quiz[kazak][]" value="balikci_yaka" type="checkbox" />
														<label for="prefer-sweater-bogazli" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/kazak/balikci_yaka.jpg" />

														</label>
														<p class="title">Balıkçı Yaka</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-sweater-sifir-yaka" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) && in_array('oversized', session('quiz_3')['kazak'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[kazak][]" value="oversized" type="checkbox" />
														<label for="prefer-sweater-sifir-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/kazak/oversized.jpg" />

														</label>
														<p class="title">Oversized</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-sweater-v-yaka"  <?php if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) && in_array('croptop', session('quiz_3')['kazak'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[kazak][]" value="croptop" type="checkbox" />
														<label for="prefer-sweater-v-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/kazak/croptop.jpg" />

														</label>
														<p class="title">Croptop</p>
													</div>
												</div>
                       							 <div class="column width-4">
													<div class="hide-check">
														<input id="prefer-sweater-hirka" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) && in_array('hirka', session('quiz_3')['kazak'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[kazak][]" value="hirka" type="checkbox" />
														<label for="prefer-sweater-hirka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/kazak/hirka.jpg" />

														</label>
														<p class="title">Hırka</p>
													</div>
												</div>
												<div class="column width-4">
													<div class="hide-check">
														<input id="prefer-sweater-y-yaka" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['kazak']) && in_array('yuvarlakyaka', session('quiz_3')['kazak'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[kazak][]" value="yuvarlakyaka" type="checkbox" />
														<label for="prefer-sweater-y-yaka" class="checkbox-label tooltip-image">
															<img src="/assets/images/form/woman/kazak/yuvarlakyaka.jpg" />

														</label>
														<p class="title">Yuvarlak Yaka</p>
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
														<input id="prefer-brand-koton" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('koton', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="koton" type="checkbox" />
														<label for="prefer-brand-koton" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/koton.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-fabrika" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('fabrika', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="fabrika" type="checkbox" />
														<label for="prefer-brand-fabrika" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/fabrika.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-zara" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('zara', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="zara" type="checkbox" />
														<label for="prefer-brand-zara" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/zara.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-bershka" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('bershka', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="bershka" type="checkbox" />
														<label for="prefer-brand-bershka" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/bershka.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-jacknjones" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('jacknjones', session('quiz_3')['brand'])): ?> checked <?php endif; ?>  class="form-element check" name="quiz[brand][]" value="jacknjones" type="checkbox" />
														<label for="prefer-brand-jacknjones" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/jacknjones.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-uspolo" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('uspolo', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="uspolo" type="checkbox" />
														<label for="prefer-brand-uspolo" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/uspolo.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-beymen" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('beymen', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="beymen" type="checkbox" />
														<label for="prefer-brand-beymen" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/beymen.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-network" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('network', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="network" type="checkbox" />
														<label for="prefer-brand-network" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/network.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-mavi" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('mavi', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="mavi" type="checkbox" />
														<label for="prefer-brand-mavi" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/mavi.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-hm" class="form-element check" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('hm', session('quiz_3')['brand'])): ?> checked <?php endif; ?> name="quiz[brand][]" value="hm" type="checkbox" />
														<label for="prefer-brand-hm" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/hm.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-banana-republic" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('republic', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="republic" type="checkbox" />
														<label for="prefer-brand-banana-republic" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/banana-republic.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-gap" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('gap', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="gap" type="checkbox" />
														<label for="prefer-brand-gap" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/gap.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-yargici" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('yargici', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="yargici" type="checkbox" />
														<label for="prefer-brand-yargici" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/yargici.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-tommy" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('tommy', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="tommy" type="checkbox" />
														<label for="prefer-brand-tommy" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/tommy.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-stefanel" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('stefanel', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="stefanel" type="checkbox" />
														<label for="prefer-brand-stefanel" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/stefanel.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-nike" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('nike', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="nike" type="checkbox" />
														<label for="prefer-brand-nike" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/nike.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-adl" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('adl', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="adl" type="checkbox" />
														<label for="prefer-brand-adl" class="checkbox-label">
															<img src="/assets/images/form/prefer-brand/adl.jpg" />
														</label>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="prefer-brand-ozel" <?php if(session()->has('quiz_3') && isset(session('quiz_3')['brand']) && in_array('ozel', session('quiz_3')['brand'])): ?> checked <?php endif; ?> class="form-element check" name="quiz[brand][]" value="ozel" type="checkbox" />
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
