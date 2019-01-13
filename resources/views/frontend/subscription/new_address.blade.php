@extends('layouts.app')

@section('content')



 <div class="main-container">
            

            <div class="bg-image bg-ch-aa-image">
            </div>

            <div class="main-form new_address-form" >
                
                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="address[title]" id="tag" placeholder="Adres Etiketiniz (örn: iş, ev..)" required="" aria-required="true" class="valid" aria-invalid="false">
                    </div>

                    <div class="form-group">
                        
                        <input type="text" id="name" name="address[name]" placeholder="Adın"  minlength="2" required="" aria-required="true">
                    </div>

                    <div class="form-group">
                        
                        <input type="text" id="surname" name="address[lastname]" placeholder="Soyadın" required="" aria-required="true">
                    </div>
                    
                    <div class="form-group">
                      <textarea id="address" name="address[address]" required="" aria-required="true" placeholder="Açık Adresiniz" style="color: #fff; background: rgba(10, 10, 10, 0.8)"></textarea>
                    </div>

                    <div class="row">

                      <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                              <select name="address[state]" id="city" class="btn-lg w100p" data-rule-required="true" aria-required="true" style="width:100%;">
                              <option value="">Şehir Seç</option>
                              @foreach($states as $state)

                                <option data-id="{{ $state->id }}"" value="{{ $state->name }}">{{ $state->name }}</option>
                              @endforeach
                              </select>
                            </div>
                      </div>

                      <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                              <select name="address[district]" id="district" class="btn-lg w100p" data-rule-required="true" aria-required="true" style="width:100%;"> <option value="">İlçe Seç</option>
                              </select>
                            </div>
                      </div>
                   
                     </div>

                   
                      <div class="row">
                      <div class="col-md-6 col-xs-12">
                        <div class="form-group">
                        
                           <input type="text" id="county" name="address[town]" multiple="" placeholder="Semt" required="" data-msg="" aria-required="true">
                        </div>
                      </div>

                      <div class="col-md-6 col-xs-12">
                         <div class="form-group">
                        
                           <input type="text" id="post-code" class="onlyNumeric"  name="address[post_code]"  placeholder="Posta Kodu">
                        </div>
                      </div>
                    </div>
                    


                    <div class="form-group" >
                       
                        <input type="text" id="phone" class="onlyNumeric" name="address[phone]" placeholder="Telefon Numaranız" required="" maxlength="14" aria-required="true">
                    </div>

                    <div class="form-group button">
                        <button  type="submit" class="btn btn-default">Adresi Kayıt Et</button>
                    </div>

                </form>
            </div>
            

</div>



  <script>
  document.body.className += " hidden-footer";
  </script>


@stop


@section('script')

  <script type="text/javascript">
            var $state      = $('#city');
            var $district   = $('#district');




jQuery("#city").on("change", function() {
  jQuery("#district").find(":not(:first)").remove();
  jQuery.getJSON( "/state/" + jQuery("#city option:selected").attr("data-id") + "/district", function( data ) {
    jQuery.each(data, function(i, item) {
      jQuery("#district").append("<option data-ilce='" + item.tid + "' value='" + item.name + "'>" + item.name + "</option>");
    });
  });
});

  </script>

@endsection
