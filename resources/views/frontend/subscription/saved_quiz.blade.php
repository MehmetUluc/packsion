@extends('layouts.app')

@section('content')


 <div class="main-container">
    <div class="bg-image bg-ch-aa-image">
    </div>

            <div class="main-form ch-add-form full-form">
             
                <h3 class="heading">Kayıtlı Formlarınız:</h3>

                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                           <!--  <label>Lorem Ipsum:</label> -->
                            <select class="form-control" data-rule-required="true"  name="saved_quiz" id="saved-address" class="btn-lg w100p">
                                <option value="">Form Seç</option>
                                 @if(count($quizes) > 0)
                                 @php
                                 $md5 = array();
foreach ($quizes as $key => $arr) {
  // have we already seen this md5 hash?
  if (in_array($arr->quiz, $md5)){
    // remove element
    unset($quizes[$key]);
  }else {
    // keep element, but add it's md5
    $md5[] = $arr->quiz;
  }
}

@endphp
                                @foreach($quizes as $quiz)
                                @php $item = json_decode($quiz->quiz) @endphp
                                <option value="{{ $quiz->id }}">{{$quiz->title}}</option>
                                 @endforeach
                                @endif
                            </select>
                            <span></span>
                        </div>

                        <div class="form-group button">
                          <a class="edit btn btn-default" href="/checkout/quiz?product_id={{ request()->get('product_id') }}&gender={{ request()->get('gender') }}&cache=flush">Formu Yeniden Doldur</a>
                          <a href="javascript:void(0)" class="edit btn btn-default">Seçili Formu Düzenle</a><br />
                            <button type="submit" class="btn btn-default">Devam Et</button>
							
                        </div>

                </form>
            </div>

 </div>


{{ session()->forget('gift') }}
<script>
document.body.className += " hidden-footer";
</script>

<style type="text/css">
  .form label.error {
    color: #0f346c;
    display: block;
    margin-top: 5px;
    font-size: 12px;
    font-size: 1.2rem;
    font-family: Arial;
    float: left;
    position: absolute;
}

.main-container .ch-add-form .button a {
    background: #FDC62E;
    margin-bottom: 8px;
}

.main-container .main-form .button a {
    padding: 0;
    font-size: 25px;
    width: 75%;
    background: #4DB8DE;
    color: #ffffff;
    height: 46px;
    border: none;
    line-height: 41px;
    border-radius: 40px;
}
.main-container .ch-add-form select {
    width: 100% !important;
    display: inline-block;
}


</style>

<script type="text/javascript">
    jQuery('a.edit').click(function(){
      var id = jQuery('#saved-address').val();
      if(id !== ''){
        window.location = '/checkout/quiz/' + id;
      }
    });

</script>
@stop
