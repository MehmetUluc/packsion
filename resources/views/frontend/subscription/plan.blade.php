@extends('layouts.app')

@section('content')




        <div class="main-container ">
            <div class="bg-image bg-plan">
            </div>

            <div class="main-form plan-form full-form" >
              <div class="left-form">
                <div class="modal1" style="display:none;">
                    <img src="https://static.packsion.com/media/5946d6cc5d70f.png" />
                      <div class="modal-body" style="padding:20px;">
                          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 250 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
                        </div>
                        <div class="modal-footer " style="background-color:#046697;" >
                        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
                        </div>

                  </div> 

                  <div class="modal2" style="display:none;">
                    <img src="http://static.packsion.com/media/5946d757de861.png" />
                      <div class="modal-body" style="padding:20px;">
                          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 500 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
                        </div>
                        <div class="modal-footer " style="background-color:#046697;" >
                        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
                        </div>

                  </div> 
                   <div class="modal3" style="display:none;">
                    <img src="http://static.packsion.com/media/5946d7d974431.png" />
                      <div class="modal-body" style="padding:20px;">
                          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 1000 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
                        </div>
                        <div class="modal-footer " style="background-color:#046697;" >
                        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
                          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
                        </div>

                  </div>  
               {{--   @if(session()->has('product_id'))
                    <img src="{{ $product->images[0]->url }}" />
                @endif --}}
                
              </div>

              <div class="right-form">
                 <h3 class="heading">Packsion Kutu ve Üyelik Süresi</h3>
                       
                <form method="post">
                 {{ csrf_field() }}
                 

                    <div class="form-group">
                        <select class="form-control" required id="select-tag"  style="width:70%; margin: 0 auto;" name="plan[product_id]">
                            <option value="">Kutunuzu Seçiniz</option>
                            <option @if(session()->has('product_id') && session()->get('product_id') == '83') selected @endif value="83">The Packer 250 TL</option>
                            <option @if(session()->has('product_id') && session()->get('product_id') == '84') selected @endif value="84">The Packson 500 TL</option>
                            <option @if(session()->has('product_id') && session()->get('product_id') == '85') selected @endif value="85">The Packsionist 1000 TL</option>
                        </select>
                        
                    </div>

                    <div class="form-group">
                        <select class="form-control" required style="width:70%; margin: 0 auto;" id="period" name="plan[period]">
                          <option value="">Üyelik Süresi</option>
                          <option value="1">1 Aylık</option>
                          <option value="3">3 Aylık</option>
                          <option value="6">6 Aylık</option>
                          <option value="12">1 Yıllık</option>   
                        </select>
                    </div>

                    <div class="form-group button">
                        <button type="submit" class="btn btn-default" >Devam Et</button>
                    </div>

                 </form> 
              </div>
            </div>
             

             <!-- Modals Here -->
                  <!-- Modal -->
  {{-- <div class="modal  fade " id="modalb" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header modal-header-info">
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title " style="font-size: 2.6rem;">Kutu Bilgisi</h4>
        </div>
        <div class="modal-body" style="padding:20px;">
          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 250 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
        </div>
        <div class="modal-footer " style="background-color:#046697;" >
        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
        </div>
      </div>
      
    </div>
  </div> --}}


    <!-- Modal -->
  {{-- <div class="modal  fade " id="modalc" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header modal-header-info">
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title " style="font-size: 2.6rem;">Kutu Bilgisi</h4>
        </div>
        <div class="modal-body" style="padding:20px;">
          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 500 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
        </div>
        <div class="modal-footer " style="background-color:#046697;" >
        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
        </div>
      </div>
      
    </div>
  </div> --}}

    <!-- Modal -->
  {{-- <div class="modal  fade " id="modald" role="dialog">
    <div class="modal-dialog ">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header modal-header-info">
         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 class="modal-title " style="font-size: 2.6rem;">Kutu Bilgisi</h4>
        </div>
        <div class="modal-body" style="padding:20px;">
          <h3>Bu kutuyu seçtiğinizde uzman stil danışmanları tarafından hazırlanan 1000 TL değerindeki kombininiz tarafınıza gönderilecektir.</h3>
        </div>
        <div class="modal-footer " style="background-color:#046697;" >
        <div class="pull-left" style="color:#fff;  text-align: left; "><h4 style="font-size: 15px;">Beğenmediğiniz ürünleri MNG kargo ile ücretsiz olarak iade edebilirsiniz.</h4></div>
          <!-- <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #f52e55;">Close</button> -->
        </div>
      </div>
      
    </div>
  </div> --}}



 

        </div>


  <script type="text/javascript">

                  $("#select-tag").on("change", function () {  

                      $modalb = $('.modal1');
                      $modalc = $('.modal2');
                      $modald = $('.modal3');
                      // alert();
                      // alert($(this).val());
                  
                      if($(this).val() === '83'){
                          // alert();
                          $modalb.show();
                          $modalc.hide();
                          $modald.hide();
                      }

                      if($(this).val() === '84'){
                          // alert();
                          $modalc.show();
                          $modalb.hide();
                          $modald.hide();
                      }

                      if($(this).val() === '85'){
                          // alert();
                          $modald.show();
                          $modalc.hide();
                          $modalb.hide();
                      }
                  });
                  jQuery('#select-tag').change();
                </script>



@stop
