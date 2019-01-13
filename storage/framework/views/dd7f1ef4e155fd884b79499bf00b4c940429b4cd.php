
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Orders')); ?> <small><?php echo e(trans('labels.ListingAllShipments')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Shipments')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->
    <div class="row">
      <div class="col-md-3">
        <div class="box">
          
          <!-- /.box-header -->
          <div class="box-body">
            <a class="btn btn-success" href="/admin/shipment/<?php echo e(request()->segment(4)); ?>">Teslimata Dön</a>
            <form id="filter" class="form-horizontal">
          		<?php $__currentLoopData = $result['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          			<h2> <?php echo e($group->products_options_name); ?> </h2>
          			<?php $__currentLoopData = $group->values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          			<input <?php if(request()->get('filter') && in_array($option->products_options_values_id, request()->get('filter'))): ?> checked <?php endif; ?> name="filter[]" type="checkbox" value="<?php echo e($option->products_options_values_id); ?>">	<?php echo e($option->products_options_values_name); ?> 
          			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
          </div>
          <!-- /.box-body --> 
        </div>
        <!-- /.box --> 
      </div>
      <!-- /.col --> 

      <div class="col-md-9">
      	<div class="box">
      		<div class="box-body">

            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 prod">
              <form method="post">
                <div class="image-area">
                  <?php if($product->products_image != ''): ?>
                   <img style="width:200px !important; height:133px !important" class="img-responsive responsive-img" src="/<?php echo e($product->products_image); ?>" width="200" height="133" />
                  <?php else: ?>
                    <img src="/images/no-image.jpg" />
                  <?php endif; ?>
                </div>
                <?php echo e($product->products_name); ?><br>
                <input type="hidden" name="products[]" value="<?php echo e($product->products_id); ?>">
                  <button type="submit" class="btn btn-label btn-primary">Ekle</button>
              </form>
            </div>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      		</div>
      		
      	</div>
      </div>


    </div>
    <!-- /.row --> 
    
      <!-- deleteModal -->

    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
  <style type="text/css">
    .col-md-4.prod {
    text-align: center;
    margin-bottom: 20px;
}
  </style>



</div>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('script'); ?>
  <script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery("#filter").on("change", "input:checkbox", function(){
        jQuery("#filter").submit();
    });
});
  </script>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>