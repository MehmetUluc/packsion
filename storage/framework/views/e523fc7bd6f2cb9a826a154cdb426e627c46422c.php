

<?php $__env->startSection('content'); ?>



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
                        <?php echo e(Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname); ?>

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
                <h4 class="fw-400"><?php echo e(Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname); ?></h4>
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
            <h3 class="mb-30 all-caps fw-700">Bu Ayki Ürünlerim</h3>
            <div class="row">
              <div class="column width-12">
                <div class="address">
                  <div class="row">
                     <?php if(isset($shipments[0]['meta']) && count($shipments[0]['meta']) > 0): ?>

                    <div class="column width-12">


                          <div class="single-product full-width pull-left">
                            <?php $__currentLoopData = $shipments[0]['meta']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <article>
                              <div class="row">
                                <div class="column width-3">
                                  <div class="thumbnail img-scale-in" data-hover-easing="easeInOut" data-hover-speed="500" data-hover-bkg-color="#ffffff" data-hover-bkg-opacity="0.8">
                                    <a class="overlay-link lightbox-link" data-caption="<?php echo e($order->products_name); ?>" data-image-url="//packsion.com/<?php echo e($order->products_image); ?>" href="//packsion.com/<?php echo e($order->products_image); ?>" data-lightbox-animation="fadeIn">
                                      <img src="//packsion.com/<?php echo e($order->products_image); ?>" alt=""/>
                                      <span class="overlay-info center">
                                        <span>
                                          <span>
                                            <span class="icon-magnifying-glass fs-26"></span>
                                          </span>
                                        </span>
                                      </span>
                                    </a>
                                  </div>
                                </div>
                                <div class="column width-5">
                                  <h4 class="all-caps fw-700 mb-10"><?php echo e($order->products_name); ?></h4>
                                  <p>Fiyat : <?php echo e($order->shipment_price); ?></p>


                                </div>
                                <div class="column width-4">
                                  <?php if($order->status == 1): ?>

                                    <a id="cancel_link" data-content="inline" data-aux-classes="remove-modal" data-toolbar="" data-modal-mode data-modal-width="600" data-lightbox-animation="fadeIn" data-id="<?php echo e($order->id); ?>" href="#remove-modal" class="lightbox-link button small cancel bkg-charcoal bkg-hover-theme color-white color-hover-white mt-30 all-caps fw-700">İade Et</a>
                                  <?php else: ?>
                                    <a class="button small bkg-charcoal bkg-hover-theme color-white color-hover-white mt-30 all-caps fw-700" href="/apply/product/<?php echo e($order->id); ?>">Aktif Et</a>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </article>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>



                    </div>

                <?php else: ?>
                    <div class="column width-12">
                      <article class="add-new center">
                        <br />
                        <br />
                        <p>  Bu ay için henüz paketinize eklenmiş bir ürün bulunmamaktadır. Ürün Temsilcilerimiz sizlere daha iyi hizmet vermek için çalışmaktadırlar. En kısa sürede bu ay için ürünleriniz eklenerek size kargolanacaktır..</p>
                      </article>
                    </div>
                <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<style>
.address article {
  background-color: #fff;
  padding: 10px;
  float: left;
  width: 100%;
  border-bottom: 1px solid #eaeaea;
  display: block;
  min-height: inherit;
  margin-bottom: inherit;
}
.thumbnail.img-scale-in {
    margin-bottom: inherit;
}
a.button.small.bkg-charcoal.bkg-hover-theme.color-white.color-hover-white.mt-30.all-caps.fw-700 {
    margin-top: 40px;
}
</style>

<script>
    document.body.className += " hidden-footer";
</script>
<style>
button.swal2-confirm.swal2-styled {
    margin-top: 14px;
}
</style>


<div id="remove-modal" class="section-block pt-50 pb-20 background-none hide">
        <div class="row">
          <div class="column width-12 center">
            <h3>İade Nedeni Girin!</h3>
            <form id="cancel_form" action="cancel" method="post">
              <div class="form-select form-element large">
            <select id="reason" class="form-aux" name="reason">
              <option value="Ürünün bedeni büyük">Ürünün bedeni büyük</option>
              <option value="Ürünün bedeni küçük">Ürünün bedeni küçük</option>
              <option value="Ürünü beğenmedim">Ürünü beğenmedim</option>
              <option value="Ürünün rengi istediğim gibi değil">Ürünün rengi istediğim gibi değil</option>
              <option value="Ürün hasarlı geldi">Ürün hasarlı geldi</option>
              <option value="diger">Diğer</option>
            </select>

          </div>
          <div style="display:none;" class="reason2 field-wrapper">
            <input type="text" name="reason2" value="" class="form-fname form-element large" placeholder="Neden belirtin" tabindex="2">
          </div>
          </form>
            <div>
              <a href="javascript:;" onclick="jQuery('#cancel_form').submit();" class="silbutton button bkg-theme bkg-hover-black color-white color-hover-white">İade Et</a>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
  jQuery('.cancel').click(function(){
    var link = '/cancel/product/' + jQuery(this).data('id');
    jQuery('#cancel_form').removeAttr('action');
    jQuery('#cancel_form').attr('action', link);
  })

  jQuery('#reason').on('change', function(){
    if(jQuery(this).val() == 'diger'){
      jQuery('.reason2').show();
      jQuery('#tml-content').css('height', '300px');
    } else {
      jQuery('.reason2').hide();
      jQuery('#tml-content').css('height', '248px');
    }

  })

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>