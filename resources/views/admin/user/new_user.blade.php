@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.AdminProfile') }} </h1>
    <ol class="breadcrumb">
      <li><a href="{{ URL::to('admin/dashboard/this_month')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.AdminProfile') }} </li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">

      <div class="row">

        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#profile" data-toggle="tab">{{ trans('labels.Profile') }}</a></li>

            </ul>
            <div class="tab-content">
              <div class=" active tab-pane" id="profile">
            	  @if (count($errors) > 0)
					  @if($errors->any())
                      <div class="alert alert-success alert-dismissible">
                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                        <h4><i class="icon fa fa-check"></i> {{ trans('labels.Success') }}</h4>
                        {{$errors->first()}}
                      </div>
                  	@endif
				  @endif
                <!-- The timeline -->
                   {!! Form::open(array('url' =>'admin/signup', 'method'=>'post', 'class' => 'form-horizontal', 'enctype'=>'multipart/form-data')) !!}


                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">{{ trans('labels.AdminFirstName') }}</label>
    
                        <div class="col-sm-10">
                          {!! Form::text('first_name', '', array('class'=>'form-control', 'id'=>'first_name'))!!}
                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                          {{ trans('labels.AdminFirstNameText') }}</span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="inputLastName" class="col-sm-2 control-label">{{ trans('labels.LastName') }}</label>
    
                        <div class="col-sm-10">
                          {!! Form::text('last_name', '', array('class'=>'form-control', 'id'=>'last_name'))!!}
                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                          {{ trans('labels.AdminLastNameText') }}</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">{{ trans('labels.Email') }}</label>
    
                        <div class="col-sm-10">
                          {!! Form::text('email', '', array('class'=>'form-control', 'id'=>'last_name'))!!}
                          <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                          {{ trans('labels.AdminLastNameText') }}</span>
                        </div>
                      </div>
                      <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">{{ trans('labels.NewPassword') }}</label>
          <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">{{ trans('labels.AdminPasswordRestriction') }}</span>
                      <span style="display: none" class="help-block"></span>
                    </div>
                  </div>


                      
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success">{{ trans('labels.Submit') }}</button>
                        </div>
                      </div>
                    {!! Form::close() !!}
              </div>
 
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  <!-- /.content --> 
</div>
@endsection 