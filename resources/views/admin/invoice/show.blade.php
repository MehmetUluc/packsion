@extends('admin.layout')
@section('content')

<?php
$settings = json_decode($template->settings);

$currencies = [
    "USD" => "USD",
    "EUR" => "EUR",
];
$date_formats = [
    "d.m.Y" => "DD.MM.YYYY",
    "d/m/Y" => "DD/MM/YYYY",
    "d-m-Y" => "DD-MM-YYYY",
    "m.d.Y" => "MM.DD.YYYY",
    "m/d/Y" => "MM/DD/YYYY",
    "m-d-Y" => "MM-DD-YYYY",
    "Y.m.d" => "YYYY.MM.DD",
    "Y/m/d" => "YYYY/MM/DD",
    "Y-m-d" => "YYYY-MM-DD",
];
$paper_sizes = [
    'A5' => [148, 210],
    'A4' => [210, 297],
];

if ($settings->orientation == 'P') {
    $paper_width = $paper_sizes[$settings->paper_size][0];
    $paper_height = $paper_sizes[$settings->paper_size][1];
} else {
    $paper_width = $paper_sizes[$settings->paper_size][1];
    $paper_height = $paper_sizes[$settings->paper_size][0];
}
$background = !empty($template->background) ? asset('').'/'.$template->background  : '';
?>
<script>
    var placeholders = <?= json_encode($placeholders); ?>;
    var def = {
        fontFamily: 'Arial',
        fontSize: '<?= $settings->font_size; ?>px',
        fontStyle: 'normal',
        fontWeight: 'normal',
        color: '<?= $settings->font_color; ?>'
    };
</script>


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
            <div class="col-md-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h3>Invoice layout</h3>
                    </div>
                    <div class="ibox-content" style="background-color: #eee; overflow: scroll;">
                        <div id="invoice_area" style="width: <?= $paper_width ?>mm; height:<?= $paper_height ?>mm ; margin: 0 auto; background-color: #fff; position: relative;
                             background-image: url('<?= $background ?>'); background-repeat:no-repeat; background-position: top center;">
                             <?= $template->layout; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-title">
                        <h3>General Invoice Settings</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="currency">Currency</label>
                                <select name="currency" id="currency" class="form-control">
                                    <?php foreach ($currencies as $key => $value): ?>
                                        <option value="<?= $key; ?>" <?= (isset($settings->currency) && $settings->currency == $key) ? 'selected' : '' ?>><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="date_format">Date format</label>
                                <select name="date_format" id="date_format" class="form-control">
                                    <?php foreach ($date_formats as $key => $value): ?>
                                        <option value="<?= $key; ?>" <?= (isset($settings->date_format) && $settings->date_format == $key) ? 'selected' : '' ?>><?= $value; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-title">
                        <h3>Placeholder Search & Insert</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="form-group col-md-9">
                                <select class="form-control" id="placeholders_selector">
                                    <?php foreach ($placeholders as $key => $title): ?>
                                        <option value="<?= $key; ?>"><?= $title; ?></option>
                                    <?php endforeach; ?>
                                </select>

                            <div class="form-group col-md-12" id="selected_placeholders"></div>

                            <div class="form-group col-md-12">
                                <button id="delete_placeholder" class="btn btn-primary pull-right">Delete Placeholder</button>
                            </div>

                            <div class="form-group col-md-9">
                                <input class="form-control" type="text" id="new_label_text" placeholder="New Label"/>
                            </div>
                            <div class="form-group col-md-3">
                                <input class="btn btn-primary" type="button" id="add_new_label" value="Add" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-title">
                            <h3>Items Placeholders</h3><span>Make titles? <input type="checkbox" class="items-checkboxes" value="item-make-titles" /></span>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="form-group col-md-9">
                                <label><input type="checkbox" class="items-checkboxes" value="item-id" />ID</label>
                                <label><input type="checkbox" class="items-checkboxes" value="item-sku" />SKU</label>
                                <label><input type="checkbox" class="items-checkboxes" value="sub-item-sku" />Sub SKU</label>
                                <label><input type="checkbox" class="items-checkboxes" value="item-product" />Product Title</label>
                                <label><input type="checkbox" class="items-checkboxes" value="sub-item-product" />Sub Product Title</label>
                                <label><input type="checkbox" class="items-checkboxes" value="item-price" />Price</label>
                                <label><input type="checkbox" class="items-checkboxes" value="item-pieces" />Qty</label>
                                <label><input type="checkbox" class="items-checkboxes" value="sub-item-pieces" />Sub Item Qty</label>
                                <label><input type="checkbox" class="items-checkboxes" value="item-amount" />Amount</label>
                                <label><input type="checkbox" class="items-checkboxes" value="sub-item-price" />Sub Item Price</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ibox">
                    <div class="ibox-title">
                        <h3>Selected Placeholder Settings</h3>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Font</label>
                                <select name="" id="selected-font" class="form-control">
                                    <option>Arial</option>
                                    <option>Tahoma</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Font Style</label>
                                <select name="" id="selected-font-style" class="form-control">
                                    <option>normal</option>
                                    <option>italic</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Font Weight</label>
                                <select name="" id="selected-font-weight" class="form-control">
                                    <option>normal</option>
                                    <option>bold</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Font size</label>
                                <select name="" id="selected-font-size" class="form-control">
                                    <option>8</option>
                                        <option>9</option>
                                    <option>10</option>
                                        <option>11</option>
                                    <option>12</option>
                                        <option>13</option>
                                    <option>14</option>
                                        <option>15</option>
                                    <option>16</option>
                                    <option>18</option>
                                    <option>20</option>
                                    <option>22</option>
                                    <option>24</option>
                                    <option>26</option>
                                    <option>28</option>
                                    <option>30</option>
                                    <option>32</option>
                                    <option>34</option>
                                    <option>36</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="selected_font_color">Font color</label>
                                <select name="" id="selected-font-color" class="form-control">
                                    <option selected>black</option>
                                    <option>blue</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="text_align">Text align</label>
                                <select name="" id="placeholder-text-align" class="form-control">
                                    <option selected>left</option>
                                    <option>center</option>
                                    <option>right</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Width</label>
                                <input type="text" id="placeholder-width" class="form-control" value="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Height</label>
                                <input type="text" id="placeholder-height" class="form-control" value="" />
                            </div>

                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Top</label>
                                <input type="text" id="placeholder-top" class="form-control" value="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label" for="order_status">Left</label>
                                <input type="text" id="placeholder-left" class="form-control" value="" />
                            </div>
                        </div>
                    </div>
                </div>

                <button id="save" class="btn btn-primary pull-right">Save</button>

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

