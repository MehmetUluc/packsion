@extends('admin.layout')
@section('content')
<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.invoices') }} </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li class="active">{{ trans('labels.invoices') }}</li>
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
            <h3 class="box-title">{{ trans('labels.invoices') }} </h3>
            <div class="box-tools pull-right">
            	<a href="addTemplate" type="button" class="btn btn-block btn-primary">{{ trans('labels.addInvoice') }}</a>
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

                  <form role="form" class="form-horizontal" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="template[title]" required 
                                   placeholder="Title of template" 
                                   value="<?= isset($template->title) ? $template->title : '' ?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-4">
                            <textarea class="form-control" name="template[description]" required 
                                      placeholder="Description"><?= isset($template->description) ? $template->description : '' ?></textarea>
                        </div>
                    </div>



                    <div class="hr-line-dashed"></div>

                    <?php if (!empty($template['font_types'])): ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Font Type</label>
                            <div class="col-sm-4">
                                <select type="text" class="form-control" name="template[settings][font_type]" required>
                                    <?php foreach ($template['font_types'] as $key => $value): ?>
                                        <option value="<?= $value; ?>"><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($template['font_sizes'])): ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Font Size</label>
                            <div class="col-sm-4">
                                <select type="text" class="form-control" name="template[settings][font_size]" required>
                                    <?php foreach ($template['font_sizes'] as $key => $value): ?>
                                        <option value="<?= $value; ?>"><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($template['font_colors'])): ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Font Color</label>
                            <div class="col-sm-4">
                                <?php foreach ($template['font_colors'] as $key => $value): ?>
                                    <label for="color-<?= $key; ?>" style="display: inline-block; width: 40px; height: 60px; text-align: center;">
                                        <div style="height: 40px; background-color: <?= $value; ?>;" ></div>
                                        <input type="radio" id="color-<?= $key; ?>" name="template[settings][font_color]" 
                                               value="<?= $value; ?>" required />
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($template['paper_sizes'])): ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Paper Size</label>
                            <div class="col-sm-4">
                                <select type="text" class="form-control" name="template[settings][paper_size]" required>
                                    <?php foreach ($template['paper_sizes'] as $key => $value): ?>
                                        <option value="<?= $value; ?>"><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($template['orientations'])): ?>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Paper Orientation</label>
                            <div class="col-sm-4">
                                <?php foreach ($template['orientations'] as $key => $value): ?>
                                    <label for="orientation-<?= $key; ?>">
                                        <input type="radio" id="orientation-<?= $key; ?>" 
                                               name="template[settings][orientation]" value="<?= $key; ?>" required 
                                                /><?= $value; ?>
                                    </label>
                                <?php endforeach; ?>                        
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Background Image</label>
                        <div class="col-sm-4">
                            <?php if (!empty($template->settings['background'])): ?> 
                            <input type="hidden" name="template[settings][background]" value="<?= $template->settings['background']; ?>" />
                            <span><?= $template->settings['background']; ?></span> 
                            <?php else: ?>
                                <input type="file" class="form-control" name="file"/>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="hr-line-dashed"></div>

                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-primary" type="submit">Kaydet</button>
                        </div>
                    </div>

                </form>


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