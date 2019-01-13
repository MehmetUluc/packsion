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
              <div class="col-xs-12">
                <form method="post">
                  {{ csrf_field() }}
                  <div id="subproduct-inputs">





                  </div>



  <button type="button" id="addnewsubproduct" class="btn btn-primary">Add New Sub Product</button>
  <button class="btn btn-primary" type="submit">Kaydet</button>
  </form>
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


    <!-- Main row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection


@section('script')

  <script type="text/javascript">
  var $subproductInputs = $('#subproduct-inputs');
  var $subproductInput = $('.subproduct-input');
  var $addnewsubproduct = $('#addnewsubproduct');

  var productSelect2Config = {
    minimumInputLength: 1,
    ajax: {
      url: '/admin/api/products/search',
      dataType: 'json',
      delay: 250,
      processResults: function (data) {
        return {
          results: $.map(data, function (item) {
            return {
              id: item.products_id,
              text: item.products_name
            }
          })
        };
      }
    }
  };

  function selectedildiginde(event)
    {
      $(event.target).prev().val(event.params.data.id);
    }

  function sildenildiginde(event)
    {
      $(event.target).parent().parent().parent().parent().parent().remove();
    }
  $(function() {


    $addnewsubproduct.on('click', function() {

      var $html = $('<div class="form-group"><table style="width: 100%"><tbody><tr><td><input type="hidden" name="products[]" /><select class="form-control subproduct-input" style="width: 100%;"></select></td><td class="text-right"><button type="button" class="btn btn-danger delete-button">Sil</button></td></tr></tbody></table></div>');

      $html.find('.subproduct-input')
        .select2(productSelect2Config)
        .on('select2:select', selectedildiginde);

      $html.find('.delete-button').on('click', sildenildiginde);

      $subproductInputs.append($html);

    });

    $subproductInput.select2(productSelect2Config);
    $subproductInputs.find('.delete-button').on('click', sildenildiginde);

  });
</script>

@stop
