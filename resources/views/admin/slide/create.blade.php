@extends('admin.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.Slideshow') }} <small>{{ trans('labels.Slideshow') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/listingProducts')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.Slideshow') }}</a></li>
      <li class="active">{{ trans('labels.Slideshow') }}</li>
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
            <h3 class="box-title">{{ trans('labels.Slideshow') }} </h3>
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

                            {!! Form::open(array('url' =>'admin/slideshows', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}




                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Adı' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<input type="text" name="name" class="form-control field-validate">
                                      </div>
                                </div>


                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Açıklama' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<textarea type="text" name="top_label" class="form-control field-validate"></textarea>
                                      </div>
                                </div>
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Açıklama Gösterilsin mi?' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<select name="text" class="form-control">
                                            <option value="0">Hayır</option>
                                            <option value="1">Evet</option>
                                          </select>
                                      </div>
                                </div>

                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ 'Butonlar Gösterilsin mi?' }} </label>
                                      <div class="col-sm-10 col-md-4">
                                      		<select name="buttons" class="form-control">
                                            <option value="0">Hayır</option>
                                            <option value="1">Evet</option>
                                          </select>
                                      </div>
                                </div>



                                <div class="form-group">
                                  <label for="image" class="col-sm-2 col-md-3 control-label">Masaüstü Resim</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('image', array('id'=>'image')) !!}
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="tablet" class="col-sm-2 col-md-3 control-label">Mobil Resim</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('tablet', array('id'=>'tablet')) !!}
                                  </div>
                                </div>



                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">{{ 'Ekle' }}</button>
                                <a href="/admin/slideshows" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
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
