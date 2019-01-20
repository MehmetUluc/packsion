@extends('frontend.layouts.app')


@section('content')
<link rel="stylesheet" type="text/css" href="/assets/new_style.css">

<main class="womens-main">
      <section id="holidaySlideHero" class="temp-homepage" data-scrolled-into-view="true">
  <div class="holiday-slide-hero u-md-hide flickity-enabled is-draggable" data-flickity="{ &quot;contain&quot;: true, &quot;wrapAround&quot;: true, &quot;prevNextButtons&quot;: false, &quot;autoPlay&quot;: 5000 }" tabindex="0">

                  
                        
                              

  <div class="flickity-viewport" style="height: 585px; touch-action: pan-y;"><div class="flickity-slider" style="left: 0px; transform: translateX(0%);"><div class="holiday-slide-cell is-selected" style="background-image: url(/assets/kadin.jpg); position: absolute; left: 0%;" aria-selected="true"></div><div class="holiday-slide-cell" style="background-image: url(/assets/kadin.jpg); position: absolute; left: 100%;" aria-selected="false"></div></div></div><ol class="flickity-page-dots"><li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li><li class="dot" aria-label="Page dot 2"></li></ol></div>

  <div class="holiday-slide-hero u-sm-show flickity-enabled is-draggable" data-flickity="{ &quot;contain&quot;: true, &quot;wrapAround&quot;: true, &quot;prevNextButtons&quot;: false, &quot;autoPlay&quot;: 5000 }" tabindex="0">

                  
                        
                        
                        
          

  <div class="flickity-viewport" style="height: 0px; touch-action: pan-y;"><div class="flickity-slider" style="left: 0px;"><div class="holiday-slide-cell u-sm-show" style="background-image: url(/assets/kadin.png); position: absolute;" aria-selected="false"></div><div class="holiday-slide-cell u-sm-show" style="background-image: url(/assets/kadin.png); position: absolute;" aria-selected="false"></div><div class="holiday-slide-cell u-sm-show is-selected" style="background-image: url(/assets/kadin.png); position: absolute;" aria-selected="true"></div><div class="holiday-slide-cell u-sm-show" style="background-image: url(/assets/kadin.png); position: absolute;" aria-selected="false"></div></div></div><ol class="flickity-page-dots"><li class="dot" aria-label="Page dot 1"></li><li class="dot" aria-label="Page dot 2"></li><li class="dot is-selected" aria-label="Page dot 3" aria-current="step"></li><li class="dot" aria-label="Page dot 4"></li></ol></div>

  <div class="holidaySlideHero-module-container">
    <div class="holidaySlideHero-module-wrapper">
      <div class="module-overlay__logo u-paddingAs u-bg-color--white u-sm-show">
        
      </div>
      <div class="holidaySlideHero-module">
        <div class="inner">

                                    <h2>{{ @trans('woman.lets_build') }}</h2>
          <p>
              {{ @trans('woman.is_shopping') }} 
                      

          <div class="module-cta">
            @if(Auth::guard('customer')->check() && count($quizzess) > 0)
              <a href="/start_quiz?gender=woman" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @else
                          <a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @endif
          </div>

        </div>
      </div>
    </div>
  </div>

  <img src="/assets/kadin.png" alt="" class="u-md-show u-sm-hide u-imgResponsive">

