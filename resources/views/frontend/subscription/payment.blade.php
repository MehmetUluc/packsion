@extends('frontend.layouts.app')

@section('content')

<div class="content clearfix">
                                
                <div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
                    <div class="row">
                        <div class="column width-12">
                            <div class="title-container">
                                <div class="title-container-inner">
                                    <ul class="nav nav-steps">
                                        @if(session()->has('without_quiz'))

                                            <li class="past"><a href="javascript:;"><span>1</span> Genel bilgi</a></li>
                                        <li class="past"><a href="javascript:;"><span>2</span> Beden ölçüleri</a></li>
                                        <li class="past"><a href="javascript:;"><span>3</span> Stil</a></li>
                                        <li class="past"><a href="javascript:;"><span>4</span> Tercihler</a></li>
                                        <li class="active"><a href="javascript:;"><span>5</span> Siparişi tamamla</a></li>
                                        @else
                                        <li class="past"><a href="/checkout/quiz/step/1"><span>1</span> Genel bilgi</a></li>
                                        <li class="past"><a href="/checkout/quiz/step/2"><span>2</span> Beden ölçüleri</a></li>
                                        <li class="past"><a href="/checkout/quiz/step/3"><span>3</span> Stil</a></li>
                                        <li class="past"><a href="/checkout/quiz/step/4"><span>4</span> Tercihler</a></li>
                                        <li class="active"><a href="/checkout/payment"><span>5</span> Siparişi tamamla</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-block min-height-half">
                    <div class="row">
                        <div class="width-3 right-sidebar">
                            
                            <div class="summary">
                                <ul>
                                    @if(session()->has('without_quiz'))
                                        <li>
                                        <a href="javascript:;" class="all-caps">01- Genel Bilgi <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="all-caps">02- Beden Ölçüleri <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="all-caps">03- Stil <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="javascript:;" class="all-caps">04- Tercihler <span class="angle-arrow"></span></a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="/checkout/quiz/step/1" class="all-caps">01- Genel Bilgi <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="/checkout/quiz/step/2" class="all-caps">02- Beden Ölçüleri <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="/checkout/quiz/step/3" class="all-caps">03- Stil <span class="angle-arrow"></span></a>
                                    </li>
                                    <li>
                                        <a href="/checkout/quiz/step/4" class="all-caps">04- Tercihler <span class="angle-arrow"></span></a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            
                        </div>
                        <div class="column width-9">
                            <!-- Step5: Checkout -->

                            <form action="" id="order_form" method="post"/>
                            {{ csrf_field() }}
                            <div class="form-group-container">

                                <div class="boxes mb-20">
                                    <div class="title">
                                        <h5 class="all-caps fw-700">Aşağıdaki kutularımızdan birini seçerek satın alma işleminizi yapabilirsiniz <span class="info-title"></span></h5>
                                    </div>
                                    <div class="rows">
                                        <div class="field-wrapper body-type">
                                            <div class="row">
                                                <div class="column width-4">
                                                    <div class="hide-check">
                                                        <input id="packer" class="form-element check" name="product" value="83" type="radio" required />
                                                        <label for="packer" class="checkbox-label tooltip-image">
                                                            <img src="/assets/packer.png" />

                                                        </label>
                                                        <p class="title">The Packer</p>
                                                    </div>
                                                </div>
                                                <div class="column width-4">
                                                    <div class="hide-check">
                                                        <input id="packsion" class="form-element check" name="product" value="84" type="radio" required />
                                                        <label for="packsion" class="checkbox-label tooltip-image">
                                                            <img src="/assets/packsion.png" />

                                                        </label>
                                                        <p class="title">The Packsion</p>
                                                    </div>
                                                </div>
                                                <div class="column width-4">
                                                    <div class="hide-check">
                                                        <input id="packsionist" class="form-element check" name="product" value="85" type="radio" required />
                                                        <label for="packsionist" class="checkbox-label tooltip-image">
                                                            <img src="/assets/packsionist.png" />

                                                        </label>
                                                        <p class="title">The Packsionist</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="boxes mb-20">
                                  <div class="title">
                                      <h5 class="all-caps fw-700">Abonelik Planınız</h5>
                                  </div>
                                  <div class="row">
                                    <div class="column width-12">
                                        <div class="row">
                                            <div class="column width-6">
                                                <div class="form-select form-element large">
                                                    <select name="plan" tabindex="1" class="form-aux" data-label="Adres seç" required>
                                                        <option selected="selected" value="">Seçiniz</option>
                                                        <option value="1">Tek Seferlik</option>
                                                        <option value="2">2 Aylık</option>
                                                        <option value="3">3 Aylık</option>
                                                        <option value="4">4 Aylık</option>
                                                        <option value="5">5 Aylık</option>
                                                        <option value="6">6 Aylık</option>
                                                        <option value="7">7 Aylık</option>
                                                        <option value="8">8 Aylık</option>
                                                        <option value="9">9 Aylık</option>
                                                        <option value="10">10 Aylık</option>
                                                        <option value="11">11 Aylık</option>
                                                        <option value="12">12 Aylık</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="column width-6">
                                                
                                                    <input id="tc" type="text" name="tc_no" class="form-tc form-element large" placeholder="TC Kimlik Numaranız" tabindex="1"  />
                                                
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                    <div class="title">
                                        <h5 class="all-caps fw-700">Kutunuzu teslim almak istediğiniz adresi seçiniz</h5>
                                    </div>
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="row">
                                                <div class="column width-6">
                                                    <div class="form-select form-element large">
                                                        <select name="address" tabindex="1" class="form-aux" data-label="Adres seç" required>
                                                            <option selected="selected" value="">Adres seç</option>
                                                            @foreach($addresses as $address)
                                                            <option @if(session('address_id') == $address->address_book_id) selected @endif value="{{ $address->address_book_id }}">{{ $address->entry_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="column width-6">
                                                    <a class="button large" id="add-newAddress">
                                                        <span class="icon-plus left"></span>
                                                        Yeni adres ekle
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="add-new-address">

                                                    <div class="row">
                                                        <div class="column width-12">
                                                            <div class="row">
                                                                <div class="column width-12">
                                                                    <input id="entry_name" type="text" name="address-title" class="form-address-title form-element large" placeholder="Adres etiketiniz (örn: iş, ev..)" tabindex="1"  />
                                                                </div>
                                                                <div class="column width-6">
                                                                    <input id="entry_firstname" type="text" name="name" class="form-name form-element large" placeholder="Ad" tabindex="2"  />
                                                                </div>
                                                                <div class="column width-6">
                                                                    <input id="entry_lastname" type="text" name="surname" class="form-surname form-element large" placeholder="Soyad" tabindex="3"  />
                                                                </div>
                                                                <div class="column width-12">
                                                                    <textarea id="entry_street_address" name="open-address" class="form-open-address form-element large" placeholder="Açık adresiniz" tabindex="4" ></textarea>
                                                                </div>
                                                                <div class="column width-6">
                                                                    <div class="form-select form-element large">
                                                                        <select id="city" name="province" tabindex="5" class="form-aux" data-label="Şehir seç" >
                                                                            <option selected="selected" value="">Şehir seç</option>
                                                                            @foreach($states as $state)
                                                                            <option data-id="{{ $state->id }}" value="{{ $state->name }}">{{ $state->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="column width-6">
                                                                    <div class="form-select form-element large">
                                                                        <select id="district" name="district" tabindex="6" class="form-aux" data-label="İlçe seç" >
                                                                            <option selected="selected" value="">İlçe seç</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="column width-6">
                                                                    <input id="entry_suburb" type="text" name="neighborhood" class="form-neighborhood form-element large" placeholder="Semt" tabindex="7" />
                                                                </div>
                                                                <div class="column width-6">
                                                                    <input id="entry_postcode" type="text" name="postcode" class="form-postcode form-element large" placeholder="Posta kodu" tabindex="8" />
                                                                </div>
                                                                <div class="column width-12">
                                                                    <input id="entry_phone" onkeypress="return isNumber(event);" type="text" name="phone" class="form-phone form-element large" placeholder="Telefon numaranız" tabindex="9" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="center">
                                                        <a id="new_address" class="button bkg-black bkg-hover-theme color-white color-hover-white large all-caps">Adresi kaydet</a>
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="boxes mb-20">
                                    <div class="title">
                                        <h5 class="all-caps fw-700">Promosyon kodu ile indirimden yararlanabilirsin</h5>
                                    </div>
                                    <div class="row">
                                        <div class="column width-6">
                                            <input id="promotion" type="text" name="promotion" class="form-promotion-code form-element large" value="{{ session('coupon') }}" placeholder="Promosyon kodu" tabindex="2" />
                                        </div>
                                        <div class="column width-6">
                                                    <a class="button large" id="addCoupon">
                                                        <span class="icon-plus left"></span>
                                                        Uygula
                                                    </a>
                                                </div>
                                    </div>
                                </div>
                                <div class="boxes mb-20">
                                    <div class="title">
                                        <h5 class="all-caps fw-700">Ödeme bilgileri</h5>
                                    </div>
                                    <div class="row">
                                        <div class="column width-12">
                                            <div class="row">
                                                <div class="column width-6">
                                                    <input type="text" name="cardholder" class="form-name-on-card form-element large" placeholder="Kart üzerindeki isim soyisim" tabindex="3"  required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="row">
                                                <div class="column width-6">
                                                    <input type="text" name="cardnumber" class="form-card-number form-element large" placeholder="Kart numarası" tabindex="4" required/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column width-12">
                                            <div class="row">
                                                <div class="column width-2">
                                                    <div class="form-select form-element large">
                                                        <select name="month" tabindex="5" class="form-aux" data-label="AA" required>
                                                            <option selected="selected" value="">AA</option>
                                                            <option value="01">01</option>
                                                            <option value="02">02</option>
                                                            <option value="03">03</option>
                                                            <option value="04">04</option>
                                                            <option value="05">05</option>
                                                            <option value="06">06</option>
                                                            <option value="07">07</option>
                                                            <option value="08">08</option>
                                                            <option value="09">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="column width-2">
                                                    <div class="form-select form-element large">

                                                        <select  name="year" tabindex="6" class="form-aux" data-label="YY" required>
                                                            <option selected="selected" value="">YY</option>
                                                            @for($i=date('Y'); $i<=date('Y')+15; $i++)
                                                              <option value="{{ $i }}">{{ $i }}</option>
                                                            @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="column width-2">
                                                    <input type="text" name="cvv" class="form-card-number form-element large" placeholder="CVV" tabindex="7" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="boxes mb-20">
                                    <div class="row">
                                        <div class="column width-6">
                                            <div class="field-wrapper">
                                                <input id="checkbox-1" class="form-element checkbox" name="checkbox-1" type="checkbox" required>
                                                <label for="checkbox-1" class="checkbox-label">
                                                    <a data-content="inline" data-modal-mode data-modal-width="1140" data-lightbox-animation="fadeIn" href="#agreement-modal" class="lightbox-link">Mesafeli satış sözleşmesini</a> ve <a data-content="inline" data-modal-mode data-modal-width="1140" data-lightbox-animation="fadeIn" href="#agreement-modal-2" class="lightbox-link">ön bilgilendirme formunu</a> okudum ve kabul ediyorum.
                                                </label>
                                            </div>
                                            <ul class=" list-inline"><li>
                                <img src="/assets/ssl.png" style="width: 70px; height: 34px;">&nbsp;
                                <img src="/assets/visa.png" alt="PaymentGateway">
                                <img src="/assets/mastercard.png" alt="PaymentGateway">&nbsp;
                            </li></ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer right">
                                    <a href="/checkout/quiz/step/4" class="button thin border-black color-black">GERİ DÖN</a>
                                    <button id="btn-submit" type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">SİPARİŞİ TAMAMLA</button>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Agreement Modal -->
                <div id="agreement-modal" class="section-block pt-50 pb-20 background-none hide">
                    <div class="row">
                        <div class="column width-12">
                            <p class="fw-300">
                                @include('mesafeli')
                            </p>
                        </div>
                    </div>
                </div>

                <div id="agreement-modal-2" class="section-block pt-50 pb-20 background-none hide">
                    <div class="row">
                        <div class="column width-12">
                            <p class="fw-300">
                                @include('satis')
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Agreement Modal -->


            </div>
@stop

@section('script')
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#your-length").slider({
                range: "min",
                min: 140,
                max: 240,
                value: 160,
                slide: function(e, ui) {
                    $(this).find(".current-value").html(ui.value);
                }
            });
            $("#your-weight").slider({
                range: "min",
                min: 40,
                max: 150,
                value: 72,
                slide: function(e, ui) {
                    $(this).find(".current-value").html(ui.value);
                }
            });

            $("#datepicker").datepicker({
                yearRange: '1950:2017',
                changeMonth: true,
                changeYear: true,
                defaultDate: "01/01/1950"
            });

            $("#add-newAddress").click(function(){
                $(".add-new-address").slideToggle();
            });
        });

        function isNumber(e){
    e = e || window.event;
    var charCode = e.which ? e.which : e.keyCode;
    return /\d/.test(String.fromCharCode(charCode));
}



        $('#new_address').click(function() {
                $.ajax({
                    url: '/checkout/new/address',
                    dataType: 'json',
                    type: 'post',
                    data: {entry_name: $('#entry_name').val(),
                            entry_firstname : $('#entry_firstname').val(),
                            entry_lastname: $('#entry_lastname').val(),
                            entry_street_address: $('#entry_street_address').val(),
                            entry_city: $('#city').val(),
                            entry_state: $('#district').val(),
                            entry_postcode: $('#entry_postcode').val(),
                            entry_phone: $('#entry_phone').val(),
                            entry_suburb: $('#entry_suburb').val(),

                             },
                    success: function (data) {
                       location.reload();
                    },
                    error: function (data) {
                        location.reload();
                    }
                });


        });



        $('#addCoupon').click(function() {
                $.ajax({
                    url: '/checkout/coupon',
                    dataType: 'json',
                    type: 'post',
                    data: {coupon: $('#promotion').val(),
                            

                             },
                    success: function (data) {
                       var response = jQuery.parseJSON(JSON.stringify(data));

                       if(response.success == 1){
                            swal("Tebrikler", response.message, "success");
                       } else {
                            swal("Üzgünüm", response.message, "error");
                       }

                       //alert(response.message);
                    }
                });


        });






    </script>

  <script type="text/javascript">
            var $state      = $('#city');
            var $district   = $('#district');




        jQuery("#city").on("change", function() {
          jQuery("#district").find(":not(:first)").remove();
          jQuery.getJSON( "/state/" + jQuery("#city option:selected").attr("data-id") + "/district", function( data ) {
            jQuery.each(data, function(i, item) {
              jQuery("#district").append("<option data-ilce='" + item.tid + "' value='" + item.name + "'>" + item.name + "</option>");
            });
          });
        });

        @if(session()->has('error'))

          swal("Üzgünüm", "Bir sorun oluştu ve ödemenizi alamadım. Tekrar deneyin lütfen", "error");

        @endif;



          </script>
@stop
