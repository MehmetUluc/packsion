<div class="content clearfix">

  <div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
    <div class="row">
      <div class="column width-12">
        <div class="title-container">
          <div class="title-container-inner">
            <ul class="nav nav-steps">
                      <li class="past"><a href="/account/quiz/{{ request()->segment(3) }}/step/1"><span>1</span> Genel bilgi</a></li>
                      <li class="active"><a href="/account/quiz/{{ request()->segment(3) }}/step/2"><span>2</span> Beden ölçüleri</a></li>
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
        @include('frontend.quizzes.right')
        <div class="column width-9">
          <!-- Step2: Beden Ölçüleri -->
          <form id="quiz2" action="" method="post">
        <div class="form-group-container">
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Üst bedeniniz</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                <div class="hide-check">
                  <input id="xsmall" class="form-element radio"  name="quiz[üst_beden]" @if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'XSMALL') checked @endif name="quiz[goz_rengi]" type="radio" value="XSMALL" />
                  <label for="xsmall" class="radio-label">XSMALL</label>
                </div>
                <div class="hide-check">
                  <input id="small" class="form-element radio" name="quiz[üst_beden]"  @if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'SMALL') checked @endif type="radio" value="SMALL" />
                  <label for="small" class="radio-label">SMALL</label>
                </div>
                <div class="hide-check">
                  <input id="medium" class="form-element radio" name="quiz[üst_beden]" @if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'MEDIUM') checked @endif type="radio" value="MEDIUM" />
                  <label for="medium" class="radio-label">MEDIUM</label>
                </div>
                <div class="hide-check">
                  <input id="large" class="form-element radio" @if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'LARGE') checked @endif name="quiz[üst_beden]" type="radio" value="LARGE" />
                  <label for="large" class="radio-label">LARGE</label>
                </div>
                <div class="hide-check">
                  <input id="x-large" class="form-element radio" @if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'X-LARGE') checked @endif  name="quiz[üst_beden]" type="radio" value="X-LARGE" />
                  <label for="x-large" class="radio-label">X-LARGE</label>
                </div>
              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Standart bedeniniz (opsiyonel)</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                @php
                  $numbers = [34,36,38,40,42,44]
                @endphp
                @foreach($numbers as $number)
                <div class="hide-check">
                  <input id="standart-{{ $number }}" @if(session()->has('exist_quiz') && session('exist_quiz')['standart_beden'] == $number) checked @endif class="form-element radio" name="quiz[standart_beden]" type="radio" value="{{ $number }}" />
                  <label for="standart-{{ $number }}" class="radio-label">{{ $number }}</label>
                </div>
                @endforeach

              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Kot pantolon bedeniniz</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                @php
                  $numbers = [24, 25, 26, 27, 28,29,30,31,32,33,34]
                @endphp
                @foreach($numbers as $number)
                <div class="hide-check">
                  <input id="pantolon-{{ $number }}" @if(session()->has('exist_quiz') && isset(session('exist_quiz')['kot_beden']) && session('exist_quiz')['kot_beden'] == $number) checked @endif class="form-element radio" name="quiz[kot_beden]" type="radio" value="{{ $number }}" />
                  <label for="pantolon-{{ $number }}" class="radio-label">{{ $number }}</label>
                </div>
                @endforeach

              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Alt bedeniniz</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                @php
                  $numbers = [32,34,36,38,48,42,44]
                @endphp
                @foreach($numbers as $number)
                <div class="hide-check">
                  <input id="lower-body-{{ $number }}" @if(session()->has('exist_quiz') && session('exist_quiz')['alt_beden'] == $number) checked @endif class="form-element radio" name="quiz[alt_beden]" type="radio" value="{{ $number }}" />
                  <label for="lower-body-{{ $number }}" class="radio-label">{{ $number }}</label>
                </div>
                @endforeach
              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Ayakkabı numaranız</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                @php
                  $numbers = [35,36,37,38,39,40,41,42]
                @endphp
                @foreach($numbers as $number)
                <div class="hide-check">
                  <input id="shoe-size-{{ $number }}" @if(session()->has('exist_quiz') && session('exist_quiz')['ayakkabi_no'] == $number) checked @endif class="form-element radio" name="quiz[ayakkabi_no]" type="radio" value="{{ $number }}" />
                  <label for="shoe-size-{{ $number }}" class="radio-label">{{ $number }}</label>
                </div>
                @endforeach

              </div>
            </div>
          </div>

          <div class="form-footer right">
            <a href="/account/quiz/{{ request()->segment(3) }}/step/1" class="button thin border-black color-black">GERİ DÖN</a>
            <button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</a>
          </div>
        </div>
      </form>
        </div>
    </div>
  </div>


</div>
