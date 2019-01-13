<div class="width-3 right-sidebar hide-on-mobile">

<div class="summary">
  <ul>
    <li class="genel @if(request()->segment(4) == 2)  active @endif" >
      <a href="/checkout/quiz/step/1" onclick="$(this).parent().addClass('active'); $('.beden').removeClass('active'); $('.beden .dropdown').hide(); $('.genel .dropdown').show(); $(this).unbind('click'); return false; " class="all-caps right-a">01- Genel Bilgi <span class="angle-arrow"></span></a>
      <div class="dropdown"  @if(request()->segment(4) != 2) style="display:none;" @endif>
        @php

          $quiz = session()->get('quiz_1') ?? session('quiz_1');


          if(session()->get('gender') == 'man'){
            $gender = 'Erkek';
          } else {
            $gender = 'Kadın';
          }


        @endphp

        <ul class="first">


          <li>

            <h5>Cinsiyet</h5>
            <span>{{ $gender }}</span>
          </li>
          @if(Auth::guard('customer')->check())
          <li>
            <h5>İsim</h5>
            <span>{{ Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname }}</span>
          </li>
        @endif
          <li>
            <h5>Doğum Tarihi</h5>
            <span>{{ $quiz['dob'] ?? '' }}</span>
          </li>
          <li>
            <h5>Mesleğiniz</h5>
            <span>{{ $quiz['job'] ?? '' }}</span>
          </li>
          <li>
            <h5>Boyunuz</h5>
            <span>{{ $quiz['boy'] ?? '' }}</span>
          </li>
          <li>
            <h5>Kilonuz</h5>
            <span>{{ $quiz['kilo'] ?? '' }} kg</span>
          </li>
          <li>
            <h5>Vücut Tipi</h5>
            <span>{{ $quiz['vucut'] ?? '' }}</span>
          </li>
        </ul>

      </div>
    </li>
    <li class="beden @if(request()->segment(4) == 3)  active @endif">
      @if(request()->segment(4) == 1)
        <a href="javascript:;"
      @else
        <a href="/checkout/quiz/step/2"
      @endif
       onclick="$(this).parent().addClass('active'); $('.genel').removeClass('active'); $('.genel .dropdown').hide(); $('.beden .dropdown').show(); $(this).unbind('click'); return false; " class="all-caps">02- Beden Ölçüleri <span class="angle-arrow"></span></a>
       <div class="dropdown" @if(request()->segment(4) != 3) style="display:none;" @endif>
        @php
          $quiz = session()->get('quiz_2') ?? session('quiz');
          if(session()->get('gender') == 'man'){
            $gender = 'Erkek';
          } else {
            $gender = 'Kadın';
          }


        @endphp

        <ul class="first">


         
          <li>
            <h5>Üst Bedeniniz</h5>
            <span>{{ $quiz['üst_beden'] ?? '' }}</span>
          </li>
          <li>
            <h5>Standart Bedeniniz</h5>
            <span>{{ isset($quiz['standart_beden']) ? $quiz['standart_beden'] : '' }}</span>
          </li>
          <li>
            <h5>Kot Pantolon Bedeniniz</h5>
            <span>{{ $quiz['kot_beden'] ?? '' }}</span>
          </li>
          <li>
            <h5>Alt Bedeniniz</h5>
            <span>{{ $quiz['alt_beden'] ?? '' }}</span>
          </li>
          <li>
            <h5>Ayakkabı Numaranız</h5>
            <span>{{ $quiz['ayakkabi_no'] ?? '' }}</span>
          </li>
        </ul>

      </div>
    </li>
    <li>
      <a @if(request()->segment('4') == 4) href="/checkout/quiz/step/3" @else href="javascript:;" @endif class="all-caps">03- Stil <span class="angle-arrow"></span></a>
    </li>
    <li>
      <a href="javascript:;" class="all-caps">04- Tercihler <span class="angle-arrow"></span></a>
    </li>
  </ul>
</div>
</div>
