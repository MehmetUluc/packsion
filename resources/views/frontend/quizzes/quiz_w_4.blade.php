<div class="content clearfix">

				<div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
					<div class="row">
						<div class="column width-12">
							<div class="title-container">
								<div class="title-container-inner">
									<ul class="nav nav-steps">
										<li class="past"><a href="/account/quiz/{{ request()->segment(3) }}/step/1"><span>1</span> Genel bilgi</a></li>
										<li class="active"><a href="/account/quiz/{{ request()->segment(3) }}/step/2"><span>2</span> Beden ölçüleri</a></li>
										<li><a href="/account/quiz/{{ request()->segment(3) }}/step/3"><span>3</span> Stil</a></li>
										<li><a href="/account/quiz/{{ request()->segment(3) }}/step/4"><span>4</span> Tercihler</a></li>
										<li><a href="javascript:;"><span>5</span> Siparişi tamamla</a></li>
						            </ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section-block min-height-half">
					<div class="row">
            @include('frontend.quizzes.right')
					    <div class="column width-9">
					    	<!-- Step4: Tercihler -->
					    	<form action="" method="post">
							<div class="form-group-container">

                <div class="boxes mb-20">
                  <div class="title">
                    <h5 class="all-caps fw-700">Vücudunuzda gizlemek istediğiniz alanlar var mı? Bu soruda birden fazla seçeneği işaretleyebilirsiniz.</h5>
                  </div>
                  <div class="rows">
                    <div class="field-wrapper">
                      @php
                        $numbers = ['Omuzlar', 'Kollar', 'Sırt', 'Göğüs', 'Karın', 'Bacaklar', 'Hiçbiri', 'Hepsi']
                      @endphp
                      @foreach($numbers as $key => $number)
                      <div class="hide-check">
                        <input id="shoe-size-{{ $key }}" class="form-element check" name="quiz[gizli][]" type="checkbox" value="{{ $number }}" />
                        <label for="shoe-size-{{ $key }}" class="radio-label">{{ $number }}</label>
                      </div>
                      @endforeach

                    </div>
                  </div>
                </div>

								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">İlk gönderiminizde talep etmiş olduğunuz stil hangisidir?</h5>
									</div>
									<div class="rows">
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="gunluk-siklik" class="form-element radio" name="quiz[ilk_gonderim]" type="radio" value="Günlük Şıklık" />
												<label for="gunluk-siklik" class="radio-label">Günlük Şıklık</label>
											</div>
											<div class="hide-check">
												<input id="ofis-sikligi" class="form-element radio" name="quiz[ilk_gonderim]" type="radio" value="Ofis Şıklığı" />
												<label for="ofis-sikligi" class="radio-label">Ofis Şıklığı</label>
											</div>
											<div class="hide-check">
												<input id="gece-sikligi" class="form-element radio" name="quiz[ilk_gonderim]" type="radio" value="Gece Şıklığı" />
												<label for="gece-sikligi" class="radio-label">Gece Şıklığı</label>
											</div>
											<div class="hide-check">
												<input id="davet" class="form-element radio" name="quiz[ilk_gonderim]" type="radio" value="Davet" />
												<label for="davet" class="radio-label">Davet</label>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">İstediğiniz tarzları önceliklerini belirtiniz.</h5>
									</div>
									<div class="rows">
										<p class="mb-10">Günlük Şıklık</p>
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="quiz[gunluk]-1" class="form-element radio" name="quiz[gunluk]" type="radio" value="1" />
												<label for="quiz[gunluk]-1" class="radio-label">1</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gunluk]-2" class="form-element radio" name="quiz[gunluk]" type="radio" value="2" />
												<label for="quiz[gunluk]-2" class="radio-label">2</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gunluk]-3" class="form-element radio" name="quiz[gunluk]" type="radio" value="3" />
												<label for="quiz[gunluk]-3" class="radio-label">3</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gunluk]-4" class="form-element radio" name="quiz[gunluk]" type="radio" value="4" />
												<label for="quiz[gunluk]-4" class="radio-label">4</label>
											</div>
										</div>
										<p class="mb-10">Ofis Şıklığı</p>
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="quiz[ofis]-1" class="form-element radio" name="quiz[ofis]" type="radio" value="1" />
												<label for="quiz[ofis]-1" class="radio-label">1</label>
											</div>
											<div class="hide-check">
												<input id="quiz[ofis]-2" class="form-element radio" name="quiz[ofis]" type="radio" value="2" />
												<label for="quiz[ofis]-2" class="radio-label">2</label>
											</div>
											<div class="hide-check">
												<input id="quiz[ofis]-3" class="form-element radio" name="quiz[ofis]" type="radio" value="3" />
												<label for="quiz[ofis]-3" class="radio-label">3</label>
											</div>
											<div class="hide-check">
												<input id="quiz[ofis]-4" class="form-element radio" name="quiz[ofis]" type="radio" value="4" />
												<label for="quiz[ofis]-4" class="radio-label">4</label>
											</div>
										</div>
										<p class="mb-10">Gece Şıklığı</p>
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="quiz[gece]-1" class="form-element radio" name="quiz[gece]" type="radio" value="1" />
												<label for="quiz[gece]-1" class="radio-label">1</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gece]-2" class="form-element radio" name="quiz[gece]" type="radio" value="2" />
												<label for="quiz[gece]-2" class="radio-label">2</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gece]-3" class="form-element radio" name="quiz[gece]" type="radio" value="3" />
												<label for="quiz[gece]-3" class="radio-label">3</label>
											</div>
											<div class="hide-check">
												<input id="quiz[gece]-4" class="form-element radio" name="quiz[gece]" type="radio" value="4" />
												<label for="quiz[gece]-4" class="radio-label">4</label>
											</div>
										</div>
										<p class="mb-10">Davet Şıklığı</p>
										<div class="field-wrapper">
											<div class="hide-check">
												<input id="quiz[davet]-1" class="form-element radio" name="quiz[davet]" type="radio" value="1" />
												<label for="quiz[davet]-1" class="radio-label">1</label>
											</div>
											<div class="hide-check">
												<input id="quiz[davet]-2" class="form-element radio" name="quiz[davet]" type="radio" value="2" />
												<label for="quiz[davet]-2" class="radio-label">2</label>
											</div>
											<div class="hide-check">
												<input id="quiz[davet]-3" class="form-element radio" name="quiz[davet]" type="radio" value="3" />
												<label for="quiz[davet]-3" class="radio-label">3</label>
											</div>
											<div class="hide-check">
												<input id="quiz[davet]-4" class="form-element radio" name="quiz[davet]" type="radio" value="4" />
												<label for="quiz[davet]-4" class="radio-label">4</label>
											</div>
										</div>
									</div>
								</div>
								<div class="boxes mb-20">
									<div class="title">
										<h5 class="all-caps fw-700">Sizinle nasıl iletişime geçebiliriz? (Opsiyonel)</h5>
									</div>
									<div class="row">
										<div class="column width-12">
											<div class="row">
												<div class="column width-4">
													<input type="text" name="quiz[phone]" class="form-phone form-element large" placeholder="Telefon numaranız" tabindex="1" />
												</div>
												<div class="column width-4">
													<input type="text" name="quiz[email]" class="form-email form-element large" placeholder="E-Posta adresiniz" tabindex="2" />
												</div>
											</div>
										</div>
										<div class="column width-12">
											<div class="row">
												<div class="column width-4">
													<input type="text" name="quiz[facebook]" class="form-facebook-username form-element large" placeholder="Facebook kullanıcı adı" tabindex="3" />
												</div>
												<div class="column width-4">
													<input type="text" name="quiz[instagram]" class="form-instagram-username form-element large" placeholder="Instagram kullanıcı adı" tabindex="4" />
												</div>
											</div>
										</div>
										<div class="column width-12">
											<div class="row">
												<div class="column width-8">
													<textarea name="quiz[ekbilgi]" class="form-message form-element large mb-0" placeholder="Örneğin: Sade giyinmeyi severim" tabindex="5"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-footer right">
									<a href="/account/quiz/{{ request()->segment(3) }}/step/3" class="button thin border-black color-black">GERİ DÖN</a>
									<button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</button>
								</div>
							</div>
						</form>
					    </div>
					</div>
				</div>


			</div>
