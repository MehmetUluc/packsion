@extends('admin.layout')
@section('content')


@php

$markas = array(
    "001"=>"KOTON",
    "002"=>"MAVI JEANS",
    "003"=>"DESA",
    "004"=>"OXXO",
    "005"=>"DERIMOD",
    "006"=>"COLIN`S & LOFT ( EROGLU GIYIM)",
    "007"=>"IPEKYOL - MACHKA- TWIST",
    "008"=>"MUDO",
    "009"=>"NETWORK-FABRIKA",
    "010"=>"VAKKO-VAKKORAMA",
    "011"=>"BEYMEN-BEYMEN CLUB",
    "012"=>"YARGICI ( OUTLET) ",
    "013"=>"JACK JONES -VERO MODA -ONLY",
    "014"=>"PIERRE CARDIN",
    "015"=>"LIMON COMPANY",
    "016"=>"LEVI'S",
    "017"=>"ROMAN",
    "018"=>"BSL",
    "019"=>"NESLIHAN CANPOLAT",
    "020"=>"DILVIN",
    "021"=>"TUBA OLMEZ",
    "022"=>"ROBERTO NISANTASI",
    "023"=>"MY DÜKKAN",
  );

$genders = array(
    '001'=> 'Erkek',
    '002'=> 'Kadın',
    '003'=> 'Unisex',
);

$collections = array(

      '001'=>'Üst',
      '002'=> 'Alt',
);

$stils = array(
    '001'=>'Casual',
    '002'=>'Smart Casual',
    '003'=>'Classic',
    '004'=>'Fashion Forward',
    '005'=>'Business',
    '099'=>'Diğer'
);

$types = array(
  '001'=>"AKSESUAR",
  '002'=>"ASKILI",
  '003'=>"AYAKKABI",
  '004'=>"BLUZ",
  '005'=>"BÜSTIYER",
  '006'=>"CANTA",
  '007'=>"CEKET",
  '008'=>"ELBISE",
  '009'=>"ETEK",
  '010'=>"GÖMLEK",
  '011'=>"HIRKA",
  '012'=>"KABAN",
  '013'=>"KAP/PARDESÜ",
  '014'=>"KAZAK/TRIKO",
  '015'=>"KIMONO",
  '016'=>"MINI ÜST",
  '017'=>"MONT",
  '018'=>"PANCO",
  '019'=>"PANTOLON",
  '020'=>"PARKA",
  '021'=>"SAHTE KÜRK",
  '022'=>"SORT",
  '023'=>"SÜVETER",
  '024'=>"SWEATSHIRT",
  '025'=>"TAKI",
  '026'=>"TAKIM ELBISE",
  '027'=>"TRENCKOT",
  '028'=>"T-SHIRT",
  '029'=>"TULUM",
  '030'=>"TUNIK",
  '031'=>"YAGMURLUK",
  '032'=>"YELEK",
  '099'=>"Diğer",

);

$types2 = array(

"001"=>"ABIYE",
"002"=>"ANAHTARLIK",
"003"=>"ATKI",
"004"=>"BABET",
"005"=>"BAVUL",
"006"=>"BERE",
"007"=>"BERMUDA",
"008"=>"BILEKLIK",
"009"=>"BLAZER",
"010"=>"BOMBER",
"011"=>"BOT",
"012"=>"BOYFRIEND",
"013"=>"BROS",
"014"=>"CAN",
"015"=>"CAN ETEK ",
"016"=>"CAPRAZ ASKI",
"017"=>"CASUAL",
"018"=>"CHARM",
"019"=>"CIGARETTE",
"020"=>"CIZME",
"021"=>"CLUTCH",
"022"=>"CÜZDAN",
"023"=>"DERI",
"024"=>"DERI SORT",
"025"=>"DOLGU TOPUK",
"026"=>"DÜZ",
"027"=>"ELDIVEN",
"028"=>"ESOFMAN ALTI",
"029"=>"ESPADRIL",
"030"=>"EVRAK",
"031"=>"FULAR",
"032"=>"GÜNLÜK",
"033"=>"HALHAL",
"034"=>"HIRKA",
"035"=>"ISPANYOL",
"036"=>"JEAN/KOT",
"037"=>"KALEM",
"038"=>"KISA",
"039"=>"KISA PANTOLON",
"040"=>"KLASIK",
"041"=>"KOL",
"042"=>"KOL DÜGMESI",
"043"=>"KOLYE",
"044"=>"KUMAS",
"045"=>"KÜPE",
"046"=>"LAPTOP/IPAD",
"047"=>"LOAFER",
"048"=>"MAKYAJ",
"049"=>"MIDI",
"050"=>"MINI",
"051"=>"MUM",
"052"=>"OFIS ",
"053"=>"OXFORD",
"054"=>"PIERCING",
"055"=>"PILELI ",
"056"=>"PLATFORM",
"057"=>"PUF YELEK",
"058"=>"SAAT",
"059"=>"SAC AKSESUARI",
"060"=>"SAL",
"061"=>"SANDALET",
"062"=>"SAPKA",
"063"=>"SEMSIYE",
"064"=>"SEYAHAT",
"065"=>"SIRT",
"066"=>"SKINNY",
"067"=>"SPOR",
"068"=>"STILETTO",
"069"=>"TAYT",
"070"=>"TERLIK",
"071"=>"TOTE",
"072"=>"TRIKO",
"073"=>"UZUN",
"074"=>"VÜCUT KOLYESI",
"075"=>"YAGMUR CIZMESI",
"076"=>"YELEK",
"077"=>"YÜKSEK BEL",
"078"=>"YÜZÜK",
"099"=>"Diğer",

);

