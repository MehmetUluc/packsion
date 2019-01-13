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
            <h3 class="mb-30 all-caps fw-700">Adres <?php if(request()->segment(2) == 'new'): ?> Ekle <?php else: ?> Düzenle <?php endif; ?></h3>
            <div class="row">
              <div class="column width-12">
                <div class="address">
                  <div class="row">
                                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                                  <?php echo e(csrf_field()); ?>

                                    <ul class="form-wrapper">

                                      <div class="column width-12">
                      <div class="field-wrapper">
                        <input type="text" class="form-fname form-element large" name="title" id="tag"
                               placeholder="Adres Etiketiniz (örn: iş, ev..)" value="<?php echo e(isset($address->entry_name) ? $address->entry_name : ''); ?>"
                               required>
                      </div>
                    </div>


                    <div class="column width-12">
    <div class="field-wrapper">
                                            <input type="text" class="form-fname form-element large" id="name" name="name" placeholder="Adın" value="<?php echo e(isset($address->entry_firstname) ? $address->entry_firstname : ''); ?>"
                                                   minlength="2" required>
                                        </div>
                                        </div>
                                        <div class="column width-12">
                        <div class="field-wrapper">
                                            <input type="text" class="form-fname form-element large" id="surname" name="lastname" placeholder="Soyadın"
                                                   value="<?php echo e(isset($address->entry_lastname) ? $address->entry_lastname : ''); ?>" required>
                                        </div>
                                        </div>
                                        <div class="column width-12">
                        <div class="field-wrapper">
                                            <textarea required id="address" row="4" class="form-fname form-element large" name="address" placeholder="Açık Adresiniz"><?php echo e(isset($address->entry_street_address) ? $address->entry_street_address : ''); ?></textarea>
                                        </div>
                                        </div>
                                        <li style="display:none">
                                            <select name="country" id="country" class="btn-lg w100p">
                                                <option value="">Şehir Seç</option>
                                                <option value="213">Türkiye</option>

                                            </select>
                                        </li>
                                        <div class="column width-12">
                                        <div class="form-select form-element large">
                                            <select name="state" id="city" class="form-aux"
                                                    data-rule-required="true">
                                                <option value="">Şehir Seç</option>
                                                <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                  <option data-id="<?php echo e($state->id); ?>" <?php if($address->entry_city == $state->name): ?> selected <?php endif; ?> value="<?php echo e($state->name); ?>"><?php echo e($state->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </select>
                                        </div>
                                        </div>
                                        <div class="column width-12">
                                        <div class="form-select form-element large">
                                            <select name="district" id="district" class="form-aux"
                                                    data-rule-required="true">
                                                <option value="">İlçe Seç</option>
                                                <?php if(count($districts) > 0): ?>
                                                <?php $__currentLoopData = $districts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $district): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  <option <?php if($address->entry_state == $district->name): ?> selected <?php endif; ?> value="<?php echo e($district->name); ?>"><?php echo e($district->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>

                                            </select>
                                        </div>
                                        </div>
                                        <div class="column width-12">
                                            <input style="margin-bottom:15px;" type="text" id="county" class="form-fname form-element large" name="town" multiple placeholder="Semt"
                                                   value="<?php echo e(isset($address->entry_suburb) ? $address->entry_suburb : ''); ?>" required data-msg="">

                                            <input type="text" class="form-fname form-element large" id="post-code" class="onlyNumeric " name="post_code" value="<?php echo e(isset($address->entry_postcode) ? $address->entry_postcode : ''); ?>"
                                                   placeholder="Posta Kodu">
                                        </div>
                                        <div class="column width-12">
                                            <input type="text" class="form-fname form-element large" id="phone" onkeypress="return isNumber(event);"  class="onlyNumeric" name="phone"
                                                   value="<?php echo e(isset($address->entry_phone) ? $address->entry_phone : ''); ?>" placeholder="Telefon Numaranız" required
                                                   maxlength="14">
                                        </div>

                                        <div class="column width-12">
 												<input type="submit" value="Güncelle" class="form-submit button medium bkg-black bkg-hover-theme color-white color-hover-white all-caps pull-left full-width">
 											</div>

                                    </ul>
                                </form>
                              </div>

                  </div>
                  </div>
                  </div>
                  </div>
                </div>
                </div>


</div></div>
<script>
              function isNumber(e){
    e = e || window.event;
    var charCode = e.which ? e.which : e.keyCode;
    return /\d/.test(String.fromCharCode(charCode));
}
    document.body.className += " hidden-footer";
</script>
<style type="text/css">
    textarea {
        background: transparent !important;
        border:1px solid #000;
        font-size:15px;
        color:#000;
    }
    .dashboard-myaddresses {
        margin-top: 21px;
    }
    .form ul.form-wrapper li {
    display: block;
    padding-bottom: 15px;
}

input.btn.btn-secondary.btn-lg.btn-form {
    line-height: 10px;
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
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

  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>