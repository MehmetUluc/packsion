@extends('frontend.layouts.app')

@section('content')
@if(Session::has('success'))

<div class="wrapper reveal-side-navigation">
    <div class="wrapper-inner">


        <div class="section-block pt-30">
                                    <div class="row">
                                        <div class="column width-6 push-3 text-center" style="text-align:center">    

             <i class="fa fa-check-circle fz24 c-green mr10" style="font-size: 100px;margin-bottom: 20px;color: lawngreen;"></i>
                          <h2>Yeni Şifre Bilgisi E-mail’inize Gönderildi.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
          </div>

@elseif(Session::has('error'))
<div class="main-header">
 <div class="header">
            <section class="bgcolor-4 position-form-2 text-center " >
          
              <h3 style="color:#fff;" >Böyle bir e-mail adresi kayıtlarımızda bulunamadı.</h3>

              <div style=" margin-top:15px;"><h3>Packsion'a abone olmak için, <a href="/customer/register" style="color:red;"> 
              <u>KAYIT OL</u> </a></h3></div>

            </section>
           
            <div class="bg-image">
            </div>
  </div>
</div>

@else
<div class="wrapper reveal-side-navigation">
    <div class="wrapper-inner">


        <div class="content clearfix">
          <div class="section-block intro-title-2 xsmall bkg-charcoal-transition">
                    <div class="row">
                        <div class="column width-12">
                            <div class="row">
                                <div class="column width-12">
                                    <div class="title-container">
                                        <div class="title-container-inner">
                                            <h1 class="inline all-caps mb-0 fw-700">Şifremi Unuttum</h1>
                                            <ul class="breadcrumb all-caps">
                                                <li>
                                                    <a href="/">Anasayfa</a>
                                                </li>
                                                <li>
                                                    Şifremi Unuttum
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                                <div class="section-block pt-30">
                                    <div class="row">
                                        <div class="column width-6 push-3 text-center">      
                                           <form id="register-form" class="sign-up-form" novalidate="novalidate" method="post" action="/customer/password/forget">
                                             {{ csrf_field() }} 

                                           <div class="form-group">
                                               <input name="customers_email_address" id="email"  placeholder="E-mail adresin" required type="email" class="form-email form-element large">
                                           </div>
                                               
                                               <div class="btn-reset-p text-right">
                                                   <button class="btn  btn-lg pull-right" type="submit" value="Yeni Şifre Al">Yeni Şifre Al</button>
                                               </div >


                                           </form>
                                        </div>
                                    </div>
                             </div>

                   
                              

@endif

                </div>
            </div>
        </div>
@stop