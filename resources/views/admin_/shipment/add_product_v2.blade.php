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
      <div class="col-md-3">
        <div class="box">
          
          <!-- /.box-header -->
          <div class="box-body">
            <a class="btn btn-success" href="/admin/shipment/{{ request()->segment(4) }}">Teslimata Dön</a>
            <form id="filter" class="form-horizontal">
          		@foreach($result['data'] as $group)
          			<h2> {{ $group->products_options_name }} </h2>
          			@foreach($group->values as $option)
          			<input @if(request()->get('filter') && in_array($option->products_options_values_id, request()->get('filter'))) checked @endif name="filter[]" type="checkbox" value="{{$option->products_options_values_id}}">	{{$option->products_options_values_name}} 
          			@endforeach
          		@endforeach
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

            @foreach($products as $product)
            <div class="col-md-4 prod">
              <form method="post">
                <div class="image-area">
                  @if($product->products_image != '')
                   <img style="width:200px !important; height:133px !important" class="img-responsive responsive-img" src="/{{ $product->products_image }}" width="200" height="133" />
                  @else
                    <img src="/images/no-image.jpg" />
                  @endif
                </div>
                {{ $product->products_name }}<br>
                <input type="hidden" name="products[]" value="{{ $product->products_id }}">
                  <button type="submit" class="btn btn-label btn-primary">Ekle</button>
              </form>
            </div>
            
            @endforeach
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
@endsection 
@section('script')
  <script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery("#filter").on("change", "input:checkbox", function(){
        jQuery("#filter").submit();
    });
});
  </script>

@stop


