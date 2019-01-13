
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <title>Sipariş Detayı</title>
    <style>
    @media only screen and (min-width: 600px){.container{width:600px;margin:auto}}@media only screen and (max-width: 599px){.container{width:100%}}body{margin:0px;padding:0px}.header{background:#F73859}.header .nav{border-bottom:2px solid white;margin:0px 20px}.header .nav table{width:100%}.header .nav .nav-brand a{font-family:'Playfair Display', serif;font-size:calc(20px + 1.3vw);font-style:italic;color:white;text-decoration:none}.header .nav .nav-collection{text-align:right}.header .nav .nav-collection .nav-link{color:white;font-family:"Segoe UI";font-size:15px;font-size:calc(12px + 0.3vw);text-decoration:underline;padding:0px 6px}.header .banner{text-align:center}.header .banner h3{font-size:calc(22px + 1.8vw);font-weight:500;width:100%;color:white}.header .banner table{margin-left:10%}.header .banner table td h2{font-size:calc(22px + 2.8vw);font-weight:700;padding:0px;margin:0px;color:white}.middle{overflow:hidden !important;padding:calc(14px + 1.2vw) 20px}.middle h2{font-weight:700;font-size:calc(18px + 0.8vw);font-size:26px;font-family:"Segoe UI";color:#272727}.middle p{font-family:"Segoe UI";font-size:calc(15px + 0.4vw);color:#2e2e2e}.middle h5{font-size:calc(15px + 0.2vw);color:#272727;font-family:"Segoe UI";margin-bottom:4px !important}.middle a{color:#F73859;font-size:16px;text-decoration:none;font-family:"Segoe UI"}.middle h4{font-size:calc(16px + 0.5vw);color:#272727;font-family:"Segoe UI"}.middle table{font-family:"Segoe Ui"}.middle table tr,.middle table td,.middle table th{padding:10px 20px;color:#1f1f1f}.middle table td,.middle table th{border:1px solid #2c2c2c}.middle .btn-prm{background:#283149;font-weight:700;text-decoration:none;color:white;font-size:18px;padding:16px 30px;border-radius:60px;box-shadow:0px 6px 12px rgba(40,49,73,0.8);transition:all 0.2s ease-out}.footer{text-align:center;background:#252A34;padding:20px 0px 0px 0px}.footer h3{color:white;font-style:italic;font-size:calc(20px + 0.8vw);margin:6px auto;font-family:"Segoe UI"}.footer p{font-family:"Segoe UI";color:white;font-size:calc(12px + 0.2vw);padding:0px 20px;text-align:center}.footer .bottom{width:100%;background:rgba(0,0,0,0.4)}.footer .bottom th h4{font-family:"Segoe UI";color:white;margin-bottom:4px}.bottom td {font-family:"Segoe UI";color:rgba(255, 255, 255, 0.700);}.footer .bottom td a{font-family:"Segoe UI";color:rgba(255, 255, 255, 0.705);text-decoration: underline;}
</style>


</head>
<body>
<main>
<div class="container">
<div class="header">
        <div class="nav">

            <table>
                <tr>
                    <td><div class="nav-brand"><a href=""><img src="https://preview.ibb.co/jtvWhJ/packsion_logo.png" alt="Packsion" border="0" height="40px"></a></div></td>
                    <td>
                            <div class="nav-collection">

                                    <a href="http://packsion.com" class="nav-link">Ziyaret Edin</a>
                                </div>
                    </td>
                </tr>
            </table>


        </div>

        <div class="banner">

                <center>
            
            <h3>Kargonuz Gönderildi</h3>
            
            
            <div style="width: 100%; display: block">
                <img src="https://image.ibb.co/inYvsJ/cart.png" alt="cart" border="0" height="180px">
            </div>
            <br>
            <br>
                        <div style="width: 100%">
                            <table>
                                <tr>
                                    <td>
                                        <img src="https://image.ibb.co/jFTyey/check.png" alt="check" border="0" height="40px">
                                    </td>
                         <td>
                         <h2>Tebrikler !!</h2>       
                            </td>
                                </tr>
                            </table>
                            <br>
                            <br>
                              
                        </div>
        
                           
           
                        
                        
            
            
            
                </center>
            </div>
            


</div>

<div class="middle">
                <h2>Merhaba {{ $customer->customers_firstname . ' ' . $customer->customers_lastname }},</h2>
                <p>Kargonuz gönderildi!</p>
                <h5>Kargo Detaylarınız Aşağıdadır</h5>
                
                
                <br>
                <center>
                <h4>Kargo Detayları:</h4>
                
                <table>
                    <tr>
                        <th>Alıcı Adı</th>
                        <td>{{$customer->customers_firstname . ' ' . $customer->customers_lastname}}</td>
                    </tr>
                    <tr>
                        <th>Sipariş Kodu</th>
                        <td>{{$order->orders_id}}</td>
                    </tr>
                    <tr>
                        <th>Kargo Şirketi:</th>
                        <td>MNG</td>
                    </tr>
                    <tr>
                        <th>Kargo Takip No:</th>
                        <td>{{ $last_ship }}</td>
                    </tr>
                </table>

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