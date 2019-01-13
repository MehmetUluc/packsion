<div class="content clearfix">

  <div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
    <div class="row">
      <div class="column width-12">
        <div class="title-container">
          <div class="title-container-inner">
            <ul class="nav nav-steps">
                      <li class="past"><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/1"><span>1</span> Genel bilgi</a></li>
                      <li class="active"><a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/2"><span>2</span> Beden ölçüleri</a></li>
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
                  <input id="xsmall" class="form-element radio"  name="quiz[üst_beden]" <?php if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'XSMALL'): ?> checked <?php endif; ?> name="quiz[goz_rengi]" type="radio" value="XSMALL" />
                  <label for="xsmall" class="radio-label">XSMALL</label>
                </div>
                <div class="hide-check">
                  <input id="small" class="form-element radio" name="quiz[üst_beden]"  <?php if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'SMALL'): ?> checked <?php endif; ?> type="radio" value="SMALL" />
                  <label for="small" class="radio-label">SMALL</label>
                </div>
                <div class="hide-check">
                  <input id="medium" class="form-element radio" name="quiz[üst_beden]" <?php if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'MEDIUM'): ?> checked <?php endif; ?> type="radio" value="MEDIUM" />
                  <label for="medium" class="radio-label">MEDIUM</label>
                </div>
                <div class="hide-check">
                  <input id="large" class="form-element radio" <?php if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'LARGE'): ?> checked <?php endif; ?> name="quiz[üst_beden]" type="radio" value="LARGE" />
                  <label for="large" class="radio-label">LARGE</label>
                </div>
                <div class="hide-check">
                  <input id="x-large" class="form-element radio" <?php if(session()->has('exist_quiz') && session('exist_quiz')['üst_beden'] == 'X-LARGE'): ?> checked <?php endif; ?>  name="quiz[üst_beden]" type="radio" value="X-LARGE" />
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
                <?php 
                  $numbers = [34,36,38,40,42,44]
                 ?>
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hide-check">
                  <input id="standart-<?php echo e($number); ?>" <?php if(session()->has('exist_quiz') && session('exist_quiz')['standart_beden'] == $number): ?> checked <?php endif; ?> class="form-element radio" name="quiz[standart_beden]" type="radio" value="<?php echo e($number); ?>" />
                  <label for="standart-<?php echo e($number); ?>" class="radio-label"><?php echo e($number); ?></label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Kot pantolon bedeniniz</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                <?php 
                  $numbers = [24, 25, 26, 27, 28,29,30,31,32,33,34]
                 ?>
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hide-check">
                  <input id="pantolon-<?php echo e($number); ?>" <?php if(session()->has('exist_quiz') && isset(session('exist_quiz')['kot_beden']) && session('exist_quiz')['kot_beden'] == $number): ?> checked <?php endif; ?> class="form-element radio" name="quiz[kot_beden]" type="radio" value="<?php echo e($number); ?>" />
                  <label for="pantolon-<?php echo e($number); ?>" class="radio-label"><?php echo e($number); ?></label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Alt bedeniniz</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                <?php 
                  $numbers = [32,34,36,38,48,42,44]
                 ?>
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hide-check">
                  <input id="lower-body-<?php echo e($number); ?>" <?php if(session()->has('exist_quiz') && session('exist_quiz')['alt_beden'] == $number): ?> checked <?php endif; ?> class="form-element radio" name="quiz[alt_beden]" type="radio" value="<?php echo e($number); ?>" />
                  <label for="lower-body-<?php echo e($number); ?>" class="radio-label"><?php echo e($number); ?></label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
          <div class="boxes mb-20">
            <div class="title">
              <h5 class="all-caps fw-700">Ayakkabı numaranız</h5>
            </div>
            <div class="rows">
              <div class="field-wrapper">
                <?php 
                  $numbers = [35,36,37,38,39,40,41,42]
                 ?>
                <?php $__currentLoopData = $numbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $number): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hide-check">
                  <input id="shoe-size-<?php echo e($number); ?>" <?php if(session()->has('exist_quiz') && session('exist_quiz')['ayakkabi_no'] == $number): ?> checked <?php endif; ?> class="form-element radio" name="quiz[ayakkabi_no]" type="radio" value="<?php echo e($number); ?>" />
                  <label for="shoe-size-<?php echo e($number); ?>" class="radio-label"><?php echo e($number); ?></label>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              </div>
            </div>
          </div>

          <div class="form-footer right">
            <a href="/account/quiz/<?php echo e(request()->segment(3)); ?>/step/1" class="button thin border-black color-black">GERİ DÖN</a>
            <button type="submit" class="button bkg-black color-white bkg-hover-theme color-hover-white">KAYDET ve DEVAM ET</a>
          </div>
        </div>
      </form>
        </div>
    </div>
  </div>


</div>
