@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Shipments') }} <small>{{ trans('labels.ListingAllShipments') }}...</small> </h1>
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
            <h3 class="box-title">{{ trans('labels.ListingAllShipments') }} </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <!--<div class="row">
              <div class="col-sm-6">
                <div class="dataTables_length" id="example1_length">
                  <label>Show
                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                      <option value="10">10</option>
                      <option value="25">25</option>
                      <option value="50">50</option>
                      <option value="100">100</option>
                    </select>
                    entries</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div id="example1_filter" class="dataTables_filter">
                  <label>Search:
                    <input class="form-control input-sm" placeholder="" aria-controls="example1" type="search">
                  </label>
                </div>
              </div>
            </div>-->
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
			<div class="col-md-6">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Teslimat Bilgisi</h5>
					</div>

					<table class="table table-bordered table-striped table-hover">
						<tbody>
						<tr>
							<th style="width:30%;">Sipariş No:</th>
							<td><a href="/admin/viewOrder/<?php echo $shipment->order_id ?>" target="_blank"><b><?php echo $shipment->order_id ?></b></a></td>
						</tr>
						<tr>
							<th>Sipariş Tarihi:</th>
							<td><?php echo $shipment->created_at ?></td>
						</tr>
						<tr>
							<th>Teslimat Durumu:</th>
							<td>
								<form class="inline-form" method="POST">

									<div class="form-group">
										<select name="status" id="shipment_status" class="form-control">
											<option value="0">Lütfen Seçiniz</option>
											<option @if($shipment->status == 'paid') selected @endif value="paid">Hazırlanıyor</option>
											<option @if($shipment->status == 'shipped') selected @endif value="shipped">Kargoya Verildi</option>
											<option @if($shipment->status == 'pending') selected @endif value="pending">Ödeme Bekleniyor</option>
											<option @if($shipment->status == 'cancel') selected @endif value="cancel">İptal Edildi</option>
										</select>
									</div>

									<div style="display:none" class="form-group" id="div_tracking_number">
										<label for="shipment_meta_tracking_number">Kargo Takip Numarası</label>
										<input class="form-control" id="shipment_meta_tracking_number" type="text" name="tracking_number" value="<?php echo isset($shipment->tracking_number) ? $shipment->tracking_number : '' ?>" />
									</div>


								<div class="form-group text-center">
										<button class="btn btn-primary" type="submit" name="task" value="update_status">Güncelle</button>
									</div>

								</form>
							</td>
						</tr>
						</tbody>
					</table>

				</div>
			</div>
			<div class="col-md-6">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Hesap Bilgisi</h5>
					</div>

					<table class="table table-bordered table-striped table-hover">
						<tbody>
						<tr>
							<th style="width:30%;">Müşteri Adı:</th>
							<td><?php echo $order->customers_name ?></td>
						</tr>
						<tr>
							<th>Email:</th>
							<td><?php echo $order->customers_email_address ?></td>
						</tr>
						<tr>
							<th>Müşteri Grubu:</th>
							<td>Genel</td>
						</tr>
						<tr>
							<th>Üyelik Tarihi</th>
							<td>-</td>
						</tr>
						</tbody>
					</table>

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
    <div class="row">
      <div class="col-md-12">
        <div class="box">

          
          <!-- /.box-header -->
          <div class="box-body">


		<div class="row">
			<div class="col-md-5">
				<div class="ibox">
					<div class="ibox-title">
						<h5>Teslimat Adresi</h5>
					</div>
					<div class="ibox-content">
						<?php echo $order->customers_street_address ?><br />
						<?php echo $order->customers_suburb . ' ' . $order->customers_state . ' / ' . $order->customers_city ?><br />
						<?php echo $order->customers_telephone; ?>
					</div>
				</div>
			</div>

			


		<div class="ibox-content">
			@if($shipment->open == 0)
			<a class="btn btn-danger" href="/admin/shipments/open/<?php echo $shipment->id; ?>">Kutuyu Kapat</a>
			@else
			<a class="btn btn-success" href="/admin/shipments/open/<?php echo $shipment->id; ?>">Kutuyu Aç</a>
			@endif
					<a target="_blank" class="btn btn-primary" href="/admin/shipments/quiz/<?php echo $shipment->id; ?>">QUIZ SONUÇLARI</a>
					<a target="_blank" class="btn btn-primary" href="/admin/pdf/<?php echo $shipment->id; ?>">PDF ÇIKTI</a>
					<a target="_blank" class="btn btn-primary" href="/admin/shipments/import/<?php echo $shipment->id; ?>">EXCEL ÜRÜN YÜKLE</a>
					@if($shipment->open == 0)
					<a class="btn btn-primary" href="/admin/shipments/add_product/<?php echo $shipment->id; ?>">Ürün Ekle</a>
					@else
					<a class="btn btn-default" href="javascript:;">Ürün Ekle</a>
					@endif
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
    
      <!-- deleteModal -->
		<?php if ( isset ( $products ) AND count ( $products ) > 0 ):?>
			<table class="table table-striped table-bordered table-hover " id="order_items_list_table" >

				<thead>
				<tr>
					<th>ID</th>

					<th>Ürün</th>
					<th>Adet</th>
					<th>Fiyat</th>
					<th>Durum</th>
					<th>Sil</th>

				</tr>
				</thead>



				<tbody>
					<tbody>
				<?php foreach ( $products as $product ):?>
					<tr>
						<td><?php echo $product->product->products_id; ?></td>
						<td><?php echo $product->product->products_name ?></td>
						<td><?php echo 1 ?></td>
						<td><?php echo $product->shipment_price ?></td>
						@if($product->status == 1)
                        	<td> <a href="/cancel/product/{{ $product->id }}">İptal Et</a> </td>
                        @else 
                        	<td> <a href="/apply/product/{{ $product->id }}">Aktif Et</a> </td>
                        @endif
						<td><a class="btn btn-sm btn-danger" href="/admin/shipments/remove/<?php echo $shipment->id; ?>/{{ $product->id }}">Remove</a></td>


					</tr>
				<?php endforeach;?>
			</tbody>
			@if($shipment->status == 'paid')
				<tfoot>
					<form action="/payu/confirm/{{ $shipment->id }}" method="post">
						{{ csrf_field() }}
						<input type="text" name="tutar">
						<button type="submit">Tutarı Onayla</button>
					</form>
				</tfoot>
			@endif
				</tbody>

			</table>
		<?php endif; ?>
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 

@section('script')

<script type="text/javascript">

		var $shipment_status = $('#shipment_status');
	var $shipment_meta_estimated_time = $('#shipment_meta_estimated_time');

	var $div_tracking_number = $('#div_tracking_number');
	var $div_estimated_time = $('#div_estimated_time');

	function shipment_status_degisti()
	{
		var selected_value = $shipment_status.val();

		if (selected_value == 'shipped') {
			$div_tracking_number.show();
		} else {
			$div_tracking_number.hide();
		}

		if (selected_value == 'procurement') {
			$div_estimated_time.show();
		} else {
			$div_estimated_time.hide();
		}
	}

	$(document).ready(function() {

		shipment_status_degisti();

		$shipment_status.change(function() {
			shipment_status_degisti();
		});

		$shipment_meta_estimated_time.datepicker({
			keyboardNavigation: false,
			forceParse: false,
			autoclose: true,
			format: 'yyyy-mm-dd',
			clearBtn: true
		});

	});
	
</script>
	

@endsection