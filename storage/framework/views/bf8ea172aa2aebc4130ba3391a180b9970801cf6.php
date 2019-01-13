<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
						                <li class="active"><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/1"><span>1</span> Genel bilgi</a></li>
						                <li><a href="javascript:;"><span>2</span> Beden ölçüleri</a></li>
						                <li><a href="javascript:;"><span>3</span> Stil</a></li>
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
					    	<!-- Step1: Genel Bilgi -->
							<div class="form-group-container">
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Cinsiyet seçimi</h5>
									</div>
									<div class="rows">
										<div class="gender-select">
											<a href="/checkout/quiz/step/1?product_id=<?php echo e(request('product_id')); ?>&gender=woman&cache=flush" class="<?php if(request('gender') == 'woman' || session('gender') == 'woman'): ?> active <?php endif; ?>  button thin border-black color-black large">K</a>
											<a href="/checkout/quiz/step/1?product_id=<?php echo e(request('product_id')); ?>&gender=man&cache=flush" class="<?php if(request('gender') == 'man' || session('gender') == 'man'): ?> active <?php endif; ?> button thin border-black color-black large">E</a>
										</div>
									</div>
								</div>
								<form id="quiz" action="" method="post">
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Kişisel bilgiler</h5>
									</div>
									<div class="row">
										<div class="column width-4">
											<input type="text" name="quiz[title]" class="form-name form-element large" placeholder="İsim" tabindex="1"  value="<?php echo e(session('exist_quiz')['title'] ?? ''); ?>" required />
										</div>
										<div class="column width-4">
											<input type="text" name="quiz[dob]" value="<?php echo e(session('exist_quiz')['dob'] ?? ''); ?>" autocomplete="off" class="form-birthday form-element large" placeholder="Doğum Tarihiniz" id="datepicker" required />
										</div>
										<div class="column width-4">
											<input type="text" name="quiz[job]" value="<?php echo e(session('exist_quiz')['job'] ?? ''); ?>" class="form-job form-element large" placeholder="Mesleğiniz" tabindex="3" required />
										</div>
									</div>
								</div>
								<div class="boxes mb-40">
									<div class="title">
										<h5 class="all-caps fw-700">Boyunuz</h5>
									</div>
									<div class="rows">
										<div id="your-length" class="slider-box">
											<div class="value-box">
										  		<span class="current-value"><?php echo e(session('exist_quiz')['boy'] ?? '140'); ?></span>
										  		<span>cm</span>
										  	</div>
										  	<input type="hidden" class="quiz_boy" name="quiz[boy]" value="<?php echo e(session('exist_quiz')['boy'] ?? '140'); ?>" />
										</div>
										<div class="bottom-value">
									  		<span>140 cm</span>
									  		<span>240 cm</span>
									  	</div>
									</div>
								</div>
								<div class="boxes mb-40">
									<div class="title">
										<h5 class="all-caps fw-700">Kilonuz</h5>
									</div>
									<div class="rows">
										<div id="your-weight" class="slider-box">
											<div class="value-box">
										  		<span class="current-value"><?php echo e(session('exist_quiz')['kilo'] ?? '40'); ?></span>
										  		<span>kg</span>
										  	</div>
										  	<input type="hidden" class="quiz_kilo" name="quiz[kilo]" value="<?php echo e(session('exist_quiz')['kilo'] ?? '40'); ?>" />
										</div>
										<div class="bottom-value">
									  		<span>40 kg</span>
									  		<span>150 kg</span>
									  	</div>
									</div>
								</div>
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Saç renginiz</h5>
									</div>
									<div class="row">
										<div class="column width-4">
											<input type="text" name="quiz[sac_rengi]" value="<?php echo e(session('exist_quiz')['sac_rengi'] ?? ''); ?>"  class="form-hair-color form-element large" placeholder="Saç renginiz" tabindex="4" required />
										</div>
									</div>
								</div>
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Göz renginiz</h5>
									</div>
									<div class="rows">
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="brown" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['goz_rengi']) && session('exist_quiz')['goz_rengi'] == 'Kahverengi'): ?> checked <?php endif; ?> name="quiz[goz_rengi]" type="radio" value="Kahverengi" />
												<label for="brown" class="radio-label">Kahverengi</label>
											</div>
											<div class="hide-check">
												<input id="blue" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['goz_rengi']) &&  session('exist_quiz')['goz_rengi'] == 'Mavi'): ?> checked <?php endif; ?> name="quiz[goz_rengi]" type="radio" value="Mavi" />
												<label for="blue" class="radio-label">Mavi</label>
											</div>
											<div class="hide-check">
												<input id="hazel" class="form-element radio" name="quiz[goz_rengi]" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['goz_rengi']) &&  session('exist_quiz')['goz_rengi'] == 'Ela'): ?> checked <?php endif; ?> type="radio" value="Ela" />
												<label for="hazel" class="radio-label">Ela</label>
											</div>
											<div class="hide-check">
												<input id="green" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['goz_rengi']) &&  session('exist_quiz')['goz_rengi'] == 'Yeşil'): ?> checked <?php endif; ?> name="quiz[goz_rengi]" type="radio" value="Yeşil" />
												<label for="green" class="radio-label">Yeşil</label>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Ten renginiz</h5>
									</div>
									<div class="rows">
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="white" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['ten_rengi']) &&  session('exist_quiz')['ten_rengi'] == 'Beyaz'): ?> checked <?php endif; ?> class="form-element radio" name="quiz[ten_rengi]" type="radio" value="Beyaz" />
												<label for="white" class="radio-label">Beyaz</label>
											</div>
											<div class="hide-check">
												<input id="auburn"  <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['ten_rengi']) && session('exist_quiz')['ten_rengi'] == 'Buğday'): ?> checked <?php endif; ?> class="form-element radio" name="quiz[ten_rengi]" type="radio" value="Buğday" />
												<label for="auburn" class="radio-label">Buğday</label>
											</div>
											<div class="hide-check">
												<input id="brunette" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['ten_rengi']) && session('exist_quiz')['ten_rengi'] == 'Esmer'): ?> checked <?php endif; ?> name="quiz[ten_rengi]" type="radio" value="Esmer" />
												<label for="brunette" class="radio-label">Esmer</label>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-30">
									<div class="title">
										<h5 class="all-caps fw-700">Vücut tipi</h5>
									</div>
									<div class="rows">
										<div class="field-wrapper body-type">
											<div class="row">
												<div class="column width-2">
													<div class="hide-check">
														<input id="pear" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['vucut']) && session('exist_quiz')['vucut'] == 'armut'): ?> checked <?php endif; ?> name="quiz[vucut]" type="radio" value="armut"/>
														<label for="pear" class="radio-label">
															<img src="/assets/images/form/body-type/man/pear.jpg" />
														</label>
														<p class="title">Armut</p>
														<span>Dar omuzlar, geniş kalça ve belirgin bel kıvrımı</span>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="athletic" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['vucut']) && session('exist_quiz')['vucut'] == 'atletik'): ?> checked <?php endif; ?> name="quiz[vucut]" type="radio" value="atletik" />
														<label for="athletic" class="radio-label">
															<img src="/assets/images/form/body-type/man/athletic.jpg" />
														</label>
														<p class="title">Atletik</p>
														<span>Geniş omuzlar, dar ve küçük kalça yapısı, düz uzun bacaklar.</span>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="apple" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['vucut']) && session('exist_quiz')['vucut'] == 'elma'): ?> checked <?php endif; ?> name="quiz[vucut]" type="radio" value="elma" />
														<label for="apple" class="radio-label">
															<img src="/assets/images/form/body-type/man/apple.jpg" />
														</label>
														<p class="title">Elma</p>
														<span>Kalın bel ile karın çevresi ve neredeyse bel genişliğinde kalça yapısı</span>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="straight" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['vucut']) && session('exist_quiz')['vucut'] == 'duz'): ?> checked <?php endif; ?> name="quiz[vucut]" type="radio" value="duz" />
														<label for="straight" class="radio-label">
															<img src="/assets/images/form/body-type/man/straight.jpg" />
														</label>
														<p class="title">Düz</p>
														<span>Düz bir görünüm hissi verir, kalça ve omuz genişliği birbirine yakındır ve bel kıvrımı az belirgindir</span>
													</div>
												</div>
												<div class="column width-2">
													<div class="hide-check">
														<input id="hourglass" class="form-element radio" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['vucut']) && session('exist_quiz')['vucut'] == 'kumsaati'): ?> checked <?php endif; ?> name="quiz[vucut]" type="radio" value="kumsaati" />
														<label for="hourglass" class="radio-label">
															<img src="/assets/images/form/body-type/man/hourglass.jpg" />
														</label>
														<p class="title">Kum Saati</p>
														<span>Geniş kalça ve omuzlar, ince bel, geniş göğüs kafesi.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-footer right">
									<a href="" class="button thin border-black color-black" style="display:none">GERİ DÖN</a>
									<button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</button>
								</div>
							</form>
							</div>
					    </div>
					</div>
				</div>


			</div>
