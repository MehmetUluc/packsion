@extends('layouts.app')

@section('content')


 <div class="main-container">
    <div class="bg-image bg-ch-aa-image">
    </div>

            <div class="main-form ch-add-form full-form">
             
                <h3 class="heading">Kutunuzun teslim olmasını istediğiniz adres:</h3>

                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                    {{ csrf_field() }}
                        <div class="form-group">
                           <!--  <label>Lorem Ipsum:</label> -->
                            <select class="form-control" data-rule-required="true"  name="saved_address" id="saved-address" class="btn-lg w100p">
                                <option value="">Adres Seç</option>
                                 @if(count($addresses) > 0)
                                @foreach($addresses as $address)
                                <option @if(session()->get('address_id') == $address->address_book_id) selected @endif value="{{ $address->address_book_id }}">{{$address->entry_name}}</option>
                                 @endforeach
                                @endif
                            </select>
                            <span><a href="/checkout/new/address" style="position: relative; top: -7px; left: 10px; color: #f52e55; font-size:20px;"> <b>Yeni Adres Ekle</b></a></span>
                        </div>

                        <div class="form-group button">
                            <button type="submit" class="btn btn-default">Devam Et</button>
                        </div>

                </form>
            </div>

 </div>


{{ session()->forget('gift') }}
<script>
document.body.className += " hidden-footer";
</script>




@stop
