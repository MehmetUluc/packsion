
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Mail Base</title>

    <style>
    @media only screen and (min-width: 600px){.container{width:600px;margin:auto}}@media only screen and (max-width: 599px){.container{width:100%}}body{margin:0px;padding:0px}.header{background:#232931}.header .nav{margin:0px 20px;padding-top:6px}.header .nav table{width:100%}.header .nav .nav-brand a{font-family:'Playfair Display', serif;font-size:calc(20px + 1.3vw);font-style:italic;color:white;text-decoration:none}.header .nav .nav-collection{text-align:right}.header .nav .nav-collection .nav-link{color:white;font-family:"Segoe UI";font-size:15px;font-size:calc(12px + 0.3vw);text-decoration:none;padding:0px 6px}.banner{position:relative;background:url("https://preview.ibb.co/hfmsrd/beard_blurred_background_casual_842811.jpg");background-size:cover;background-repeat:no-repeat;background-position:center;width:100%;height:40vh;overflow:hidden;text-align:center}.middle{padding:0px calc(5px + 6vh) 40px calc(5px + 6vh);position:relative;z-index:999}.middle .middle-inner{margin-top:-40px;z-index:999;background:#eee;box-shadow:0px 6px 12px rgba(0,0,0,0.3);padding:calc(14px + 1.2vw) 20px}.middle .middle-inner h2{font-family:"Segoe UI";font-weight:700;font-size:40px;font-size:calc(20px + 1.2vw);margin:0px;padding:8px 0px;color:#1f1f1f;padding-bottom:6px}.middle .middle-inner h3{font-family:"Segoe UI";font-weight:300;font-size:calc(14px + 0.8vw);margin:0px;color:#464646}.middle .middle-inner p{font-family:"Segoe UI";font-size:calc(12px + 0.2vw);color:#2e2e2e}.middle .middle-inner .btn-prm{background:#232931;font-weight:500;text-decoration:none;color:white;font-family:"Segoe UI";font-size:15px;padding:14px 24px;border-radius:60px;box-shadow:0px 6px 12px rgba(37,37,37,0.459);transition:all 0.2s ease-out}.footer{text-align:center;background:#232931;padding:20px 0px 0px 0px}.footer h3{color:white;font-style:italic;font-size:calc(20px + 0.8vw);margin:6px auto;font-family:"Segoe UI"}.footer p{font-family:"Segoe UI";color:white;font-size:calc(12px + 0.2vw);padding:0px 20px;text-align:center}.footer .bottom{width:100%;background:rgba(0,0,0,0.4)}.footer .bottom th h4{font-family:"Segoe UI";color:white;margin-bottom:4px}.footer .bottom td{font-family:"Segoe UI";color:rgba(255,255,255,0.44)}.footer .bottom td a{font-family:"Segoe UI";color:rgba(255,255,255,0.705);text-decoration:underline}
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
    

                
    
    
    </div>


    <div class="banner">

        </div>

    
    <div class="middle">

        <div class="middle-inner">
            <center>
            <h2>Merhaba {{ Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname }} !</h2>
            <h3>Siparişinizi başarıyla iptal ettiniz.</h3>

                    <p>Bunu yapmanız bizi üzdü, umarız ki en kısa sürede sizi yeniden aramızda görürüz!</p>
                    
                
                    <br>
    
                    <a href="https://packsion.com" class="btn-prm">Yeni Sipariş Ver</a>
                    
                    <br>
                    <br>
                    </center>


                </div>
                       
    
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