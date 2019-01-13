@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="main-container">
            <div class="bg-image bg-register">
            </div>

            <div class="main-form register-form" style="padding: 6px 40px;">
                <h3>Packsion'a abone isen, <a href="/customer/login">GİRİŞ YAP</a> </h3>
                <form id="register-form" class="form" action="" novalidate="novalidate" method="post">
                 {{ csrf_field() }}
                    <div class="form-group">
                        <label>Ad</label>
                        <input type="text" id="name" name="customers_firstname" placeholder="Adınız:" minlength="2" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Soyad</label>
                        <input type="text" id="surname" name="customers_lastname" placeholder="Soyadınız:" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label>E-posta:</label>
                        <input name="customers_email_address" id="email"  placeholder="E-posta:" required type="email" class="form-control">
                    </div>

                    <div class="form-group" style="margin-top:27px;">
                        <label >Şifre:</label>
                        <input type="password" name="password" placeholder="Şifreniz:" required class="form-control">
                    </div>

                    <div class="form-group button">
                        <button  type="submit" class="btn btn-default">KAYIT OL</button>
                    </div>

                    <div class="form-group text">
                        <label><input name="contract" id="contract" type="checkbox" required data-msg="" value="1">
                         <a href="/sozlesme/uyelik-sozlesmesi" target="_blank" >Üyelik sözleşmesi</a> ve
                         <a href="/sozlesme/bilgilendirme-formu" target="_blank">Gizlilik Politikasını okudum ve kabul ediyorum</a>
                        </label>
                    </div>

                    <div class="form-group text">
                        <label><input type="checkbox">Kampanya ve yeniliklerden haberdar olmak istiyorum</label>
                    </div>

                </form>
            </div>

        </div>

<script>
document.body.className += " hidden-footer";

jQuery("#register-form").submit(function(e) {
    if(!jQuery('input#contract:checked').length) {
        alert("Üyelik Sözleşmesini onaylamadan kayıt olamazsınız.");

        //stop the form from submitting
        return false;
    }

    return true;
});


</script>

@stop
