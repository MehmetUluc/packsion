
<?php $__env->startSection('content'); ?>
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> <?php echo e(trans('')); ?> <small><?php echo e(trans('Sık Sorulan Sorular')); ?>...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="<?php echo e(URL::to('admin/dashboard/this_month')); ?>"><i class="fa fa-dashboard"></i> <?php echo e(trans('labels.breadcrumb_dashboard')); ?></a></li>
      <li class="active"><?php echo e(trans('Sık Sorulan Sorular')); ?> </li>
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
            <h3 class="box-title"><?php echo e(trans('Sık Sorulan Sorular')); ?> </h3>
            <div class="box-tools pull-right">
            	<a href="addFaq" type="button" class="btn btn-block btn-primary"><?php echo e(trans('Ekle')); ?></a>
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
                      <th><?php echo e(trans('labels.Name')); ?></th>

                      <th><?php echo e(trans('labels.Status')); ?></th>
                      <th></th>
                    </tr>
                  </thead>
                   <tbody>
                   <?php if(count($result["pages"])>0): ?>
                    <?php $__currentLoopData = $result["pages"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    	
                        <tr>
                            <td><?php echo e($data->id); ?></td>
                            <td>
                            	<?php echo e($data->title); ?>

                            </td>
                            

							<td>
								<?php if($data->status==0): ?>
									<span class="label label-warning">
										<?php echo e(trans('labels.InActive')); ?>

									</span>
								<?php else: ?>
									<a href="<?php echo e(URL::to("admin/faqStatus")); ?>?id=<?php echo e($data->id); ?>&active=no" class="method-status">
										<?php echo e(trans('labels.InActive')); ?>

									</a>
								<?php endif; ?>
								&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
								<?php if($data->status==1): ?>
									<span class="label label-success">
										<?php echo e(trans('labels.Active')); ?>

									</span>
								<?php else: ?>
									<a href="<?php echo e(URL::to("admin/faqStatus")); ?>?id=<?php echo e($data->id); ?>&active=yes" class="method-status">
										<?php echo e(trans('labels.Active')); ?>

									</a>
								<?php endif; ?>
								
							</td>
                           
                            <td>
                                <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Edit')); ?>" href="editFaq/<?php echo e($data->id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                                <a data-toggle="tooltip" data-placement="bottom" title="<?php echo e(trans('labels.Delete')); ?>" href="deleteFaq/<?php echo e($data->id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   <?php else: ?>
                   <tr>
                   		<td colspan="6"><?php echo e(trans('labels.NoRecordFound')); ?></td>
                   </tr>
                   <?php endif; ?>
                  </tbody>
                </table>
                <div class="col-xs-12 text-right">
                	<?php echo e($result["pages"]->links()); ?>

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
    
    <!-- deletePageModal -->
	<div class="modal fade" id="deletePageModal" tabindex="-1" role="dialog" aria-labelledby="deletePageModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deletePageModalLabel"><?php echo e(trans('labels.DeletePage')); ?></h4>
		  </div>
		  <?php echo Form::open(array('url' =>'admin/deletePage', 'name'=>'deletePage', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

				  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

				  <?php echo Form::hidden('id',  '', array('class'=>'form-control', 'id'=>'id')); ?>

		  <div class="modal-body">						
			  <p><?php echo e(trans('labels.DeletePageDilogue')); ?></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
			<button type="submit" class="btn btn-primary" id="deletePage"><?php echo e(trans('labels.Delete')); ?></button>
		  </div>
		  <?php echo Form::close(); ?>

		</div>
	  </div>
	</div>
    <!-- /.row --> 
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>