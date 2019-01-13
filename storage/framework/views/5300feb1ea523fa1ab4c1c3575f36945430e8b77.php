
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('Editörler')); ?> <small><?php echo e(trans('Editörler')); ?>...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('Editörler')); ?></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content"> 
    <!-- Info boxes --> 
    
    <!-- /.row -->

    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><?php echo e(trans('Editörler')); ?> </h3>
            <div class="box-tools pull-right">
              <a href="signup" type="button" class="btn btn-block btn-primary"><?php echo e(trans('Editörler Ekle')); ?></a>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
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
                      <th><?php echo e(trans('labels.ID')); ?></th>

                      <th><?php echo e(trans('labels.Adı Soyadı')); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php if(count($editors) > 0): ?>
            <?php $__currentLoopData = $editors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$listingCustomers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($listingCustomers->myid); ?></td>
             
                <td>
                  <?php echo e($listingCustomers->first_name . ' ' . $listingCustomers->last_name); ?>

                                    </td>
                                    
               

              </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                      <tr>
              <td colspan="4"><?php echo e(trans('labels.NoRecordFound')); ?></td>              
            </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
                <?php if(count($editors) > 0): ?>
          <div class="col-xs-12 text-right">
            <?php echo e($editors->links()); ?>

          </div>
                 <?php endif; ?>
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
   
    <!-- deleteCustomerModal -->
  <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteCustomerModalLabel"><?php echo e(trans('labels.DeleteCustomer')); ?></h4>
      </div>
      <?php echo Form::open(array('url' =>'admin/deleteCustomers', 'name'=>'deleteCustomer', 'id'=>'deleteCustomer', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

          <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

          <?php echo Form::hidden('customers_id',  '', array('class'=>'form-control', 'id'=>'customers_id')); ?>

      <div class="modal-body">            
        <p><?php echo e(trans('labels.DeleteCustomerText')); ?></p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
      <button type="submit" class="btn btn-primary"><?php echo e(trans('labels.DeleteCustomer')); ?></button>
      </div>
      <?php echo Form::close(); ?>

    </div>
    </div>
  </div>
    
    <div class="modal fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content notificationContent">

    </div>
    </div>
  </div>

    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>