</section>


      <header id="intro" class="u-posRelative hero-sub-nav" data-behavior="SubNavbar">
      <nav class="sub-nav u-sizeFull">
        <div class="sub-nav__container u-maxWidth--nav u-heightFull u-marginAuto u-nbfc">
          <ul class="sub-nav__list u-flex u-textSans">
                        <li class="sub-nav__list-item u-paddingHs u-posRelative">
              <a href="#intro" class="sub-nav__link nav__link u-block u-color--grayDark u-posRelative is-active js-subnav-link" data-segment="womens">
               {{ @trans('woman.womens') }}
              </a>
            </li>
                                    <li class="sub-nav__list-item u-paddingHs u-posRelative">
              <a href="#how-it-works" class="sub-nav__link nav__link u-block u-color--grayDark u-posRelative js-subnav-link" data-segment="mens">
                {{ @trans('woman.how_it_works') }}
              </a>
            </li>
                        <li class="sub-nav__list-item u-paddingHs u-posRelative">
              <a href="#pricing" class="sub-nav__link nav__link u-block u-color--grayDark u-posRelative js-subnav-link" data-segment="mens">
                {{ @trans('woman.pricing') }}
              </a>
            </li>
                        <li class="sub-nav__list-item u-paddingHs u-posRelative">
              <a href="#outfits" class="sub-nav__link nav__link u-block u-color--grayDark u-posRelative js-subnav-link" data-segment="mens">
                {{ @trans('woman.outfits') }}
              </a>
            </li>
                        <li class="sub-nav__list-item u-paddingHs u-posRelative">
              <a href="#trunks" class="sub-nav__link nav__link u-block u-color--grayDark u-posRelative js-subnav-link" data-segment="mens">
                {{ @trans('woman.trunks') }}
              </a>
            </li>

            
          </ul>
        </div>
      </nav>
    </header>
  
