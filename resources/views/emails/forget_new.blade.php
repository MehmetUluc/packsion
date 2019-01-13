<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <title>Mail Base</title>

    <style>
    @media only screen and (min-width: 600px){.container{width:600px;margin:auto}}@media only screen and (max-width: 599px){.container{width:100%}}body{margin:0px;padding:0px}.header{background:#232931}.header .nav{border-bottom:2px solid white;margin:0px 20px;padding-top:6px}.header .nav table{width:100%}.header .nav .nav-brand a{font-family:'Playfair Display', serif;font-size:calc(20px + 1.3vw);font-style:italic;color:white;text-decoration:none}.header .nav .nav-collection{text-align:right}.header .nav .nav-collection .nav-link{color:white;font-family:"Segoe UI";font-size:15px;font-size:calc(12px + 0.3vw);text-decoration:none;padding:0px 6px}.header .banner{position:relative;overflow:hidden;text-align:center}.header .banner .banner-text{text-align:center;padding:6px 10px;width:100%}.header .banner .banner-text h2{font-family:"Segoe UI";font-weight:700;font-size:40px;font-size:calc(20px + 1.2vw);margin:0px;padding:8px 0px;color:#ffffff;padding-bottom:6px}.header .banner .banner-text h3{font-family:"Segoe UI";font-weight:300;font-size:calc(18px + 0.8vw);margin:0px;color:#08D9D6}.middle{overflow:hidden !important;padding:calc(14px + 1.2vw) 20px}.middle h2{font-weight:700;font-size:calc(18px + 0.8vw);font-size:26px;font-family:"Segoe UI";color:#272727}.middle p{font-family:"Segoe UI";font-size:calc(14px + 0.4vw);color:#2e2e2e}.middle .btn-prm{background:#232931;font-weight:500;text-decoration:none;color:white;font-family:"Segoe UI";font-size:18px;padding:16px 30px;border-radius:60px;box-shadow:0px 6px 12px rgba(37,37,37,0.459);transition:all 0.2s ease-out}.footer{text-align:center;background:#232931;padding:20px 0px 0px 0px}.footer h3{color:white;font-style:italic;font-size:calc(20px + 0.8vw);margin:6px auto;font-family:"Segoe UI"}.footer p{font-family:"Segoe UI";color:white;font-size:calc(12px + 0.2vw);padding:0px 20px;text-align:center}.footer .bottom{width:100%;background:rgba(0,0,0,0.4)}.footer .bottom th h4{font-family:"Segoe UI";color:white;margin-bottom:4px}.footer .bottom td{font-family:"Segoe UI";color:rgba(255,255,255,0.44)}.footer .bottom td a{font-family:"Segoe UI";color:rgba(255,255,255,0.705);text-decoration:underline}
/*# sourceMappingURL=style.css.map */
</style>


</head>
<body>
    <main>
    <div class="container">
    <div class="header">
            <div class="nav">
    
                <table>
                    <tr>
                        <td><div class="nav-brand"><a href=""><img src="https://preview.ibb.co/jtvWhJ/packsion_logo.png" alt="packsion_logo" border="0" height="40px"></a></div></td>
                        <td>
                                <div class="nav-collection">

                                        <a href="http://packsion.com" class="nav-link">Ziyaret Edin</a>
                                    </div>
                        </td>
                    </tr>
                </table>
    
    
            </div>
    
            <div class="banner">
    
                    
                
<div class="banner-text">

    <br>
    <br>
    <img src="https://image.ibb.co/cYnWXJ/forgot_2.png" alt="forgot_2" border="0" height="140px">
        <h2>Selam {{ $customer->customers_firstname }}!</h2>
        <h3>Bizden yeni şifre talebinde bulundunuz</h3>
<br>

  

</div>

                               
               
                            
                            
                
                
                
                    </center>
                </div>
                
    
    
    </div>
    
    <div class="middle">

                    <p>Eğer bu talebi siz yapmadıysanız, bir şey yapmanıza gerek yok! Talebi siz yaptıysanız şifrenizi sıfırlamak için aşağıdaki linke tıklayın</p>
                    
                    <center>
                    <br>
    
                    <a href="{{$customer->hash}}" class="btn-prm">Şifremi Güncelle</a>
                    
                    <br>
                    <br>
                    <br>
                    </center>
                       
    
    </div>
    
    <div class="footer">
        <br>
        <a href=""><img src="https://preview.ibb.co/jtvWhJ/packsion_logo.png" alt="packsion_logo" border="0" height="40px"></a>
    <p>Şıklık dolu günler dileriz</p>   
    <br>
    
    
    <table class="bottom">
       <tr>
        <th><h4>İLETİŞİM</h4></a></th>

        <th><h4>SOSYAL MEDYADA BİZ</h4></th>
    
    
    </tr>
    <tr>
    <td>Kemeraltı Caddesi Galata İş Merkezi <br>No: 30-1A K:6 Karaköy<br>Beyoğlu / İstanbul</td>
    <td><a href="#">Facebook </a><br>
        <a href="#">Twitter</a><br>

        </td>

    
    </tr>
    </table>
    
    
    
    </div>
    
    </div>
    
    
    </main>
    
    
    
        
    </body>
</html>