$colors = array(

  '001'=>"Beyaz",
  '002'=>"Siyah",
  '003'=>"Gri",
  '004'=>"Koyu Kahve",
  '005'=>"Orta Kahve",
  '006'=>"Krem",
  '007'=>"Asker Yeşili",
  '008'=>"Yeşil",
  '009'=>"Koyu Mavi",
  '010'=>"Orta Mavi",
  '011'=>"Açık Mavi",
  '012'=>"Mor",
  '013'=>"Kırmızı",
  '014'=>"Turuncu",
  '015'=>"Sarı",
  '016'=>"Pembe",
  '017'=>"Altın",
  '018'=>"Gümüş",
  '019'=>"Diğer",
);

$sizes = array(

"001"=>"XS",
"002"=>"S",
"003"=>"M",
"004"=>"L",
"005"=>"XL",
"006"=>"XXL",
"007"=>"3XL",
"008"=>"4XL",
"009"=>"24",
"010"=>"25",
"011"=>"26",
"012"=>"27",
"013"=>"28",
"014"=>"29",
"015"=>"30",
"016"=>"31",
"017"=>"32",
"018"=>"33",
"019"=>"34",
"020"=>"35",
"021"=>"36",
"022"=>"37",
"023"=>"38",
"024"=>"39",
"025"=>"40",
"026"=>"41",
"027"=>"42",
"028"=>"43",
"029"=>"44",
"030"=>"45",
"031"=>"46",
"032"=>"47",
"033"=>"48",
"034"=>"49",
"035"=>"50",
"036"=>"51",
"037"=>"52",
"038"=>"53",
"039"=>"54",
"040"=>"55",
"041"=>"56",
"042"=>"57",
"043"=>"58",
"044"=>"59",
"045"=>"60",
"046"=>"61",
"047"=>"62",
"048"=>"63",
"049"=>"64",
);

@endphp