@section('script')

<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script type="text/javascript" src="//code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
		<script>
        $(document).ready(function () {
        var blocks = [];
        function readBlock(event, ui) {
            blocks[event.target.dataset.placeholder] = {
                top: ui.position.top,
                left: ui.position.left,
                width: event.target.offsetWidth,
                height: event.target.offsetHeight,
                font: event.target.style.fontFamily,
                fontStyle: event.target.style.fontStyle,
                fontWeight: event.target.style.fontWeight,
                fontSize: event.target.style.fontSize,
                fontColor: event.target.style.color
            };
            console.log(blocks);
        }

        function onDrag(event, ui) {
            $('#placeholder-top').val(ui.position.top + 'px');
            $('#placeholder-left').val(ui.position.left + 'px');
        }
        function onResize(event, ui) {
            $('#placeholder-width').val(event.target.offsetWidth + 'px');
            $('#placeholder-height').val(event.target.offsetHeight + 'px');
        }

        $('.placeholder').each(function () {
            $('#selected_placeholders').append('<span class="label">' + this.dataset.placeholder + '</span> ');
        });

        $('.placeholder').draggable({
            containment: "parent",
            drag: onDrag,
            stop: readBlock
        }).resizable({
            resize: onResize
        });


        $('div[data-placeholder="items"] > div').sortable();

        $('div[data-placeholder="items"] table tr td').resizable({
            liveDrag:true,
            containment: "parent",
            handles: "e"
        });

        $('#placeholders_selector').on('change', function () {
            console.log(this.name);

            var title = $("#placeholders_selector option:selected").text();
            if (this.value !== 'items') {
                $('<div class="placeholder ui-widget-content" data-placeholder="' + this.value + '">@{{' + this.value + '}}</div>')
                        .css({
                            'font-family': def.fontFamily,
                            'font-style': def.fontStyle,
                            'font-weight': def.fontWeight,
                            'font-size': def.fontSize + 'px',
                            'color': def.color,
                            'position': 'absolute',
                            'top': '0px',
                            'left': '0px',
                            'width': '200px',
                            'height': '30px',
                            'text-align': 'left'
                        }).appendTo('#invoice_area');
            } else {
                $('<div class="placeholder ui-widget-content" data-placeholder="' + this.value + '"></div>')
                        .css({
                            'font-family': def.fontFamily,
                            'font-style': def.fontStyle,
                            'font-weight': def.fontWeight,
                            'font-size': def.fontSize + 'px',
                            'color': def.color,
                            'position': 'absolute',
                            'overflow': 'hidden',
                            'top': '0px',
                            'left': '0px',
                            'width': '600px',
                            'height': '300px',
                            'text-align': 'left'
                        }).appendTo('#invoice_area');
                $('<div role="row" class=""><table style="width:100%"><tbody><tr></tr></tbody></table>'
                   // + '<span data-placeholder="item-id">@{item-id}}</span>'
                   // + '<span data-placeholder="item-sku">@{{item-sku}}</span>'
                   // + '<span data-placeholder="item-product">@{{item-product}}</span>'
                   // + '<span data-placeholder="item-price">@{{item-price}}</span>'
                        + '</div>')
                        .appendTo('[data-placeholder="items"]');
                $('div[data-placeholder="items"] table').resizable({
                    liveDrag:true,
                    containment: "parent",
                    handles: "e"
                });
                $('div[data-placeholder="items"] > div')
                        .css({
                            'list-style': 'none',
                            'margin': 0,
                            'padding': 0,
                            'overflow': 'hidden',
                            'outline': "1px dotted gray"
                        })
                        .sortable();
                $('div[data-placeholder="items"] > div table tr td').css({
                    'outline': "1px dotted gray",
                    'padding': '2px'
                }).resizable({
                    liveDrag:true,
                    containment: "parent",
                    handles: "e",
                });
            }
            $('#selected_placeholders').append('<span class="label">' + this.value + '</span> ');

            $('.placeholder').draggable({
                containment: "parent",
                drag: onDrag
            }).resizable({
                resize: onResize
            });
        });

        $('#add_new_label').click(function () {

            var text = $('#new_label_text').val();
            console.log(text);
            $('<div class="placeholder ui-widget-content" data-placeholder="label">' + text + '</div>')
                    .css({
                        'font-family': def.fontFamily,
                        'font-style': def.fontStyle,
                        'font-weight': def.fontWeight,
                        'font-size': def.fontSize + 'px',
                        'color': def.color,
                        'position': 'absolute',
                        'top': '0px',
                        'left': '0px',
                        'width': '200px',
                        'height': '30px',
                        'text-align': 'left'
                    }).appendTo('#invoice_area');

            $('.placeholder').draggable({
                containment: "parent",
                drag: onDrag
            }).resizable({
                resize: onResize
            });
        });

        $('#invoice_area').on('click', '.placeholder', function () {
            $('.selected').removeClass('selected');
            $(this).addClass('selected');
            $('#selected-font').val($(this).css('font-family'));
            $('#selected-font-style').val($(this).css('font-style'));
            $('#selected-font-size').val($(this).css('font-size'));
            $('#selected-font-color').val($(this).css('color'));
            $('#placeholder-text-align').val($(this).css('text-align'));

            $('#placeholder-top').val($(this).css('top'));
            $('#placeholder-left').val($(this).css('left'));
            $('#placeholder-width').val($(this).css('width'));
            $('#placeholder-height').val($(this).css('height'));
        });

        $('#invoice_area').on('click', 'span', function (event) {
            $('.selected').removeClass('selected');
            $(this).addClass('selected');

            event.stopPropagation();
        });


        $('#selected-font').on('change', function () {
            $('.selected').css('font-family', this.value);
        });
        $('#selected-font-style').on('change', function () {
            $('.selected').css('font-style', this.value);
        });
        $('#selected-font-weight').on('change', function () {
            $('.selected').css('font-weight', this.value);
        });
        $('#selected-font-size').on('change', function () {
            $('.selected').css('font-size', this.value + 'px');
        });
        $('#selected-font-color').on('change', function () {
            $('.selected').css('color', this.value);
        });

        $('#placeholder-text-align').on('change', function () {
            $('.selected').css('text-align', this.value);
        });
        $('#placeholder-top').on('change', function () {
            $('.selected').css('top', this.value);
        });
        $('#placeholder-left').on('change', function () {
            $('.selected').css('left', this.value);
        });
        $('#placeholder-width').on('change', function () {
            $('.selected').css('width', this.value);
        });
        $('#placeholder-height').on('change', function () {
            $('.selected').css('height', this.value);
        });

        $('#delete_placeholder').click(function () {
            $('.selected').remove();
        });
        $('#save').click(function () {
            $('.placeholder').draggable("destroy").resizable("destroy");
            $('div[data-placeholder="items"] > div').sortable("destroy");
            $('div[data-placeholder="items"] > div div').resizable("destroy");

            var _layout = $('#invoice_area').html();
            var _date_format = $('#date_format').val();
            var _currency = $('#currency').val();
            $.ajax({
                url: '',
                data: {
                    layout: _layout,
                    settings: {
                        date_format: _date_format,
                        currency: _currency
                    }
                },
                method: 'post',
                success: function (resp) {
                    alert("Template Saved!");
                    $('.placeholder').draggable().resizable();

                    $('div[data-placeholder="items"] > div').sortable();
                    $('div[data-placeholder="items"] > div div').resizable({
                        containment: "parent",
                        handles: "e"
                    });
                }
            });
        });

        $('div[role="row"] table tr td[data-placeholder]').each(function() {
            console.log( $('.items-checkboxes[value="'+this.dataset.placeholder+'"]').val());
            $('.items-checkboxes[value="'+this.dataset.placeholder+'"]').attr('checked', 'checked');
        });

        $('.items-checkboxes').on('change', function () {
            var placeholder = this.value;
            if (this.value=='item-make-titles'){
            if(this.checked) {
                    $('div[role="row"]').attr('item-make-titles', '1');
                }else{
                    $('div[role="row"]').removeAttr('item-make-titles');
                }
                return;
            }
            if(this.checked) {
                $('<td data-placeholder="' + placeholder + '">{{' + placeholder + '}}</td>')
                    .css({
                        'outline': "1px dotted gray",
                        'padding': '2px'
                    })
                    .resizable({
                        containment: "parent",
                        handles: "e",
                        liveDrag:true
                    })
                    .appendTo('div[role="row"] table tr');


            } else {
                console.log(placeholder);
                $('[data-placeholder="' + placeholder + '"]').remove();
            }
        });
    });
</script>  

@stop