<section id="how-it-works" class="u-posRelative timeline-container" data-behavior="HowItWorks">
  <div class="u-container u-marginAuto u-textCenter">
    <div class="u-md-size2of3 u-marginAuto">
      <h2 class="u-marginBs">{{ @trans('woman.how_works') }}</h2>
      <h4 class="u-textSans">{{ @trans('woman.getting_your_first') }}</h4>
    </div>

    <div class="u-marginTxl u-paddingTm u-posRelative">
      <div class="timeline-path u-posAbsolute u-nbfc">
        <div class="js-progressBar u-posAbsolute"></div>
      </div>

              <div class="js-how-it-works-video Video-wrap--fullscreen u-hidden">

          <div class="js-how-it-works-video-cancel">
              <button class="Video-cancel" type="button">
                <div class="Icon-video Icon-video-cancel"></div>
              </button>
          </div>

          <div class="center-vertical isChrome-mobile">

            <div class="intrinsic">
              <div class="intrinsic-inner">
                <iframe class="FlexEmbed-video" src="https://player.vimeo.com/video/226153666?api=1" name="See how Trunk Club works in 30 seconds" title="See how Trunk Club works in 30 seconds" frameborder="0" data-behavior="VimeoVideoPlayer" data-container="js-how-it-works-video" data-play="js-how-it-works-video-play" data-cancel="js-how-it-works-video-cancel" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="">
                </iframe>
              </div>
            </div>

            <div class="u-hidden video-transcript">
              <p>
                {{ @trans('woman.paragraph_1') }}
              </p>
            </div>

          </div>

      </div>

      <div class="how-it-works-video-placeholder">
        <div class="how-it-works-inner u-textCenter u-vertCenter">

          <div class="js-how-it-works-video-play Icon-video-alt"></div>
          <p class="u-textSans">{{ @trans('woman.see') }}</p>

        </div>
      </div>


    
      <ol class="timeline Grid u-md-sizeFull u-sm-size3of4 u-marginAuto">

        
        <li class="Grid-cell timeline-module u-md-size1of2 u-posRelative">
          <div class="u-boxShadow">
            <img src="/assets/kadin1.jpg" alt="Trunk Club style profile" class="timeline-module__img u-imgResponsive">

            <div class="timeline-module__content u-textCenter u-paddingAl u-bg-color--white">
              <p class="u-fontWeight--bold">{{ @trans('woman.create_style') }}</p>
              <span class="u-block u-marginTs u-marginBm u-divider"></span>
              <p>
                <span class="u-md-hide">{{ @trans('woman.by_answering') }}!</span>
                <span class="u-md-show">{{ @trans('woman.where_you_shop') }}.</span>
              </p>
            </div>
          </div>
        </li>
        
        <li class="Grid-cell timeline-module u-md-size1of2 u-posRelative">
          <div class="u-boxShadow">
            <img src="/assets/kadin2.jpg" alt="Trunk Club personal shopper" class="timeline-module__img u-imgResponsive">

            <div class="timeline-module__content u-textCenter u-paddingAl u-bg-color--white">
              <p class="u-fontWeight--bold">{{ @trans('woman.chat_with_stylist') }}</p>
              <span class="u-block u-marginTs u-marginBm u-divider"></span>
              <p>
                <span class="u-md-hide">{{ @trans('woman.youll_talk_to') }}</span>
                <span class="u-md-show">{{ @trans('woman.yes_a_real') }}</span>
              </p>
            </div>
          </div>
        </li>
        
        <li class="Grid-cell timeline-module u-md-size1of2 u-posRelative">
          <div class="u-boxShadow">
            <img src="/assets/kadin3.jpg" alt="Preview box of clothes" class="timeline-module__img u-imgResponsive">

            <div class="timeline-module__content u-textCenter u-paddingAl u-bg-color--white">
              <p class="u-fontWeight--bold">{{ @trans('woman.review_trunk') }}</p>
              <span class="u-block u-marginTs u-marginBm u-divider"></span>
              <p>
                <span class="u-md-hide">{{ @trans('woman.youll_have_48') }}.</span>
                <span class="u-md-show">{{ @trans('woman.once_you_approve') }}</span>
              </p>
            </div>
          </div>
        </li>
        
        <li class="Grid-cell timeline-module u-md-size1of2 u-posRelative">
          <div class="u-boxShadow">
            <img src="/assets/kadin4.jpg" alt="Clothes box for women" class="timeline-module__img u-imgResponsive">

            <div class="timeline-module__content u-textCenter u-paddingAl u-bg-color--white">
              <p class="u-fontWeight--bold">{{ @trans('woman.try_everything') }}</p>
              <span class="u-block u-marginTs u-marginBm u-divider"></span>
              <p>
                <span class="u-md-hide">{{ @trans('woman.take_5_days') }}</span>
                <span class="u-md-show">{{ @trans('woman.to_decide') }}</span>
              </p>
            </div>
          </div>
        </li>
        
        <li class="Grid-cell timeline-module u-md-size1of2 u-posRelative">
          <div class="u-boxShadow">
            <img src="/assets/kadin5.jpg" alt="Clothing box subscription" class="timeline-module__img u-imgResponsive">

            <div class="timeline-module__content u-textCenter u-paddingAl u-bg-color--white">
              <p class="u-fontWeight--bold">{{ @trans('woman.reorder') }}</p>
              <span class="u-block u-marginTs u-marginBm u-divider"></span>
              <p>
                <span class="u-md-hide">{{ @trans('woman.our_service') }}</span>
                <span class="u-md-show">{{ @trans('woman.works_on_your_terms') }}.</span>
              </p>
            </div>
          </div>
        </li>
        

      </ol>
    </div>

    @if(Auth::guard('customer')->check() && count($quizzess) > 0)
              <a href="/start_quiz?gender=woman" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @else
                          <a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @endif
  </div>
</section>

<section id="pricing" class="u-posRelative" data-behavior="TrunkPricing" style="background-image: url(/assets/kadin6.jpg); background-color:#00273D;">
    <div class="u-container u-marginAuto Grid u-posRelative">
    <div class="Grid-cell u-md-size1of2 u-textCenter">
      <h2 class="u-marginBm">{{ @trans('woman.what_is_cost') }}</h2>
      <span class="u-block u-divider u-marginTs u-marginBm"></span>
      <ul class="pricing-faq u-textLeft">
                <li class="pricing-faq-item u-paddingVs u-posRelative">
          <p class="pricing-faq-question u-fontWeight--bold">
            S. {{ @trans('woman.q1') }}
          </p>
          <div class="pricing-faq-answer u-paddingBs">
            <p>{{ @trans('woman.a1') }}</p>
          </div>
        </li>
                <li class="pricing-faq-item u-paddingVs u-posRelative">
          <p class="pricing-faq-question u-fontWeight--bold">
            S. {{ @trans('woman.q2') }}
          </p>
          <div class="pricing-faq-answer u-paddingBs">
            <p>{{ @trans('woman.a2') }}</p>
          </div>
        </li>
                <li class="pricing-faq-item u-paddingVs u-posRelative">
          <p class="pricing-faq-question u-fontWeight--bold">
            S. {{ @trans('woman.q3') }}
          </p>
          <div class="pricing-faq-answer u-paddingBs">
            <p>{{ @trans('woman.a3') }}</p>
          </div>
        </li>
        
      </ul>
      @if(Auth::guard('customer')->check() && count($quizzess) > 0)
              <a href="/start_quiz?gender=woman" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @else
                          <a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @endif
    </div>
  </div>
