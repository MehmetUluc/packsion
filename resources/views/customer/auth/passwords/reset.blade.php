@extends('frontend.layouts.app')

@section('content')
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
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/customer/password/resetpass') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ request()->segment(4) }}">

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Şifre</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-element large" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>Şifre alanı zorunludur</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Yeni Şifre Tekrar</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-element large" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>Şifrelerin aynı olması gereklidir</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Sıfırla
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
