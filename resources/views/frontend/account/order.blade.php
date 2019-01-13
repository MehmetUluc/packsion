@extends('frontend.layouts.app')

@section('content')



        <div class="wrapper reveal-side-navigation">
  <div class="wrapper-inner">
    <div class="content clearfix">

      <div class="section-block intro-title-2 xxsmall bkg-charcoal-transition">
        <div class="row">
          <div class="column width-12">
            <div class="row">
              <div class="column width-12">
                <div class="title-container">
                  <div class="title-container-inner">
                    <ul class="breadcrumb all-caps">
                      <li>
                        <a href="/">Anasayfa</a>
                      </li>
                      <li>
                        {{ Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname }}
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-block hero-5 hero-5-2 height-auto min-height-half bkg-grey-ultralight mobile-bkg-white">
        <div class="media-column width-5 bkg-white"></div>
        <div class="row">
          <div class="column width-4 half-padding-right left-side-menu mb-60 center">
            <div class="profile">
              <div class="img" style="background-image:url(assets/images/dummy-profile.jpg)"></div>
              <div class="content">
                <span class="fw-300">Merhaba :)</span>
                <h4 class="fw-400">{{ Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname }}</h4>
              </div>
            </div>
            <ul>
              <li class="active"><a href="/account/orders" class="button large bkg-hover-black color-hover-white">Siparişlerim</a></li>
              <li class=""><a href="/account/profile" class="button large bkg-hover-black color-hover-white">Profilim</a></li>
              <li><a href="/account/password" class="button large bkg-hover-black color-hover-white">Şifre İşlemleri</a></li>
              <li ><a href="/account/address" class="button large bkg-hover-black color-hover-white">Adreslerim</a></li>
              <li class=""><a href="/account/quiz" class="button large bkg-hover-black color-hover-white">Kayıtlı Formlarım</a></li>
              <li><a href="/customer/logout" class="button large thin border-black border-hover-theme color-black color-hover-theme">Çıkış Yap</a></li>
            </ul>
          </div>
          <div class="column width-7 push-1">
            <h3 class="mb-30 all-caps fw-700">Siparişlerim</h3>
            <div class="row">
              <div class="column width-12">
                <div class="address">
                  <div class="row">
                    @if(count($orders) > 0)
                    @foreach($orders as $order)
                    <div class="column width-12">
                      <article>
                        <div class="v-align-middle">
                          <h4>{{ $order->products_name }}</h4>

                          <p>Başlangıç Tarihi: {{ strftime('%d %B %Y ', strtotime($order->date_added)) }} <br />
                          Kutuların Yollandığı Tarih Aralığı: Sipariş tarihinden itibaren 10 gün.<br />
                          Abonelik Ücreti: {{ $order->order_price }} ₺<br >
                          Toplam Abonelik Süresi: {{$order->count}} Ay<br >
                          Kalan Abonelik Süresi: {{ $order->shipment_count }} Ay
                        </p>

                          <div class="pull-right">
                            <a class="" href="/account/order/{{ $order->orders_id }}" class=""> Ürünleri Düzenle</a>
                            @if($order->count > 1)
                            <a class="" href="/membership/cancel/{{ $order->orders_id }}" class=""> Üyeliği Durdur</a>
                            @endif
                          </div>
                        </div>
                      </article>
                    </div>
                  @endforeach
                @else
                    <div class="column width-12">
                      <article class="add-new center">
                        <br />
                        <br />
                        <p>Aktif Siparişiniz bulunmamaktadır</o>
                      </article>
                    </div>
                @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="remove-modal" class="section-block pt-50 pb-20 background-none hide">
        <div class="row">
          <div class="column width-12 center">
            <h3>Silmek üzeresin!</h3>
            <p>Silmek istediğine emin misin?</p>
            <div>
              <a href="" class="silbutton button bkg-theme bkg-hover-black color-white color-hover-white">Evet, Eminim</a>
            </div>
          </div>
        </div>
      </div>


<script>
    document.body.className += " hidden-footer";
</script>

@stop

@section('script')
<script type="text/javascript">
  jQuery('.remove').click(function(){
    var link = '/account/address/' + jQuery(this).data('id') + '/remove';
    jQuery('.silbutton').attr('href', link);
  })
</script>


@stop