</section>

<section id="outfits" class="u-posRelative timeline-container u-bg-color--offWhite">
  <div class="u-container u-marginAuto u-textCenter">
    <div class="u-md-size2of3 u-marginAuto">
      <h2 class="u-color--grayDark u-marginBm">{{ @trans('woman.styles_can_send') }}</h2>
      <h4 class="u-textSans u-color--grayDark u-marginBm u-marginAuto">{{ @trans('woman.your_stylist_get') }}</h4>
    </div>

    <div class="Grid u-md-sizeAll u-marginAuto u-textCenter u-flex u-sm-hide">
            <div class="trunk Grid-cell u-paddingHs u-marginTl">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://www.packsion.com/assets/images/form/woman/smart_casual.jpg" alt="Weekend outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div>
            <div class="trunk Grid-cell u-paddingHs u-marginTl">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://www.packsion.com/assets/images/form/woman/street_style.jpg" alt="Date night outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div>
            <div class="trunk Grid-cell u-paddingHs u-marginTl">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://www.packsion.com/assets/images/form/woman/casual_1.jpg" alt="Work outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div>
            <div class="trunk Grid-cell u-paddingHs u-marginTl">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://www.packsion.com/assets/images/form/woman/smart_casual_1.jpg" alt="Casual outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div>
      
    </div>

    <div class="Grid outfits-carousel u-sm-show flickity-enabled is-draggable" data-flickity="{ &quot;cellAlign&quot;: &quot;center&quot;, &quot;contain&quot;: true, &quot;initialIndex&quot;: &quot;1&quot;, &quot;prevNextButtons&quot;: false }" tabindex="0">
            
            
            
            
      
    <div class="flickity-viewport" style="height: 40px; touch-action: pan-y;"><div class="flickity-slider" style="left: 0px;"><div class="trunk Grid-cell u-paddingHs u-marginTxl" aria-selected="false" style="position: absolute;">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://res.cloudinary.com/trunk-club/image/upload/f_auto,q_auto/v1541448518/public_site/2018/holiday/tcw-Outfit-1.jpg" alt="Weekend outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div><div class="trunk Grid-cell u-paddingHs u-marginTxl is-selected" aria-selected="true" style="position: absolute;">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://res.cloudinary.com/trunk-club/image/upload/f_auto,q_auto/v1541448518/public_site/2018/holiday/tcw-Outfit-2.jpg" alt="Date night outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div><div class="trunk Grid-cell u-paddingHs u-marginTxl" aria-selected="false" style="position: absolute;">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://res.cloudinary.com/trunk-club/image/upload/f_auto,q_auto/v1541448518/public_site/2018/holiday/tcw-Outfit-3.jpg" alt="Work outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div><div class="trunk Grid-cell u-paddingHs u-marginTxl" aria-selected="false" style="position: absolute;">
        <div class="trunk-container u-roundedEdges--sm">
          <figure class="u-marginAn u-posRelative">
            <span class="close-button u-bg-color--white u-block u-posAbsolute u-pointer js-closeTrunk">
              <span class="u-inlineBlock u-posAbsolute"></span>
              <span class="u-inlineBlock u-posAbsolute"></span>
            </span>

            <img src="https://res.cloudinary.com/trunk-club/image/upload/f_auto,q_auto/v1541448518/public_site/2018/holiday/tcw-Outfit-4.jpg" alt="Casual outfits" class="u-imgResponsive">
          </figure>

        </div>
      </div></div></div><ol class="flickity-page-dots"><li class="dot" aria-label="Page dot 1"></li><li class="dot is-selected" aria-label="Page dot 2" aria-current="step"></li><li class="dot" aria-label="Page dot 3"></li><li class="dot" aria-label="Page dot 4"></li></ol></div>

    @if(Auth::guard('customer')->check() && count($quizzess) > 0)
              <a href="/start_quiz?gender=woman" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @else
                          <a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @endif
  </div>
