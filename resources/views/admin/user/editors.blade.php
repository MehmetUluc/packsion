@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('Editörler') }} <small>{{ trans('Editörler') }}...</small> </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('Editörler') }}</li>
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
            <h3 class="box-title">{{ trans('Editörler') }} </h3>
            <div class="box-tools pull-right">
              <a href="signup" type="button" class="btn btn-block btn-primary">{{ trans('Editörler Ekle') }}</a>
            </div>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
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
                      <th>{{ trans('labels.ID') }}</th>

                      <th>{{ trans('labels.Adı Soyadı') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                   @if (count($editors) > 0)
            @foreach ($editors  as $key=>$listingCustomers)
              <tr>
                <td>{{ $listingCustomers->myid }}</td>
             
                <td>
                  {{ $listingCustomers->first_name . ' ' . $listingCustomers->last_name }}
                                    </td>
                                    
               

              </tr>
            @endforeach
                    @else
                      <tr>
              <td colspan="4">{{ trans('labels.NoRecordFound') }}</td>              
            </tr>
                    @endif
                  </tbody>
                </table>
                @if (count($editors) > 0)
          <div class="col-xs-12 text-right">
            {{$editors->links()}}
          </div>
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
   
    <!-- deleteCustomerModal -->
  <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h4 class="modal-title" id="deleteCustomerModalLabel">{{ trans('labels.DeleteCustomer') }}</h4>
      </div>
      {!! Form::open(array('url' =>'admin/deleteCustomers', 'name'=>'deleteCustomer', 'id'=>'deleteCustomer', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}
          {!! Form::hidden('action',  'delete', array('class'=>'form-control')) !!}
          {!! Form::hidden('customers_id',  '', array('class'=>'form-control', 'id'=>'customers_id')) !!}
      <div class="modal-body">            
        <p>{{ trans('labels.DeleteCustomerText') }}</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('labels.Close') }}</button>
      <button type="submit" class="btn btn-primary">{{ trans('labels.DeleteCustomer') }}</button>
      </div>
      {!! Form::close() !!}
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
@endsection 