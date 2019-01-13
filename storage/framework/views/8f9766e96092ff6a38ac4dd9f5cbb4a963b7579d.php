<?php $__env->startSection('content'); ?>


 <div class="main-container">
    <div class="bg-image bg-ch-aa-image">
    </div>

            <div class="main-form ch-add-form full-form">
             
                <h3 class="heading">Kutunuzun teslim olmasını istediğiniz adres:</h3>

                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                    <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                           <!--  <label>Lorem Ipsum:</label> -->
                            <select class="form-control" data-rule-required="true"  name="saved_address" id="saved-address" class="btn-lg w100p">
                                <option value="">Adres Seç</option>
                                 <?php if(count($addresses) > 0): ?>
                                <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if(session()->get('address_id') == $address->address_book_id): ?> selected <?php endif; ?> value="<?php echo e($address->address_book_id); ?>"><?php echo e($address->entry_name); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                            <span><a href="/checkout/new/address" style="position: relative; top: -7px; left: 10px; color: #f52e55; font-size:20px;"> <b>Yeni Adres Ekle</b></a></span>
                        </div>

                        <div class="form-group button">
                            <button type="submit" class="btn btn-default">Devam Et</button>
                        </div>

                </form>
            </div>

 </div>


<?php echo e(session()->forget('gift')); ?>

<script>
document.body.className += " hidden-footer";
</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>