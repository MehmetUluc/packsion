
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
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <a class="btn btn-success" href="/admin/listingShipments">Bu Ayki Siparişler</a>
            <a class="btn btn-info" href="/admin/alllistingShipments">Tüm Teslimatlar</a>
            <a class="btn btn-primary" href="/admin/listingShipped">Gönderilmiş Teslimatlar</a>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
           <div class="row">
              <div class="col-xs-12">
                    <form class="form-inline form-validate" method="post" action="/admin/print_invoice" enctype="multipart/form-data">
                      <div class="form-group">
                        <h5 style="font-weight: bold; padding:0px 5px; "><?php echo e(trans('labels.FilterByCategory/Products')); ?>:</h5>
                      </div>
                      <div class="form-group" style="min-width: 220px">
                        <select class="form-control field-validate" name="template" style="width: 100%">
                          <option value="">Fatura Türü Seçin</option>

                              <option value="2">Resmi Fatura Yazdır</option>
                              <option value="1">Kalemleri Yazdır</option>
                        </select>
                      </div>

                      <button type="submit" class="btn btn-success">Yazdır</button>

                    
                </div><br><br><br>

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
                      <th>Seçiniz</th>
                      <th><?php echo e(trans('labels.ID')); ?></th>
                      <th><?php echo e(trans('labels.ShippingDate')); ?></th>
                      <th><?php echo e(trans('labels.CustomerName')); ?></th>
                      <th><?php echo e(trans('labels.OrderTotal')); ?></th>
                      <th><?php echo e(trans('labels.Product')); ?></th>
                      <th><?php echo e('Abonelik Süresi'); ?></th>
                      <th><?php echo e('Kalan Süre'); ?></th>
                      <th><?php echo e(trans('labels.DatePurchased')); ?></th>
                      <th><?php echo e(trans('Fatura')); ?></th>
                      <th><?php echo e(trans('Payu İade')); ?></th>
                      <th><?php echo e(trans('labels.Status')); ?> </th>
                      <th><?php echo e(trans('labels.Action')); ?></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(count($shipments)>0): ?>
                    <?php $__currentLoopData = $shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$orderData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    

                    <?php if($orderData->status != 'confirmed' && $orderData->passive == 1 ): ?>
                      <?php 
                      $style = 'style=background:#f3cbcb;';
                       ?>
                    <?php else: ?> 
                      <?php 
                      $style = '';
                       ?>
                    <?php endif; ?>
                        <tr <?php echo e($style); ?>>
                            <td><input name="invoice[]" type="checkbox" value="<?php echo e($orderData->id); ?>" /></td>
                            <td><?php echo e($orderData->id); ?></td>
                            <td><?php echo e($orderData->ship_at); ?></td>
                            <td><?php echo e($orderData['customer']->customers_firstname . ' ' . $orderData['customer']->customers_lastname); ?></td>
                            <td><?php echo e($orderData->price); ?></td>
                            <td><?php echo e($orderData['item']->products_name); ?></td>
                            <td><?php echo e($orderData['count']  . ' Ay'); ?></td>
                            <td><?php echo e($orderData['shipment_count']  . ' Ay'); ?></td>
                            <td><?php echo e(date('d/m/Y', strtotime($orderData['order']->date_purchased))); ?> </td>
                            <td><?php if($orderData['parasut_id']): ?> <a href="javascript;" class="label label-warning">Faturalandırıldı</a>  <?php else: ?> <a href="/parasut/<?php echo e($orderData->id); ?>" class="label label-primary">Faturalandır</a> <?php endif; ?> </td>
                            <td><?php if($orderData['reference_id'] && $orderData['irn'] == 0): ?> <a href="/payu/irn/<?php echo e($orderData->id); ?>" class="label label-warning">İade Et</a>  <?php elseif(!$orderData['reference_id']): ?> <a href="javascript;" class="label label-primary">Ödeme Yapılmadı</a> <?php elseif($orderData['irn'] == 1): ?> <a href="javascript;" class="label label-danger">İade Edildi</a> <?php endif; ?> </td>
                            <td>
                            	<?php if($orderData->status=='pending'): ?>
                                <span class="label label-warning">
                                <?php elseif($orderData->orders_status_id=='paid'): ?>
                                    <span class="label label-success">
                                <?php elseif($orderData->orders_status_id=='cancel'): ?>
                                     <span class="label label-danger">
                                <?php else: ?>
                                     <span class="label label-primary">
                                <?php endif; ?>
                                <?php echo e($orderData->status); ?>

                                     </span>
                            </td>
                            <td>
                            <a data-toggle="tooltip" data-placement="bottom" title="View Order" href="shipment/<?php echo e($orderData->id); ?>" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            
                             <a data-toggle="tooltip" data-placement="bottom" title="Delete Order" id="deleteOrdersId" orders_id ="<?php echo e($orderData->orders_id); ?>" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            
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
      <!-- deleteModal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="deleteModalLabel"><?php echo e(trans('labels.DeleteOrder')); ?></h4>
		  </div>
		  <?php echo Form::open(array('url' =>'admin/deleteOrder', 'name'=>'deleteOrder', 'id'=>'deleteOrder', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')); ?>

				  <?php echo Form::hidden('action',  'delete', array('class'=>'form-control')); ?>

				  <?php echo Form::hidden('orders_id',  '', array('class'=>'form-control', 'id'=>'orders_id')); ?>

		  <div class="modal-body">						
			  <p><?php echo e(trans('labels.DeleteOrderText')); ?></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('labels.Close')); ?></button>
			<button type="submit" class="btn btn-primary" id="deleteOrder"><?php echo e(trans('labels.Delete')); ?></button>
		  </div>
		  <?php echo Form::close(); ?>

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