</section>

<section id="trunks" class="u-posRelative" data-behavior="TrunkCheckboxes" style="background-image: url(https://res.cloudinary.com/trunk-club/image/upload/f_auto,q_auto/v1540832135/public_site/2018/holiday/tc-womens-trunks-bg.jpg); background-color:#00273D;">
    <div class="u-container u-marginAuto Grid u-posRelative">
    <div class="Grid-cell u-md-size1of2 u-textCenter">
      <h2 class="u-marginBm">{{ @trans('woman.what_else') }}</h2>
      <span class="u-block u-divider u-marginTs u-marginBm"></span>
      <p class="u-marginBl">{{ @trans('woman.every_trunk') }}</p>

      <div class="u-textLeft">
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" stroke="#4A4A4A" fill="#4A4A4A" stroke-width="1" fill-rule="evenodd" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.items_per_trunk') }}</p>
        </div>
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.approving_trunks') }}</p>
        </div>
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.free_shipping') }}</p>
        </div>
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.options_to_schedule') }}s</p>
        </div>
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.alterations_for_trunk') }}</p>
        </div>
        <div class="line-item u-flex u-flex--alignCenter u-paddingVs js-viewTag">
          <div class="checkbox u-posRelative u-inlineBlock u-marginLs u-marginRm">
            <svg class="checkbox__check u-posAbsolute" width="13px" height="11px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
               <title>{{ @trans('woman.checkmark') }}</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g stroke="#4A4A4A" fill="#4A4A4A">
                  <path class="checkbox__check-path" d="M6.68045696,14.892715 L0.16233931,8.61414359 C-0.0544842195,8.40414359 -0.0544842195,8.06450074 0.164574604,7.85664359 C0.382515781,7.64771502 0.736809898,7.64771502 0.954751075,7.85878645 L6.60892755,13.3037865 L18.0122805,0.192715023 C18.210104,-0.0354992628 18.5621628,-0.0644278342 18.799104,0.124143594 C19.0360452,0.313786452 19.0673393,0.651286452 18.8695158,0.878429309 L6.68045696,14.892715 Z"></path>
                </g>
              </g>
            </svg>
          </div>
          <p>{{ @trans('woman.continued_styling') }}</p>
        </div>
      </div>

      @if(Auth::guard('customer')->check() && count($quizzess) > 0)
              <a href="/start_quiz?gender=woman" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @else
                          <a href="/checkout/quiz/step/1?gender=woman&cache=flush" class="button--rounded button--eq-width">{{ @trans('woman.get_started') }}</a>
            @endif
    </div>
  </div>
</section>

<style>
#bg_image-cta_banner{
  background-color: #c5c5c7;
}

.womens-main * {
  font-family: 'Montserrat', 'Helvetica Neue', sans-serif !important;
}
.header {
  padding: inherit;
}

@media (min-width: 800px){
  #bg_image-cta_banner{
    background-image: url( https://res.cloudinary.com/trunk-club/image/upload/q_auto/v1541457185/public_site/2018/holiday/TCW_GC_Image_Desktop.jpg );
    background-position: top center;
  }
  #bg_image-cta_banner .Grid{
          justify-content: flex-start;
      }

  #bg_image-cta_banner .Grid-cell{
          padding-right: 80px;
    
  }
  .header {
  padding: inherit;
}
}
</style>





<span data-behavior="StorefrontMenWomen" class="u-hidden"></span>

  </main>

  @stop

  @section('script')
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>

<script src="https://www.trunkclub.com/assets/js/main-46ff09b9ff8cd1942858.js"></script>


@stop