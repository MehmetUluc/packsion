@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Influencers') }} <small>{{ trans('labels.Influencers') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.Influencers') }}</li>
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
		            <h3 class="box-title">Influencers</h3>
		            <div class="box-tools pull-right">
		            	<a href="/admin/influencers/add" type="button" class="btn btn-block btn-primary">Yeni Ekle</a>
		            </div>
		          </div>

                    
                </div>

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
                    	<th>ID</th>
                      <th>İsim</th>
                    	<th>İşlemler</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($influencers)>0)
                    @foreach ($influencers as $key=>$orderData)

                        <tr>
                            <td>{{ $orderData->id }}</td>
                            <td>{{ $orderData->name }}</td>

                            <td>
                            <a data-toggle="tooltip" data-placement="bottom" title="View Influencer" href="influencers/edit/{{ $orderData->id }}" class="badge bg-light-blue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            
                             <a data-toggle="tooltip" data-placement="bottom" href="influencers/delete/{{ $orderData->id }} title="Delete Influencer" id="deleteOrdersId" orders_id ="{{ $orderData->id }}" class="badge bg-red"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            
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

    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>
@endsection 