@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Orders') }} <small>{{ trans('labels.ListingAllShipments') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Shipments') }}</li>
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
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
           <div class="row">
              <div class="col-xs-12">
                    <form class="form-inline form-validate" method="post" action="/admin/print_invoice" enctype="multipart/form-data">
                      <div class="form-group">
                        <h5 style="font-weight: bold; padding:0px 5px; ">{{ trans('labels.FilterByCategory/Products') }}:</h5>
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
              	 @if (count($errors) > 0)
                          @if($errors->any())
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{$errors->first()}}
                            </div>
                          @endif
                      @endif
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Seçiniz</th>
                      <th>{{ trans('labels.ID') }}</th>
                      <th>{{ trans('labels.ShippingDate') }}</th>
                      <th>{{ trans('labels.CustomerName') }}</th>
                      <th>{{ trans('labels.OrderTotal') }}</th>
                      <th>{{ trans('labels.Product') }}</th>
                      <th>{{ 'Abonelik Süresi' }}</th>
                      <th>{{ 'Kalan Süre' }}</th>
                      <th>{{ trans('labels.DatePurchased') }}</th>
                      <th>{{ trans('labels.Status') }} </th>
                      <th>{{ trans('labels.Action') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($shipments)>0)
                    @foreach ($shipments as $key=>$orderData)
                    @if($orderData->status != 'confirmed' && $orderData->passive == 1 )
                      @php
                      $style = 'style=background:#f3cbcb;';
                      @endphp
                    @else 
                      @php
                      $style = '';
                      @endphp
                    @endif
                        <tr {{ $style }}>
                            <td><input name="invoice[]" type="checkbox" value="{{ $orderData->id }}" /></td>
                            <td>{{ $orderData->id }}</td>
                            <td>{{ $orderData->ship_at }}</td>
                            <td>{{ $orderData['customer']->customers_firstname . ' ' . $orderData['customer']->customers_lastname }}</td>
                            <td>{{ $orderData->price }}</td>
                            <td>{{ $orderData['item']->products_name }}</td>
                            <td>{{ $orderData['count']  . ' Ay'}}</td>
                            <td>{{ $orderData['shipment_count']  . ' Ay'}}</td>
                            <td>{{ date('d/m/Y', strtotime($orderData['order']->date_purchased)) }} </td>
                            <td>
                            	@if($orderData->status=='pending')
                                <span class="label label-warning">
                                @elseif($orderData->orders_status_id=='paid')
                                    <span class="label label-success">
                                @elseif($orderData->orders_status_id=='cancel')
                                     <span class="label label-danger">
                                @else
                                     <span class="label label-primary">
                                @endif
                                {{ $orderData->status }}
                                     </span>
                            </td>
                            <td>
                            <a data-toggle="tooltip" data-placement="bottom" title="View Order" href="shipment/{{ $orderData->id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            
                             <a data-toggle="tooltip" data-placement="bottom" title="Delete Order" id="deleteOrdersId" orders_id ="{{ $orderData->orders_id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            
                            </td>
                            
                        </tr>
                    @endforeach
                  @else
                  	<tr>
                    	<td colspan="6"><strong>{{ trans('labels.NoRecordFound') }}</strong></td>
                    </tr>
                  @endif
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
			<h4 class="modal-title" id="deleteModalLabel">{{ trans('labels.DeleteOrder') }}</h4>
		  </div>
		  {!! Form::open(array('url' =>'admin/deleteOrder', 'name'=>'deleteOrder', 'id'=>'deleteOrder', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
				  {!! Form::hidden('action',  'delete', array('class'=>'form-control')) !!}
				  {!! Form::hidden('orders_id',  '', array('class'=>'form-control', 'id'=>'orders_id')) !!}
		  <div class="modal-body">						
			  <p>{{ trans('labels.DeleteOrderText') }}</p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
			<button type="submit" class="btn btn-primary" id="deleteOrder">{{ trans('labels.Delete') }}</button>
		  </div>
		  {!! Form::close() !!}
		</div>
	  </div>
	</div>
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 