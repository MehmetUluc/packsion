'use strict';
$(document).ready(function () {
    //Date
    var monthNames = ["OCAK", "ŞUBAT", "MART", "NİSAN", "MAYIS", "HAZİRAN",
        "TEMMUZ", "AĞUSTOS", "EYLÜL", "EKİM", "KASIM", "ARALIK"
    ];
    var now = new Date();
    $("#currentMonth,#currentBox").text(monthNames[now.getMonth() + 1]);
    var current;
    if (now.getMonth() === 11) {
         current = new Date(now.getFullYear() + 1, 0, 1);
         console.log(current);
    } else {
         current = new Date(now.getFullYear(), now.getMonth() + 1, 1);
    }
    var nextMonth = new Date(current);


    //Animation


    //Mobil menu
    $('#mobile-menu').click(function() {
        $(this).toggleClass('active');
        $("body").toggleClass('scroll');
        $('#overlay').toggleClass('open');
    });



    //Form validations
    $("#register-form").validate();

    //Only Numeric Input
    $(".onlyNumeric").ForceNumericOnly();

    //Modal options
    $("[data-fancybox]").fancybox({
        fullScreen : false,
        iframe : {
            preload : true,
            scrolling : 'no',
            width: '80%',
            maxHeight : '600px',
            css : {
                'padding':'10px'
            }
        },
        closeClickOutside : false

    });

    //Clear address form
    $('#add-new-address').click(function() {
        $('.dashboard-myaddresses form').find("input[type=text], textarea, select").val("");
    });

    //Select default address
    $('.myaddress .default-address').click(function(){
        $(".myaddress").removeClass("active").find("input[type=checkbox]").prop('checked', false);
        $(this).closest(".myaddress").addClass("active").find("input[type=checkbox]").prop('checked', true);
    });

    //Edit address
    $('.edit-address').click(function(){
        alert("Adres düzenle");
    });

    //Remove address
    $('.remove-address').click(function(e){
      e.preventDefault(); // Prevent the href from redirecting directly
      var linkURL = $(this).attr("href");
        var _this = $(this);
        swal({
                title: "Adres sil",
                text: "Bu adresi silmek istediğinize emin misiniz ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dd5642",
                confirmButtonText: "Sil",
                cancelButtonText: "İptal",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //Ajax request
                    window.location.href = linkURL;
                    _this.closest('.col-md-6').remove();

                    swal({
                        title: "Silindi!",
                        text : "Seçtiğiniz adres silindi",
                        type: "success",
                        confirmButtonText: "Tamam",
                        confirmButtonColor: "#0f346c"
                    });

                } else {
                    swal({
                        title: "İptal!",
                        text : "İşlem iptal edildi",
                        confirmButtonText: "Tamam",
                        html: true,
                        confirmButtonColor: "#0f346c"
                    });
                }
            });

    });

    //Cancel membership
    $('.membership-stop').click(function () {
        var _this = $(this);
        swal({
                title: "Üyeliği durdur",
                text: "Bu üyeliğinizi durdurmak istediğinize emin misiniz ?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dd5642",
                confirmButtonText: "Durdur",
                cancelButtonText: "İptal",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    //Ajax request
                    _this.closest('.col-md-7').find('.save-btn').text("üyelik durduruldu").addClass("disabled");
                    swal({
                        title: "Durduruldu!",
                        text : "Bu üyeliğiniz durduruldu, aktif etmek için <strong class='secondary-color'> Üyeliğe Devam Et </strong> seçiniz ",
                        type: "success",
                        confirmButtonText: "Tamam",
                        html: true,
                        confirmButtonColor: "#0f346c"
                    });
                } else {
                    swal({
                        title: "İptal!",
                        text : "İşlem iptal edildi",
                        confirmButtonText: "Tamam",
                        html: true,
                        confirmButtonColor: "#0f346c"
                    });
                }
            });
    });

    //Discount apply
    $(".btn-discount-apply2").click(function () {
       if($("#discount-code").val()===""){
           swal({
               title:"Uyarı!",
               text: "Lütfen indirim kodunu yazınız",
               type: "warning",
               confirmButtonText: "Tamam",
               confirmButtonColor: "#0f346c"
           });
       }else{
           swal({
               title:"İşleminiz yapılıyor",
               text: "Lütfen bekleyiniz",
               type: "info",
               allowEscapeKey: false,
               showConfirmButton: false
           },function () {
               //ajax call
               $.ajax({
                   url: 'http://api.joind.in/v2.1/talks/10889',
                   type: 'POST',
                   dataType: 'jsonp',
                   data: {
                       format: 'json'
                   },
                   error: function() {

                   },
                   success: function(data) {
                       if(data.response){
                           //discount true
                           swal({
                               title:"Tebrikler!",
                               text: "İndiriminiz uygulanmıştır",
                               type: "success",
                               confirmButtonText: "Tamam",
                               confirmButtonColor: "#0f346c"
                           });
                       }else{
                           //discount false
                           swal({
                               title:"Geçersiz kod",
                               text: "İndirim kodunuz geçerli değildir!",
                               type: "error",
                               confirmButtonText: "Tamam",
                               confirmButtonColor: "#0f346c"
                           });
                       }
                   }

               });

           });
       }
    });

});

$(window).load(function () {

});