<div class="content-wrapper"> 
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1> {{ trans('labels.AddProduct') }} <small>{{ trans('labels.AddProduct') }}...</small> </h1>
    <ol class="breadcrumb">
       <li><a href="{{ URL::to('admin/dashboard/this_month') }}"><i class="fa fa-dashboard"></i> {{ trans('labels.breadcrumb_dashboard') }}</a></li>
      <li><a href="{{ URL::to('admin/listingProducts')}}"><i class="fa fa-dashboard"></i> {{ trans('labels.ListingAllProducts') }}</a></li>
      <li class="active">{{ trans('labels.AddProduct') }}</li>
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
            <h3 class="box-title">{{ trans('labels.AddNewProduct') }} </h3>
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
                        
                            {!! Form::open(array('url' =>'admin/addNewProduct', 'method'=>'post', 'class' => 'form-horizontal form-validate', 'enctype'=>'multipart/form-data')) !!}
                            
								<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Category') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" id="category_id" name="category_id" onChange="getSubCategory();">
                                         <option value="">{{ trans('labels.Category') }}</option>
                                        @foreach ($result['categories'] as $categories)
                                       		 <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.ChooseCatgoryText') }}.</span>
                                      <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                  </div>
                                </div>


                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.SubCategory') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" name="sub_category_id" id="sub_category_id">
                                        <option value="">{{ trans('labels.ChooseSubCategory') }}</option>
                                      </select>
                                  	  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  	  {{ trans('labels.ChooseSubCatgoryText') }}</span>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="influencer_id" class="col-sm-2 col-md-3 control-label">{{ 'Influencer' }}</label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" id="influencer_id" name="influencer_id">
                                         <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($result['influencers'] as $categories)
                                           <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                                        @endforeach
                                      </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label for="gender" class="col-sm-2 col-md-3 control-label">{{ 'Cinsiyet' }}</label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" id="gender" name="gender">
                                         <option value="">{{ 'Seçiniz' }}</option>
                                        
                                           @foreach ($genders as $key => $gender)
                                            <option value="{{$key}}">{{ $gender }}</option>

                                           @endforeach
                                        
                                      </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('Marka') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="marka">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($markas as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                      	 @endforeach
                                      </select>
                                  </div>
                                </div>
                              
                                <div class="form-group">
                                  <label for="koleksiyon" class="col-sm-2 col-md-3 control-label">{{ trans('Koleksiyon') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="koleksiyon">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($collections as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="stil" class="col-sm-2 col-md-3 control-label">{{ trans('Stil') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="stil">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($stils as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="types" class="col-sm-2 col-md-3 control-label">{{ trans('Ürün') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="types">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($types as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="types2" class="col-sm-2 col-md-3 control-label">{{ trans('Ürün Tipi') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="types2">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($types2 as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="color" class="col-sm-2 col-md-3 control-label">{{ trans('Renk') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="color">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($colors as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="size" class="col-sm-2 col-md-3 control-label">{{ trans('Beden') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="size">
                                        <option value="">{{ 'Seçiniz' }}</option>
                                        @foreach ($sizes as $key => $marka)
                                          <option value="{{ $key }}">{{ $marka}}</option>
                                         @endforeach
                                      </select>
                                  </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Special') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                       <select class="form-control" onChange="showSpecial()" name="isSpecial" id="isSpecial">
                                          <option value="no">{{ trans('labels.No') }}</option>
                                          <option value="yes">{{ trans('labels.Yes') }}</option>
                                      </select>
                                  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                  {{ trans('labels.SpecialProductText') }}.</span>
                                  </div>
                                </div>
                                
                                <div class="special-container" style="display: none;">
									<div class="form-group">
									  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.SpecialPrice') }}</label>
									  <div class="col-sm-10 col-md-4">
									  	<input  class="form-control" type="text" name="specials_new_products_price" id="special-price" value="">
                                        <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.SpecialPriceTxt') }}.</span>
                                        <span class="help-block hidden">{{ trans('labels.SpecialPriceNote') }}.</span>
									  </div>
									</div>
                              		<div class="form-group">
                              		
									  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ExpiryDate') }}</label>
									  
									  <div class="col-sm-10 col-md-4">
									  	<input  class="form-control datepicker" type="text" name="expires_date" id="expiry-date" value="">
				   					    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                        {{ trans('labels.SpecialExpiryDateTxt') }}
                                       </span>
                                        <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
									  </div>
									</div>
                              		<div class="form-group">
									  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Status') }}</label>
									  <div class="col-sm-10 col-md-4">
										  <select class="form-control" name="status">
											  <option value="1">{{ trans('labels.Active') }}</option>
											  <option value="0">{{ trans('labels.Inactive') }}</option>
                                          </select>
									  	  <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    	  {{ trans('labels.ActiveSpecialProductText') }}.</span>									  
                                      </div>
									</div>
                               	</div>
                                <hr>
                                <!--<div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Product URL</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('products_url',  '', array('class'=>'form-control', 'id'=>'products_url')) !!}
                                  </div>
                                </div>-->
                                
                              @foreach($result['languages'] as $languages)
                                
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductName') }} ({{ $languages->name }})</label>
                                      <div class="col-sm-10 col-md-4">
                                      		<input type="text" name="products_name_<?=$languages->languages_id?>" class="form-control field-validate">
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                           {{ trans('labels.EnterProductNameIn') }} {{ $languages->name }} </span>
                                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                </div>

                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('SKU') }}</label>
                                      <div class="col-sm-10 col-md-4">
                                          <input type="text" name="sku" class="form-control field-validate" value="{{ $result['latest'] }}">
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                           Enter product SKU </span>
                                            <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                      </div>
                                </div>
                                
                                
                                <div class="form-group">
                                      <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Description') }} ({{ $languages->name }})</label>
                                      <div class="col-sm-10 col-md-8">
                                      		<textarea id="editor<?=$languages->languages_id?>" name="products_description_<?=$languages->languages_id?>"class="form-control" rows="5"></textarea>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.EnterProductDetailIn') }} {{ $languages->name }}</span>
                                      </div>
                                </div>
                              @endforeach
                                
                               
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">Tax Class </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control field-validate" name="tax_class_id">
                                        <option selected>{{ trans('labels.SelectTaxClass') }}</option>
                                         @foreach ($result['taxClass'] as $taxClass)
                                          <option value="{{ $taxClass->tax_class_id }}">{{ $taxClass->tax_class_title }}</option>
                                      	 @endforeach
                                      </select>                                      
                                  		<span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                     {{ trans('labels.ChooseTaxClassForProductText') }}
                                     </span>
                                      <span class="help-block hidden">{{ trans('labels.SelectProductTaxClass') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsPrice') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('products_price',  '', array('class'=>'form-control number-validate', 'id'=>'products_price')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ProductPriceText') }}
                                    </span>
                                  
                                    <span class="help-block hidden">{{ trans('labels.ProductPriceText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsWeight') }}</label>
                                  <div class="col-sm-10 col-md-3">
                                    {!! Form::text('products_weight',  '', array('class'=>'form-control', 'id'=>'products_weight')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.RequiredTextForWeight') }}
                                    </span>
                                  </div>
                                  <div class="col-sm-10 col-md-1" style="padding-left: 0;">
                                  	  <select class="form-control" name="products_weight_unit">
                                          <option value="g">{{ trans('labels.gram') }}</option>
                                          <option value="kg">{{ trans('labels.KiloGram') }}</option>
                                      </select>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsModel') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('products_model',  '', array('class'=>'form-control', 'id'=>'products_model')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ProductsModelText') }}
                                    </span>
                                    <span class="help-block hidden">{{ trans('labels.textRequiredFieldMessage') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.ProductsQuantity') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('products_quantity',  '', array('class'=>'form-control number-validate', 'id'=>'products_quantity')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.ProductsQuantityText') }}
                                    </span>
                                    <span class="help-block hidden">{{ trans('labels.ProductsQuantityText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.QuantityLowLimit') }}
                                  </label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::text('low_limit',  '', array('class'=>'form-control', 'id'=>'low_limit')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.QuantityLowLimitText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Image') }}</label>
                                  <div class="col-sm-10 col-md-4">
                                    {!! Form::file('products_image', array('id'=>'products_image')) !!}
                                    <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                    {{ trans('labels.UploadProductImageText') }}</span>
                                  </div>
                                </div>
                                
                                <div class="form-group">
                                  <label for="name" class="col-sm-2 col-md-3 control-label">{{ trans('labels.Status') }} </label>
                                  <div class="col-sm-10 col-md-4">
                                      <select class="form-control" name="products_status">
                                          <option value="1">{{ trans('labels.Active') }}</option>
                                          <option value="0">{{ trans('labels.Inactive') }}</option>                                       
                                      </select>
                                      <span class="help-block" style="font-weight: normal;font-size: 11px;margin-bottom: 0;">
                                      {{ trans('labels.SelectStatus') }}</span>
                                  </div>
                                </div>
                                
                              <!-- /.box-body -->
                              <div class="box-footer text-center">
                                <button type="submit" class="btn btn-primary">{{ trans('labels.AddProduct') }}</button>
                                <a href="listingProducts" type="button" class="btn btn-default">{{ trans('labels.back') }}</a>
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
<script src="{!! asset('resources/views/admin/plugins/jQuery/jQuery-2.2.0.min.js') !!}"></script>
<script type="text/javascript">
		$(function () {
			
			//for multiple languages
			@foreach($result['languages'] as $languages)
				// Replace the <textarea id="editor1"> with a CKEditor
				// instance, using default configuration.
				CKEDITOR.replace('editor{{$languages->languages_id}}');
			
			@endforeach
			
			//bootstrap WYSIHTML5 - text editor
			$(".textarea").wysihtml5();
			
    });
</script>
@endsection 