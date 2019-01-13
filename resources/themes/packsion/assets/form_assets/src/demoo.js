  function gotoUrl(url) {
    location.href = url;
  }

  function setVisibility(select, val) {
    $(select).css('visibility', val);
  }

  function goToId(id, adjust) {
    if (id) {
      goToObj($("#" + id), adjust)
    }
    return false;
  }

  function goToObj(obj, adjust) {
    if (adjust == null) {
      adjust = 0;
    }
    if (obj == undefined || obj.length != 0) {
      var destination = obj.offset().top-adjust;
      $("html,body").animate({ scrollTop: destination}, 500 );
    }
  }

  function onReady() {

    $("input.regular-radio").change(function() {
      $(this).addClass("selected");
      $('input[name="' + $(this).attr("name") + '"].regular-radio').each(function() {
        if (!$(this).is(":checked")) {
          $(this).removeClass("selected");
        }
      });
    });

  
    $("form.ajax-form").ajaxForm({
        beforeSubmit: function(arr, $form, options) {
          options.context = $form; //change the context of 'this' from ajaxForm to the submitting form for the complete event to enable the form again

          if($form.data("is-disabled") == true) {
            return false;
          }
          if($form.attr("locked") == "true") {
            return false;
          }
          if(!validateReqs("#" + $form.attr('id'))) {
            return false;
          }
          
          $form.data("is-disabled", true);

          return true;
        },
        success: function(responseText, statusText, xhr, $form) {
          var msg = $form.attr("success-msg");
          if (msg == undefined) {
            msg = 'Saved';
          }
          var success_func = $form.attr("data-success-func");
          if (success_func) {
            window[success_func](responseText);
          }

          if ($form.attr("data-msg-type") == "modal") {
            displayPopup("Done", msg, "OK") 
          } else {
            displayMessage("success", msg);
          }
        },
        error: function(xhr, statusText, e) {
          displayMessage("error", "There was an error, please try again.");
        },
        complete: function() {
          $(this).data("is-disabled", false);
        },
        enableForm: true,
        disableForm: true
      });

    var ec_block = $('.email-capture');
    function email_submit(capture_block) {
      var email = capture_block.find('.capture-block-input').val(),
        capture_origin = capture_block.data('capture-origin'),
        success_block = capture_block.find('.email-capture-success'),
        error_block = capture_block.find('.email-capture-error'),
        capture_modal_test = "";

      success_block.hide();
      error_block.hide();

      if (email) {
        $.ajax({
          url: "#",
          data: {
            email: email,
            capture_origin: capture_origin
          }
        })
        .done(function(responseText) {
          if (responseText == 'success') {
            if (capture_modal_test &&
                capture_origin == 2) {
              mixpanel.register({'email_capture_modal_test': capture_modal_test});
            }
            success_block.show();
          } else {
            error_block.show();
          }
        })
        .fail(function(xhr) {
          displayMessage('error', 'There was an error submitting your email.  Please try again.');
        });
      } else {
        error_block.show();
      }
    }
    ec_block.on('click', '.capture-block-btn', function (event) {
      var capture_btn = $(event.target),
        capture_block = capture_btn.closest('.email-capture');
      email_submit(capture_block);
    });
    ec_block.on('keyup', '.capture-block-input', function (event) {
      var capture_input = $(event.target),
        capture_block = capture_input.closest('.email-capture');
      if (event.keyCode == 13) {
        email_submit(capture_block);
      }
    });


    return;
  }

  

  var alertTimer;
  function displayMessage(type, message, timeout, close_callback, bottom) {
    var flash = $("<div id='flash' class='alert fade in'></div>"),
        close_btn = $("<button class='close'>&times;</button>");
    if (timeout === undefined) {
      timeout = 2500;
    }
    if (bottom) {
      flash.addClass('bottom');
    }
    clearTimeout(alertTimer);
    $("#flash").remove();
    $("#wrap").append(flash);
    flash.alert();
    flash.append(close_btn);
    flash.append("<div class='container'></div>");
    flash.addClass("alert-"+type);
    flash.css("display", "block");
    flash.find(".container").html(unescape(message));
    $('#flash').on('click', '.close', function(event) {
      if (close_callback !== undefined) {
        close_callback(event);
      }
      flash.fadeOut(500);
    });
    if (timeout >= 0) {
      alertTimer = setTimeout(function() {
        $("#flash button.close").click();
        }, timeout
      );
    }
  }

  function validateReqs(sub_filter, zero_ok, noMessage, goToError) {
    if (sub_filter == null) {
      sub_filter = "";
    }
    if (zero_ok == null) {
      zero_ok = false;
    }
    if (goToError == null) {
      goToError = false;
    }
    $(sub_filter).find(".req").removeClass("error");
    $(sub_filter).find(".req").parent("div.regular-select").removeClass("error");
    var arr = $(sub_filter).find(".req").filter(function() {return ((!zero_ok && $(this).val().toString() == "0") || $(this).val() == '')});

	var size_div = "";
	var waist_div = "";
	var pants_waist_div = "";
	
	var SIZI_div = "";
	var GIDERKEN_div = "";
	var KENDINIZ_waist_div = "";
	var ifade_div = "";
	var pantolon_div = "";
	var etek_div = "";

	if("#step-page-1" == sub_filter){
		if (!($('input[name="quiz[vucut]"]:checked').length > 0)) {
		var b_type_div = $(sub_filter).find(".body-type-validation-msg");
		  var msg = "Please select body type";
		  if (b_type_div.attr("title")) {
			  msg = b_type_div.attr('title');
		  }
		  if (noMessage != true) {
			b_type_div.addClass("error");
			b_type_div.parent("div.regular-select").addClass("error");
			displayMessage("error", msg);
		  }
		  if (goToError) {
			if (b_type_div.parents(".question").length > 0) {
			  goToObj(b_type_div.parents(".question"), 150);
			} else {
			  goToObj(b_type_div.parents(".row"), 150);
			}
		  }
		  return false;
		}
	}
	if("#step-page-10" == sub_filter){
			
			if (!($('input[name="quiz[üst_beden]"]:checked').length > 0)) {
			  var size_div = $(sub_filter).find(".size-validation-msg");
			  var msg = "Please select sizeb";
			  if (size_div.attr("title")) {
				  msg = size_div.attr('title');
			  }
			  if (noMessage != true) {
				size_div.addClass("error");
				size_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (size_div.parents(".question").length > 0) {
				  goToObj(size_div.parents(".question"), 150);
				} else {
				  goToObj(size_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
			if (!($('input[name="quiz[alt_beden]"]:checked').length > 0)) {
			  var waist_div = $(sub_filter).find(".waist-validation-msg");
			  var msg = "Please select waist";
			  if (waist_div.attr("title")) {
				  msg = waist_div.attr('title');
			  }
			  if (noMessage != true) {
				waist_div.addClass("error");
				waist_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (waist_div.parents(".question").length > 0) {
				  goToObj(waist_div.parents(".question"), 150);
				} else {
				  goToObj(waist_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
			if (!($('input[name="quiz[ayakkabi_no]"]:checked').length > 0)) {
			  var pants_waist_div = $(sub_filter).find(".pants-waist-validation-msg");
			  var msg = "Please select pants size";
			  if (pants_waist_div.attr("title")) {
				  msg = pants_waist_div.attr('title');
			  }
			  if (noMessage != true) {
				pants_waist_div.addClass("error");
				pants_waist_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (pants_waist_div.parents(".question").length > 0) {
				  goToObj(pants_waist_div.parents(".question"), 150);
				} else {
				  goToObj(pants_waist_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
	}
	if("#step-page-8" == sub_filter){
		
		if (!($('input[name="quiz[stil][]"]:checked').length > 0)) {
		  var SIZI_div = $(sub_filter).find(".SIZI-validation-msg");
		  var msg = "Please select";
		  if (SIZI_div.attr("title")) {
			  msg = SIZI_div.attr('title');
		  }
		  if (noMessage != true) {
			SIZI_div.addClass("error");
			SIZI_div.parent("div.regular-select").addClass("error");
			displayMessage("error", msg);
		  }
		  if (goToError) {
			if (SIZI_div.parents(".question").length > 0) {
			  goToObj(SIZI_div.parents(".question"), 150);
			} else {
			  goToObj(SIZI_div.parents(".row"), 150);
			}
		  }
		  return false;
		}
		
		if (!($('input[name="quiz[bussiness_stil][]"]:checked').length > 0)) {
			var GIDERKEN_div = $(sub_filter).find(".GIDERKEN-validation-msg");
		  var msg = "Please select pants size";
		  if (GIDERKEN_div.attr("title")) {
			  msg = GIDERKEN_div.attr('title');
		  }
		  if (noMessage != true) {
			GIDERKEN_div.addClass("error");
			GIDERKEN_div.parent("div.regular-select").addClass("error");
			displayMessage("error", msg);
		  }
		  if (goToError) {
			if (GIDERKEN_div.parents(".question").length > 0) {
			  goToObj(GIDERKEN_div.parents(".question"), 150);
			} else {
			  goToObj(GIDERKEN_div.parents(".row"), 150);
			}
		  }
		  return false;
		}
		
		if (!($('input[name="quiz[tshirt][]"]:checked').length > 0)) {
		  var ifade_div = $(sub_filter).find(".ifade-validation-msg");
		  var msg = "Please select pants size";
		  if (ifade_div.attr("title")) {
			  msg = ifade_div.attr('title');
		  }
		  if (noMessage != true) {
			ifade_div.addClass("error");
			ifade_div.parent("div.regular-select").addClass("error");
			displayMessage("error", msg);
		  }
		  if (goToError) {
			if (ifade_div.parents(".question").length > 0) {
			  goToObj(ifade_div.parents(".question"), 150);
			} else {
			  goToObj(ifade_div.parents(".row"), 150);
			}
		  }
		  return false;
		}
		
		if ($('#KENDINIZ_waist_selection').length){
			if (!($('input[name="quiz[renk_group][]"]:checked').length > 0)) {
			  var KENDINIZ_waist_div = $(sub_filter).find(".KENDINIZ-validation-msg");
			  var msg = "Please select pants size";
			  if (KENDINIZ_waist_div.attr("title")) {
				  msg = KENDINIZ_waist_div.attr('title');
			  }
			  if (noMessage != true) {
				KENDINIZ_waist_div.addClass("error");
				KENDINIZ_waist_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (KENDINIZ_waist_div.parents(".question").length > 0) {
				  goToObj(KENDINIZ_waist_div.parents(".question"), 150);
				} else {
				  goToObj(KENDINIZ_waist_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
			if (!($('input[name="quiz[pantolon][]"]:checked').length > 0)) {
			  var etek_div = $(sub_filter).find(".pantolon-validation-msg");
			  var msg = "Please select pants size";
			  if (etek_div.attr("title")) {
				  msg = etek_div.attr('title');
			  }
			  if (noMessage != true) {
				etek_div.addClass("error");
				etek_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (etek_div.parents(".question").length > 0) {
				  goToObj(etek_div.parents(".question"), 150);
				} else {
				  goToObj(etek_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
			if (!($('input[name="quiz[etek][]"]:checked').length > 0)) {
			  var etek_div = $(sub_filter).find(".etek-validation-msg");
			  var msg = "Please select pants size";
			  if (etek_div.attr("title")) {
				  msg = etek_div.attr('title');
			  }
			  if (noMessage != true) {
				etek_div.addClass("error");
				etek_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (etek_div.parents(".question").length > 0) {
				  goToObj(etek_div.parents(".question"), 150);
				} else {
				  goToObj(etek_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
		}
		
		else{
			if (!($('input[name="quiz[gomlek][]"]:checked').length > 0)) {
			  var pantolon_div = $(sub_filter).find(".pantolon-validation-msg");
			  var msg = "Please select pants size";
			  if (pantolon_div.attr("title")) {
				  msg = pantolon_div.attr('title');
			  }
			  if (noMessage != true) {
				pantolon_div.addClass("error");
				pantolon_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (pantolon_div.parents(".question").length > 0) {
				  goToObj(pantolon_div.parents(".question"), 150);
				} else {
				  goToObj(pantolon_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
			
			if (!($('input[name="quiz[pantolon][]"]:checked').length > 0)) {
			  var etek_div = $(sub_filter).find(".etek-validation-msg");
			  var msg = "Please select pants size";
			  if (etek_div.attr("title")) {
				  msg = etek_div.attr('title');
			  }
			  if (noMessage != true) {
				etek_div.addClass("error");
				etek_div.parent("div.regular-select").addClass("error");
				displayMessage("error", msg);
			  }
			  if (goToError) {
				if (etek_div.parents(".question").length > 0) {
				  goToObj(etek_div.parents(".question"), 150);
				} else {
				  goToObj(etek_div.parents(".row"), 150);
				}
			  }
			  return false;
			}
		}
		
		
	}
	
    if (arr.length) {
      var msg = "Please fill the required field";
      if (arr.first().attr("title")) {
        if (arr.first().hasClass("req-msg")) {
          msg = arr.first().attr('title');
        } else {
          msg += ": " + arr.first().attr('title');
        }
      }
      if (noMessage != true) {
        arr.addClass("error");
        arr.parent("div.regular-select").addClass("error");
        displayMessage("error", msg);
      }
      if (goToError) {
        if (arr.first().parents(".question").length > 0) {
          goToObj(arr.first().parents(".question"), 150);
        } else {
          goToObj(arr.first().parents(".row"), 150);
        }
      }
	  return false;
    }
	
    $(sub_filter).find(".req").each(function() {
      if ($(this).attr("type") == "hidden") {
        if ($(this).hasClass("error")) {
          $(this).parent().addClass("error");
        } else {
          $(this).parent().removeClass("error");
        }
      }
    });
    
    return true;
  }

  function call_nan(type, name) {
    $('body').append('<img src="//api.nanigans.com/event.php?app_id=15778&type=' + type + "&name=" + name + '" />');
  }

(function(c){var J=function(a){c(c.address).trigger(c.extend(c.Event(a),function(){for(var a={},t=c.address.parameterNames(),d=0,e=t.length;d<e;d++)a[t[d]]=c.address.parameter(t[d]);return{value:c.address.value(),path:c.address.path(),pathNames:c.address.pathNames(),parameterNames:t,parameters:a,queryString:c.address.queryString()}}.call(c.address)))},u=function(a){return Array.prototype.slice.call(a)},v=function(a,b,t){c().bind.apply(c(c.address),Array.prototype.slice.call(arguments));return c.address},
D=function(){return w.pushState&&d.state!==k},P=function(){return("/"+j.pathname.replace(RegExp(d.state),"")+j.search+(E()?"#"+E():"")).replace(O,"index.html")},E=function(){var a=j.href.indexOf("#");return-1!=a?r(j.href.substr(a+1),g):""},p=function(){return D()?P():E()},K=function(a){a=a.toString();return(d.strict&&"/"!=a.substr(0,1)?"/":"")+a},r=function(a,b){return d.crawlable&&b?(""!==a?"!":"")+a:a.replace(/^\!/,"")},q=function(a,b){return parseInt(a.css(b),10)},A=function(){if(!F){var a=p();e!=a&&(x&&
7>y?j.reload():(x&&(!G&&d.history)&&n(L,50),e=a,z(g)))}},z=function(a){J(Q);J(a?R:S);n($,10)},$=function(){if("null"!==d.tracker&&null!==d.tracker){var a=c.isFunction(d.tracker)?d.tracker:f[d.tracker],b=(j.pathname+j.search+(c.address&&!D()?c.address.value():"")).replace(/\/\//,"/").replace(/^\/$/,"");c.isFunction(a)?a(b):c.isFunction(f.urchinTracker)?f.urchinTracker(b):f.pageTracker!==k&&c.isFunction(f.pageTracker._trackPageview)?f.pageTracker._trackPageview(b):f._gaq!==k&&c.isFunction(f._gaq.push)&&
f._gaq.push(["_trackPageview",decodeURI(b)])}},L=function(){var a="javascript:"+g+";document.open();document.writeln('<html><head><title>"+l.title.replace("'","\\'")+"</title><script>var "+s+' = "'+encodeURIComponent(p())+(l.domain!=j.hostname?'";document.domain="'+l.domain:"")+"\";\x3c/script></head></html>');document.close();";7>y?h.src=a:h.contentWindow.location.replace(a)},U=function(){if(B&&-1!=T){var a,b=B.substr(T+1).split("&");for(i=0;i<b.length;i++)a=b[i].split("="),/^(autoUpdate|crawlable|history|strict|wrap)$/.test(a[0])&&
(d[a[0]]=isNaN(a[1])?/^(true|yes)$/i.test(a[1]):0!==parseInt(a[1],10)),/^(state|tracker)$/.test(a[0])&&(d[a[0]]=a[1]);B=null}e=p()},W=function(){if(!V){V=m;U();var a=function(){var a,b=c("a"),e=b.size(),f=-1,k=function(){++f!=e&&(a=c(b.get(f)),a.is('[rel*="address:"]')&&a.address('[rel*="address:"]'),n(k,1))};n(k,1);if(d.crawlable){var h=j.pathname.replace(/\/$/,"");-1!=c("body").html().indexOf("_escaped_fragment_")&&c('a[href]:not([href^=http]), a[href*="'+document.domain+'"]').each(function(){var a=
c(this).attr("href").replace(/^http:/,"").replace(RegExp(h+"/?$"),"");(""===a||-1!=a.indexOf("_escaped_fragment_"))&&c(this).attr("href","#"+a.replace(/\/(.*)\?_escaped_fragment_=(.*)$/,"!$2"))})}},b=c("body").ajaxComplete(a);a();d.wrap&&(c("body > *").wrapAll('<div style="padding:'+(q(b,"marginTop")+q(b,"paddingTop"))+"px "+(q(b,"marginRight")+q(b,"paddingRight"))+"px "+(q(b,"marginBottom")+q(b,"paddingBottom"))+"px "+(q(b,"marginLeft")+q(b,"paddingLeft"))+'px;" />').parent().wrap('<div id="'+s+
'" style="height:100%;overflow:auto;position:relative;'+(H&&!window.statusbar.visible?"resize:both;":"")+'" />'),c("html, body").css({height:"100%",margin:0,padding:0,overflow:"hidden"}),H&&c('<style type="text/css" />').appendTo("head").text("#"+s+"::-webkit-resizer { background-color: #fff; }"));x&&!G&&(a=l.getElementsByTagName("frameset")[0],h=l.createElement((a?"":"i")+"frame"),h.src="javascript:"+g,a?(a.insertAdjacentElement("beforeEnd",h),a[a.cols?"cols":"rows"]+=",0",h.noResize=m,h.frameBorder=
h.frameSpacing=0):(h.style.display="none",h.style.width=h.style.height=0,h.tabIndex=-1,l.body.insertAdjacentElement("afterBegin",h)),n(function(){c(h).bind("load",function(){var a=h.contentWindow;e=a[s]!==k?a[s]:"";e!=p()&&(z(g),j.hash=r(e,m))});h.contentWindow[s]===k&&L()},50));n(function(){J("init");z(g)},1);D()||(G?f.addEventListener?f.addEventListener(C,A,g):f.attachEvent&&f.attachEvent("on"+C,A):aa(A,50))}},k,s="jQueryAddress",C="hashchange",Q="change",R="internalChange",S="externalChange",m=
!0,g=!1,d={autoUpdate:m,crawlable:g,history:m,strict:m,wrap:g},y=10,x=!c.support.opacity,H=/safari/.test(navigator.userAgent.toLowerCase()),ba=/firefox/.test(navigator.userAgent.toLowerCase()),f;try{f=top.document!==k?top:window}catch(da){f=window}var l=f.document,w=f.history,j=f.location,aa=setInterval,n=setTimeout,O=/\/{2,9}/g,X=navigator.userAgent,G="on"+C in f,h,B=c("script:last").attr("src"),T=B?B.indexOf("?"):-1,M=l.title,F=g,V=g,N=m,Y=m,I=g,e=p();if(x){y=parseFloat(X.substr(X.indexOf("MSIE")+
4));l.documentMode&&l.documentMode!=y&&(y=8!=l.documentMode?7:8);var Z=l.onpropertychange;l.onpropertychange=function(){Z&&Z.call(l);l.title!=M&&-1!=l.title.indexOf("#"+p())&&(l.title=M)}}w.navigationMode&&(w.navigationMode="compatible");if("complete"==document.readyState)var ca=setInterval(function(){c.address&&(W(),clearInterval(ca))},50);else U(),c(W);c(window).bind("popstate",function(){e!=p()&&(e=p(),z(g))}).bind("unload",function(){f.removeEventListener?f.removeEventListener(C,A,g):f.detachEvent&&
f.detachEvent("on"+C,A)});c.address={bind:function(a,b,c){return v.apply(this,u(arguments))},init:function(a,b){return v.apply(this,["init"].concat(u(arguments)))},change:function(a,b){return v.apply(this,[Q].concat(u(arguments)))},internalChange:function(a,b){return v.apply(this,[R].concat(u(arguments)))},externalChange:function(a,b){return v.apply(this,[S].concat(u(arguments)))},baseURL:function(){var a=j.href;-1!=a.indexOf("#")&&(a=a.substr(0,a.indexOf("#")));/\/$/.test(a)&&(a=a.substr(0,a.length-
1));return a},autoUpdate:function(a){return a!==k?(d.autoUpdate=a,this):d.autoUpdate},crawlable:function(a){return a!==k?(d.crawlable=a,this):d.crawlable},history:function(a){return a!==k?(d.history=a,this):d.history},state:function(a){if(a!==k){d.state=a;var b=P();d.state!==k&&(w.pushState?"/#/"==b.substr(0,3)&&j.replace(d.state.replace(/^\/$/,"")+b.substr(2)):"/"!=b&&b.replace(/^\/#/,"")!=E()&&n(function(){j.replace(d.state.replace(/^\/$/,"")+"/#"+b)},1));return this}return d.state},strict:function(a){return a!==
k?(d.strict=a,this):d.strict},tracker:function(a){return a!==k?(d.tracker=a,this):d.tracker},wrap:function(a){return a!==k?(d.wrap=a,this):d.wrap},update:function(){I=m;this.value(e);I=g;return this},title:function(a){return a!==k?(n(function(){M=l.title=a;Y&&(h&&h.contentWindow&&h.contentWindow.document)&&(h.contentWindow.document.title=a,Y=g);!N&&ba&&j.replace(-1!=j.href.indexOf("#")?j.href:j.href+"#");N=g},50),this):l.title},value:function(a){if(a!==k){a=K(a);"/"==a&&(a="");if(e==a&&!I)return;
N=m;e=a;if(d.autoUpdate||I)if(z(m),D())w[d.history?"pushState":"replaceState"]({},"",d.state.replace(/\/$/,"")+(""===e?"/":e));else F=m,H?d.history?j.hash="#"+r(e,m):j.replace("#"+r(e,m)):e!=p()&&(d.history?j.hash="#"+r(e,m):j.replace("#"+r(e,m))),x&&!G&&d.history&&n(L,50),H?n(function(){F=g},1):F=g;return this}return K(e)},path:function(a){if(a!==k){var b=this.queryString(),c=this.hash();this.value(a+(b?"?"+b:"")+(c?"#"+c:""));return this}return K(e).split("#")[0].split("?")[0]},pathNames:function(){var a=
this.path(),b=a.replace(O,"index.html").split("index.html");("/"==a.substr(0,1)||0===a.length)&&b.splice(0,1);"/"==a.substr(a.length-1,1)&&b.splice(b.length-1,1);return b},queryString:function(a){if(a!==k){var b=this.hash();this.value(this.path()+(a?"?"+a:"")+(b?"#"+b:""));return this}a=e.split("?");return a.slice(1,a.length).join("?").split("#")[0]},parameter:function(a,b,d){var e,f;if(b!==k){var h=this.parameterNames();f=[];b=b?b.toString():"";for(e=0;e<h.length;e++){var j=h[e],g=this.parameter(j);"string"==typeof g&&
(g=[g]);j==a&&(g=null===b||""===b?[]:d?g.concat([b]):[b]);for(var l=0;l<g.length;l++)f.push(j+"="+g[l])}-1==c.inArray(a,h)&&(null!==b&&""!==b)&&f.push(a+"="+b);this.queryString(f.join("&"));return this}if(b=this.queryString()){d=[];f=b.split("&");for(e=0;e<f.length;e++)b=f[e].split("="),b[0]==a&&d.push(b.slice(1).join("="));if(0!==d.length)return 1!=d.length?d:d[0]}},parameterNames:function(){var a=this.queryString(),b=[];if(a&&-1!=a.indexOf("="))for(var a=a.split("&"),d=0;d<a.length;d++){var e=a[d].split("=")[0];
-1==c.inArray(e,b)&&b.push(e)}return b},hash:function(a){if(a!==k)return this.value(e.split("#")[0]+(a?"#"+a:"")),this;a=e.split("#");return a.slice(1,a.length).join("#")}};c.fn.address=function(a){var b;"string"==typeof a&&(b=a,a=void 0);c(this).attr("address")||c(b?b:this).live("click",function(b){if(b.shiftKey||b.ctrlKey||b.metaKey||2==b.which)return!0;c(this).is("a")&&(b.preventDefault(),b=a?a.call(this):/address:/.test(c(this).attr("rel"))?c(this).attr("rel").split("address:")[1].split(" ")[0]:
void 0!==c.address.state()&&"/"!=c.address.state()?c(this).attr("href").replace(RegExp("^(.*"+c.address.state()+"|\\.)"),""):c(this).attr("href").replace(/^(#\!?|\.)/,""),c.address.value(b))}).live("submit",function(b){c(this).is("form")&&(b.preventDefault(),b=c(this).attr("action"),b=a?a.call(this):(-1!=b.indexOf("?")?b.replace(/&$/,""):b+"?")+c(this).serialize(),c.address.value(b))}).attr("address",!0);return this}})(jQuery);


  var progressSteps = $.parseJSON('[1, 10, 8, 9]');   
  var anim_time = 500;
  var curr_step = progressSteps[0];
  var last_step = curr_step;

  function validateStartForm(skipname) {
    if (skipname == undefined) {
      skipname = false;
    }
    if (1 != 0 || !skipname) {
      if (!validateReqs("#step-page-1", false, false, true)) {
        goToStep(1, true);
        return false;
      }
    }
    if (10 != 0 || !skipname) {
      if (!validateReqs("#step-page-10", false, false, true)) {
        goToStep(10, true);
        return false;
      }
    }
    if (8 != 0 || !skipname) {
      if (!validateReqs("#step-page-8", false, false, true)) {
        goToStep(8, true);
        return false;
      }
    }
    if (9 != 0 || !skipname) {
      if (!validateReqs("#step-page-9", false, false, true)) {
        goToStep(9, true);
        return false;
      }
    }
    if (0 != 0 || !skipname) {
      if (!validateReqs("#step-page-0", false, false, true)) {
        goToStep(9, true);
        return false;
      }
    }
    if ($("#email-signup").length && $("#email-signup").val() && $('#email-signup').val().indexOf('@') === -1) {
      displayMessage('error', "Invalid email address, please make sure it's correct");
      return false;
    }
    return true;
  }


  function goToStep(step, doValidation) {
    last_step_index = $.inArray(last_step, progressSteps);
    curr_step_index = $.inArray(curr_step, progressSteps);
    if (step == null) {
      if (!validateReqs("#step-page-" + curr_step, false, false, true)) {
        return false;
      }

      step = progressSteps[curr_step_index + 1];
    }
    step = parseInt(step);

    for (var i in progressSteps) {
      if (step == progressSteps[i]) {
        break;
      } else {
        if (!validateReqs("#step-page-" + progressSteps[i], false, false, true)) {
          goToStep(progressSteps[i]);
          return false;
        }
      }
    }

    if (step == 0) {
    }
    step_index = $.inArray(step, progressSteps);
    if (last_step_index < step_index) {
      last_step = step;
    }
    if (step_index < 0) {
      return false;
    }

    var pastLast = false;
    var pastCurr = false;

    for(var i=0; i < progressSteps.length; i++) {
      $("#progress-step-" + progressSteps[i]).unbind();
      if (step == progressSteps[i]) {
        $("#progress-step-" + progressSteps[i]).addClass("selected");
        $("#progress-step-" + progressSteps[i]).removeClass("progress-future");
        $("#progress-step-" + progressSteps[i]).addClass("visited");
        pastCurr = true;
      } else if (pastLast) {
        $("#progress-step-" + progressSteps[i]).addClass("progress-future");
        $("#progress-step-" + progressSteps[i]).removeClass("selected");
        $("#progress-step-" + progressSteps[i]).removeClass("progress-done");
      } else {
        if (!pastCurr) {
          $("#progress-step-" + progressSteps[i]).addClass("progress-done");
        }
        $("#progress-step-" + progressSteps[i]).removeClass("selected");
        $("#progress-step-" + progressSteps[i]).removeClass("progress-future");
        $("#progress-step-" + progressSteps[i]).attr("go-to-step", progressSteps[i]);
        $("#progress-step-" + progressSteps[i]).click(function() {
          goToStep($(this).attr("go-to-step"));
        });
      }
      if (progressSteps[i] == last_step) {
        pastLast = true;
      }
    }
    $.address.value(step.toString());  
    if (doValidation) {
      $(".carousel").one("slid", function() {
        validateReqs("#step-page-" + step, false, false, true);
      });
    } else {
      goToId("start-progress");
    }
    $(".carousel").carousel(step_index);
    mixpanel.track("Step " + step);
    curr_step = step;
  }
  function answers_change(name) {
    var val;
    var to_show = {
      'user_type_f': 'partner',
      'pants_inseam_btn_f': '36'
    }
    if (name in to_show) {
      id_name = name;
      val = $('#' + id_name).val();
      if (val == to_show[name]) {
        $('#message_' + name).css("visibility", "visible");
      } else {
        $('#message_' + name).css("visibility", "hidden");
      }
    }
  };

function inchesToFeet(inches) {
    if(inches == 0) {
      return 'BOYUNUZ';
    }
    var feet = parseInt(inches);
    var inches = inches;
    return feet.toString() + "\cm";
  }

  function toLBS(weight) {
    if(weight == 0) {
      return 'KILONUZ';
    }
    return weight.toString() + " kg";
  }

  function toInches(inches) {
    return inches.toString() + "\"";
  }

  function toStr(num) {
    return num.toString();
  }

  function showNext(next_id) {
  if (next_id) {
    $(".next-q-button").each(function() {
      if ($(this).attr("data-next") != next_id) {
        $(this).removeClass("show");
      } else {
        $(this).addClass("show");
      }
    });
  }
}



function shirtSize(ind) {
  var opt = [["NA", "Don't know"], ["XS", "X-Small"], ["S", "Small"], ["M", "Medium"], ["L", "Large"], ["XL", "X-Large"], ["XXL", "2X-Large"], ["XXXL", "3X-Large"]];
  if (isNaN(ind)) {
    for (var i in opt) {
      if (opt[i][0] == ind) {
        ind = i;
        break;
      }
    }
  } else if (ind == 0) {
    return 'Shirt Size'
  } else {
    ind -= 1;
  }

  return opt[ind][1];
}

function pantsWaist(ind) {
  var opt = [["NA", "Don't know"], ["28", "28"], ["29", "29"], ["30", "30"], ["31", "31"], ["32", "32"], ["33", "33"], ["34", "34"], ["35", "35"], ["36", "36"], ["38", "38"], ["40", "40"], ["42", "42"], ["44", "44"]];
  if (isNaN(ind)) {
    for (var i in opt) {
      if (opt[i][0] == ind) {
        ind = i;
        break;
      }
    }
  } else if (ind == 0) {
    return 'Waist Size'
  } else {
    ind -= 1;
  }
  return opt[ind][1].toString() + (ind == 0 ? '':'"').toString();
}

function pantsInseam(ind) {
  var opt = [["NA", "Don't know"], ["30", "30"], ["32", "32"], ["34", "34"], ["36", "36"], ["38", "38"]];
  if (isNaN(ind)) {
    for (var i in opt) {
      if (opt[i][0] == ind) {
        ind = i;
        break;
      }
    }
  } else if (ind == 0) {
    return 'Inseam'
  } else {
    ind -= 1;
  }
  return opt[ind][1].toString() + (ind == 0 ? '':'"').toString();
}

function clothesShape(ind) {
  if (ind == "") {
    ind = 0;
  }
  var opt = [["NA", "Don't know"], ["Trim", "Trim"], ["Straight", "Straight"], ["Relaxed", "Relaxed"]];
  if (isNaN(ind)) {
    for (var i in opt) {
      if (opt[i][0] == ind) {
        ind = i;
        break;
      }
    }
  } else if (ind == 0) {
    return 'Fit'
  } else {
    ind -= 1;
  }
  return opt[ind][1];
}

function budgetIndex(ind, d) {
  return d[ind][1];
}

$(document).ready(function() {
      onReady();
      
$('.explanation').popover({html: true, content: function() { return 'We use this information only to get a sense of your current style. Your selections will <span style="text-decoration: underline;">not</span> be restricted to these brands.'}, placement: "bottom", trigger: "hover"});
$("#onboard-form").submit(function() {
    return validateStartForm();
});

$(".option-texts").keyup(function() {
  if ($(this).val()) {
    $(this).parents(".clearfix").removeClass("error");
  }
})
$(".continue").bind("click", function() {

  $("html,body").animate({ scrollTop: 0}, 500 );
  goToStep();
});

$(".previous").bind("click", function() {
	
	if ($(this).attr("data-previous") == "1") {
		goToStep(1,50);
	}
	else if ($(this).attr("data-previous") == "10") {
		goToStep(10,50);
	}
	else if ($(this).attr("data-previous") == "8") {
		goToStep(8,50);
	}
	else {
		window.location.href="https://packsion.com/";
	}  
});

$.address.externalChange(function(params) {
  m = params.path.match("[0-9]+");
  if (m != null) {
    toStep = parseInt(m[0]);
    if (toStep >= 0) {
      goToStep(toStep);

    }
  }
});

$(".carousel").carousel({
  interval: false
});


$("#fb-connect").click(function() {
  if (validateStartForm(true)) {
    $("#signup-modal").modal("hide");
    FBLogin("signup");
  }
});

$(".choice-box").bind("click", function() {
  if ($(this).hasClass("disabled")) {
    return false;
  }
  if ($(this).hasClass("can_multiple")) {
    if ($(this).hasClass("has_limit") && !$(this).hasClass("focused")) {
      var limit = Number($(this).attr("opt-limit"));
      if (!isNaN(limit) && limit > 0) {
        var picked = $('[name="' + $(this).attr("name") + '"]').filter(function() {return $(this).hasClass("focused")}).map(function() {return $(this).attr("opt-id")}).get();
        if (picked.length >= limit) {
          var emsg = $(this).attr("opt-max-msg");
          displayMessage("error", emsg);
          return
        }
      }
    }
    $(this).toggleClass("focused");

    values = $('[name="' + $(this).attr("name") + '"]').filter(function() {return $(this).hasClass("focused")}).map(function() {return $(this).attr("opt-id")}).get();
    if (values.length) {
      $("#" + $(this).attr("name")).val(values.join(", "));
    } else {
      $("#" + $(this).attr("name")).val('');
    }
  }else {
    $("#" + $(this).attr("name")).val($(this).attr("opt-id"));
    var currentActive = $(this).parent(".opt-container").siblings().children(".choice-box").filter(function() {return $(this).hasClass("focused")});
    if (currentActive.length) {
      currentActive.removeClass("focused");
    }

    //$(this).addClass("focused");
  }
  $(this).parents(".clearfix").removeClass("error");
  if ($("#" + $(this).attr("name")).val()) {
    if ($("#" + $(this).attr("name")).attr("data-next")) {
      showNext($("#" + $(this).attr("name")).attr("data-next"));
    }
  }
    answers_change($(this).attr("name"));
});

$(".prompt-select").change(function() {
  if ($(this).val() && $(this).attr("data-next")) {
    showNext($(this).attr("data-next"));
  }
});

$(".price-box").bind("click", function() {
  var val = parseInt($(this).attr("opt-id"));
  $(".clothes_type").each(function() {
    var limit = parseInt($(this).attr("opt-limit"));
    if (limit > val) {
      if ($(this).hasClass("focused")) {
        $("#" + $(this).attr("name")).val("");
        $(this).removeClass("focused");
      }
      $(this).addClass("disabled");
    } else {
      $(this).removeClass("disabled");
    }
  });
});

$(".next-q-button").bind("click", function() {
  goToId($(this).attr("data-next") + "_q", 50);
  $(this).removeClass("show");
});
$(".calendar").datepicker({
  maxDate: "+2m", 
  minDate: "+3d", 
  defaultDate: "+7",
  onSelect: function(dataText, inst) {
    if ($(this).attr("data-next")) {
      showNext($(this).attr("data-next"));
    }
  }
});



    });
    $(window).load(function() {
      

      onLoad();
    });

    (function(c,a){window.mixpanel=a;var b,d,h,e;b=c.createElement("script");
    b.type="text/javascript";b.async=!0;b.src=("https:"===c.location.protocol?"https:":"http:")+
    '//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';d=c.getElementsByTagName("script")[0];
    d.parentNode.insertBefore(b,d);a._i=[];a.init=function(b,c,f){function d(a,b){
    var c=b.split(".");2==c.length&&(a=a[c[0]],b=c[1]);a[b]=function(){a.push([b].concat(
    Array.prototype.slice.call(arguments,0)))}}var g=a;"undefined"!==typeof f?g=a[f]=[]:
    f="mixpanel";g.people=g.people||[];h=['disable','track','track_pageview','track_links',
    'track_forms','register','register_once','unregister','identify','alias','name_tag','set_config',
    'people.html','people.set_once','people.increment','people.track_charge','people.append'];
    for(e=0;e<h.length;e++)d(g,h[e]);a._i.push([b,c,f])};a.__SV=1.2;})(document,window.mixpanel||[]); 
    mixpanel.init("1be9dc2cf74ea94ab2d9382c4362a3f3");

  mixpanel.register_once({ref: "", aff: ""});
    mixpanel.track_links("#header-get-started", "Click Get Started Header");
    
  mixpanel.track("Starting");
  mixpanel.register({onboard_type: 17})
  
 $(':radio').mousedown(function(e){
  var $self = $(this);
  $(this).parent(".choice-box").addClass("focused");
  var $parentRoot = $(this).parent();
  if( $self.is(':checked') ){
    var uncheck = function(){
	  $self.parent(".choice-box").removeClass("focused");
      setTimeout(function(){$self.removeAttr('checked');},0);
    };
    var unbind = function(){
      $self.unbind('mouseup',up);
    };
    var up = function(){
      uncheck();
      unbind();
    };
    $self.bind('mouseup',up);
    $self.one('mouseout', unbind);
  }
});