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
              <li><a href="/account/orders" class="button large bkg-hover-black color-hover-white">Siparişlerim</a></li>
              <li class=""><a href="/account/profile" class="button large bkg-hover-black color-hover-white">Profilim</a></li>
              <li><a href="/account/password" class="button large bkg-hover-black color-hover-white">Şifre İşlemleri</a></li>
              <li class="active"><a href="/account/address" class="button large bkg-hover-black color-hover-white">Adreslerim</a></li>
              <li class=""><a href="/account/quiz" class="button large bkg-hover-black color-hover-white">Kayıtlı Formlarım</a></li>
              <li><a href="/customer/logout" class="button large thin border-black border-hover-theme color-black color-hover-theme">Çıkış Yap</a></li>
            </ul>
          </div>
          <div class="column width-7 push-1">
            <h3 class="mb-30 all-caps fw-700">Adreslerim</h3>
            <div class="row">
              <div class="column width-12">
                <div class="address">
                  <div class="row">
                    <?php if(count($address) > 0): ?>
                    <?php $__currentLoopData = $address; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="column width-12">
                      <article>
                        <div class="v-align-middle">
                          <h5><?php echo e($item->entry_name); ?></h5>

                          <p><?php echo e($item->entry_street_address); ?> <?php echo e($item->entry_state); ?> / <?php echo e($item->entry_city); ?></p>
                          <a data-content="inline" data-aux-classes="remove-modal" data-toolbar="" data-modal-mode data-modal-width="600" data-lightbox-animation="fadeIn" data-id=<?php echo e($item->address_book_id); ?> href="#remove-modal" class="lightbox-link button small remove"><span class="icon-cross"></span></a>
                          <div class="field-wrapper pull-left">
                            <input onchange="address.add(<?php echo e($item->address_book_id); ?>)" <?php if($item->default == 1): ?> checked <?php endif; ?> id="default-address-<?php echo e($item->address_book_id); ?>" value="<?php echo e($item->address_book_id); ?>" class="form-element checkbox" name="default-address" type="checkbox">
                            <label for="default-address-<?php echo e($item->address_book_id); ?>" data-id="<?php echo e($item->address_book_id); ?>" class="checkbox-label">Varsayılan adres olarak işaretle</label>
                          </div>
                          <div class="pull-right">
                            <a href="/account/address/<?php echo e($item->address_book_id); ?>" class=""><img src="/assets/images/icon/edit.svg" /> Düzenle</a>
                          </div>
                        </div>
                      </article>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                    <div class="column width-12">
                      <article class="add-new center">
                        <a href="/account/new/address" class="v-align-middle"><span class="icon-plus"></span> Yeni adres ekle</a>
                      </article>
                    </div>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  jQuery('.remove').click(function(){
    var link = '/account/address/' + jQuery(this).data('id') + '/remove';
    jQuery('.silbutton').attr('href', link);
  })



  var address = {

        add:function(id){
            var address_id = id;
            var url = "/default/address";
            var data = { address_id: address_id };
            $.ajax({
                type: "POST",
                url: url,
                data:data,
                success: function(data)
                {
                    console.log(data);
                    window.location = "/account/address";
                    var obj = jQuery.parseJSON(data);
                    if(obj['status'] == false)
                    {
                        alert(obj['message']);
                        return false;
                    }else{
                        window.location = "/account/address";
                    }
                }
            });
        }
    };


</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>