@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Influencer') }} <small>{{ trans('labels.Influencer') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/listingProducts')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.Influencer') }}</a></li>
      <li class="active">{{ trans('labels.Influencer') }}</li>
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
            <h3 class="box-title">{{ trans('labels.Influencer') }} </h3>
          </div>
          
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-xs-12">
              		<div class="box box-info">
                        <!--<div class="box-header with-border">
                          <h3 class="box-title">Edit Product</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <!-- form start -->                        
                         <div class="box-body">
                          @if( count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                    <span class="sr-only">{{ trans('labels.Error') }}:</span>
                                    {{ $error }}
                                </div>
                             @endforeach
                          @endif
                        
                            {!! Form::open(array('url' =>'admin/influencers', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                            
                                

                                
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Adı' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<input type="text" name="name" class="form-control field-validate">
                                      </div>
                                </div>

                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Bio' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<textarea type="text" name="bio" class="form-control field-validate"></textarea>
                                      </div>
                                </div>

                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Video' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<input type="text" name="video" placeholder="Youtube Linki Ekleyin" class="form-control field-validate">
                                      </div>
                                </div>


                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Fotoğraf</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('photo', array('id'=>'photo')) !!}
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Video Kapak Foto</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('video_kapak', array('id'=>'video_kapak')) !!}
                                  </div>
                                </div>

                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">{{ 'Ekle' }}</button>
                                <a href="/admin/influencers" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
                              </div>
                              
                              <!-- /.box-footer -->
                            {!! Form::close() !!}
                        </div>
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
    
    <!-- Main row --> 
    
    <!-- /.row --> 
  </section>
  <!-- /.content --> 
</div>

@endsection 