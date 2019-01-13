<div class="width-3 right-sidebar">
  <div class="content">
      <div class="title">
    Sipariş Özeti
  </div>

</div>
<div class="summary">
  <ul>
    <li class="genel <?php if(request()->segment(5) == 2): ?>  active <?php endif; ?>" >
      <a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/1" onclick="$(this).parent().addClass('active'); $('.beden').removeClass('active'); $('.beden .dropdown').hide(); $('.genel .dropdown').show(); $(this).unbind('click'); return false; " class="all-caps right-a">01- Genel Bilgi <span class="angle-arrow"></span></a>
      <div class="dropdown"  <?php if(request()->segment(5) != 2): ?> style="display:none;" <?php endif; ?>>
        <?php 
          $quiz_1 = session()->get('exist_quiz');
          if(session()->get('gender') == 'man'){
            $gender = 'Erkek';
          } else {
            $gender = 'Kadın';
          }


         ?>

        <ul class="first">


          <li>

            <h5>Cinsiyet</h5>
            <span><?php echo e($gender); ?></span>
          </li>
          <?php if(Auth::guard('customer')->check()): ?>
          <li>
            <h5>İsim</h5>
            <span><?php echo e(Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname); ?></span>
          </li>
        <?php endif; ?>
          <li>
            <h5>Doğum Tarihi</h5>
            <span><?php echo e($quiz_1['dob'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Mesleğiniz</h5>
            <span><?php echo e($quiz_1['job'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Boyunuz</h5>
            <span><?php echo e($quiz_1['boy'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Kilonuz</h5>
            <span><?php echo e($quiz_1['kilo'] ?? ''); ?> kg</span>
          </li>
          <li>
            <h5>Vücut Tipi</h5>
            <span><?php echo e($quiz_1['vucut'] ?? ''); ?></span>
          </li>
        </ul>

      </div>
    </li>
    <li class="beden <?php if(request()->segment(5) == 3): ?>  active <?php endif; ?>">
      <a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/2" onclick="$(this).parent().addClass('active'); $('.genel').removeClass('active'); $('.genel .dropdown').hide(); $('.beden .dropdown').show(); $(this).unbind('click'); return false; " class="all-caps">02- Beden Ölçüleri <span class="angle-arrow"></span></a>
       <div class="dropdown" <?php if(request()->segment(5) != 3): ?> style="display:none;" <?php endif; ?>>
        <?php 
          $quiz_2 = session()->get('exist_quiz');
          if(session()->get('gender') == 'man'){
            $gender = 'Erkek';
          } else {
            $gender = 'Kadın';
          }


         ?>

        <ul class="first">



          <li>
            <h5>Üst Bedeniniz</h5>
            <span><?php echo e($quiz_2['üst_beden'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Standart Bedeniniz</h5>
            <span><?php echo e($quiz_2['standart_beden'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Pantolon Bedeniniz</h5>
            <span><?php echo e(isset($quiz_2['pantolon_beden']) ? $quiz_2['pantolon_beden'] : ''); ?></span>
          </li>
          <li>
            <h5>Alt Bedeniniz</h5>
            <span><?php echo e($quiz_2['alt_beden'] ?? ''); ?></span>
          </li>
          <li>
            <h5>Ayakkabı Numaranız</h5>
            <span><?php echo e($quiz_2['ayakkabi_no'] ?? ''); ?></span>
          </li>
        </ul>

      </div>
    </li>
    <li>
      <a <?php if(request()->segment('5') == 4): ?> href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/3" <?php else: ?> href="javascript:;" <?php endif; ?> class="all-caps">03- Stil <span class="angle-arrow"></span></a>
    </li>
    <li>
      <a href="javascript:;" class="all-caps">04- Tercihler <span class="angle-arrow"></span></a>
    </li>
  </ul>
</div>
</div>
