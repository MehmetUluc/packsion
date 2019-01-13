
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('labels.Influencers')); ?> <small><?php echo e(trans('labels.Slideshow')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('labels.Slideshow')); ?></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Info boxes -->

    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">


          <!-- /.box-header -->
          <div class="box-body">
           <div class="row">
              <div class="col-xs-12">
                    <form class="form-inline form-validate" method="post" action="/admin/print_invoice" enctype="multipart/form-data">

 				<div class="box-header">
		            <h3 class="box-title">Slideshow</h3>
		            <div class="box-tools pull-right">
		            	<a href="/admin/slideshows/add" type="button" class="btn btn-block btn-primary">Yeni Ekle</a>
		            </div>
		          </div>


                </div>

             </div>
            <div class="row">
              <div class="col-xs-12">
              	 <?php if(count($errors) > 0): ?>
                          <?php if($errors->any()): ?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <?php echo e($errors->first()); ?>

                            </div>
                          <?php endif; ?>
                      <?php endif; ?>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    	<th>ID</th>
                      <th>İsim</th>
                    	<th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(count($influencers)>0): ?>
                    <?php $__currentLoopData = $influencers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$orderData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td><?php echo e($orderData->id); ?></td>
                            <td><?php echo e($orderData->title); ?></td>

                            <td>
                            <a data-toggle="tooltip" data-placement="bottom" title="View Influencer" href="slideshows/edit/<?php echo e($orderData->id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                             <a data-toggle="tooltip" data-placement="bottom" href="slideshows/delete/<?php echo e($orderData->id); ?> title="Delete Influencer" id="deleteOrdersId" orders_id ="<?php echo e($orderData->id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>

                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                  	<tr>
                    	<td colspan="6"><strong><?php echo e(trans('labels.NoRecordFound')); ?></strong></td>
                    </tr>
                  <?php endif; ?>
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">

                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    </form>


    <!-- Main row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>