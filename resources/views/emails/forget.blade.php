<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0047)http://administrator-karl-63175.bitballoon.com/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Responsive Email Template</title>
<style type="text/css">
	.ReadMsgBody {width: 100%; background-color: #ffffff;}
	.ExternalClass {width: 100%; background-color: #ffffff;}
	body	 {width: 100%; background-color: #EEF3FA; margin:0; padding:0; -webkit-font-smoothing: antialiased;font-family: Arial, Helvetica, sans-serif;}
	table {border-collapse: collapse;}
	
	@media only screen and (max-width: 640px)  {
					body[yahoo] .deviceWidth {width:100%!important; padding:0;}	
					body[yahoo] .center {text-align: center!important;}	 
			}
			
	@media only screen and (max-width: 479px) {
					body[yahoo] .deviceWidth {width:100%!important; padding:0;}	
					body[yahoo] .center {text-align: center!important;}	 
			}

</style>
<script type="text/javascript"> 
document.oncontextmenu = function(){return false;};
document.onselectstart = function() {return false;};
</script>

<script>
document.onkeydown = function(e) {
    if(e.keyCode == 123) {
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
     return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
     return false;
    }
	if(e.ctrlKey && e.keyCode == 'c'.charCodeAt(0)){
     return false;
    }
	if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
     return false;
    }

    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)){
     return false;
    }      
 }
</script>

<script language="JavaScript1.2" type="text/javascript">
  //The functions disableselect() and reEnable() are used to return the status of events.

        function disableselect(e)
        {
                return false 
        }
        
        function reEnable()
        {
                return true
        }
        
        //if IE4 
        // disable text selection
        document.onselectstart=new Function ("return false")
        
        //if NS6
        if (window.sidebar)
        {
                //document.onmousedown=disableselect
                // the above line creates issues in mozilla so keep it commented.
        
                document.onclick=reEnable
        }
        
        function clickIE()
        {
                if (document.all)
                {
                        (message);
                        return false;
                }
        }
        
        // disable right click
        document.oncontextmenu=new Function("return false")
        
</script>


<script type="text/javascript"> 
function disableselect(e){  
return false  
}  

function reEnable(){  
return true  
}  

//if IE4+  
document.onselectstart=new Function ("return false")  
document.oncontextmenu=new Function ("return false")  
//if NS6  
if (window.sidebar){  
document.onmousedown=disableselect  
document.onclick=reEnable  
}
</script>




<script language="javascript">
<!--
//Disable right click script - By LegendTricks.com
//
var message="Function Disabled";
////////////////
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
document.oncontextmenu=new Function("return false")
// -->
</script>
</head>

<body oncontextmenu="return false" onmousedown="return false" onselectstart="return false" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix" style="font-family: Georgia, Times, serif">

<!-- Wrapper -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
	<tbody><tr>
		<td width="100%" valign="top" bgcolor="#EEF3FA" style="padding:20px 10px;">
		
        <!-- Start Body-->
        <table width="650" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="center">
          <tbody><tr>
            <td bgcolor="#456570" height="5" align="center" valign="top">
            

            </td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" align="center" valign="top">
            <table width="600" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="center">
              <tbody><tr>
                <td align="center" valign="top" style="padding:25px 0px 10px 0px;"><a href="https://packsion.com/"><img mc:edit="hlogo" src="https://packsion.com/resources/themes/packsion/assets/img/packsion_logo.png" width="206" height="auto"></a></td>
              </tr>
            </tbody></table>

            </td>
          </tr>

          <tr>
            <td bgcolor="#FFFFFF" align="center" valign="top"><img mc:edit="hbannero" src="https://packsion.com/resources/themes/packsion/assets/img/promo2.gif" width="650" height="auto" class="deviceWidth"></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF" align="center" valign="top" style="padding:10px 10px;">
            <table width="600" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="center">
              <tbody>
              
			  <tr>
                <td mc:edit="cont_1" align="left" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:22px;font-weight:bold; color:#000000; padding:50px 0px 5px 0px;">Merhaba {{ $customer->customers_firstname }},</td>
              </tr>
			  
			  <tr>
                <td mc:edit="cont_1" align="left" valign="top" style="font-family: Arial, sans-serif; font-size:15px; color:#000000; padding:20px 0px 10px 0px;line-height:24px;">Aşağıdaki linke tıklayarak hızlıca şifrenizi değiştirebilirsiniz.</td>
              </tr>
			        <tr>
					    <td style="padding:40px 10px 10px;" valign="top" bgcolor="transparent" align="center">
					        <table class="deviceWidth" width="300" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
			                        
			                        <tr>
                                       <td mc:edit="heatitl_4" style="font-family:Lato, Arial, sans-serif; font-size:30px; color:#FFFFFF; padding:12px 12px; text-transform:uppercase;background:#44646E;border-radius:10px;" valign="top" align="center"> 
									   
									    <a class="mcnButton " title="Read the Answer" href="{{$customer->hash}}" target="_self" style="font-weight: bold;letter-spacing: -0.5px;line-height: 100%;text-align: center;text-decoration: none;color: #FFFFFF;">ŞİFRE DEĞİŞTİR</a>
                           
									   </td>
                                    </tr>
                                </tbody>
			                </table>
                        </td>
                    </tr>
			  
			  
			  <tr>
                <td mc:edit="cont_1" align="left" valign="top" style="font-family: Arial, sans-serif; font-size:15px; color:#000000; padding:50px 0px 15px 0px;line-height:24px;">Eğer şifre değiştirme talebinde bulunmadıysanız, lütfen bu e-maili dikkate almayın.Şifrenizin güvenliğinden emin olmanızı öneririz.</td>
              </tr>
			  
			  <tr>
                <td mc:edit="cont_1" align="right" valign="top" style="font-family: Arial, sans-serif; font-size:15px; color:#000000; padding:20px 30px 15px 0px;line-height:14px;"><p style="text-align:right;padding-bottom:0px;">Şıklık dolu günler dileriz,</p> <p style="text-align:right;padding-top:0px; font-weight:bold;">Packsion Ailesi</p></td>
              </tr>
			  
			  
            </tbody></table>
            </td>
          </tr>
          
          
          
           
          
          <tr>
            <td bgcolor="#1E1F1F" align="center" valign="top" style="padding:20px 10px;">
            <table width="600" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="center">
              <tbody><tr>
                <td align="center" valign="top">
                <table width="202" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="left">
                  <tbody>
				  
				  <tr>
                    <td mc:edit="hectc" class="center" width="220" align="left" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:18px; color:#FFFFFF; padding:10px 0px 5px 0px;">İletişim</td>
                  </tr>
                  <tr>
                    <td mc:edit="heacont" class="center" align="left" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:14px; color:#FFFFFF; padding:5px 0px 10px 0px;; line-height:24px;"><img src="https://s25.postimg.org/ydhvy6bxb/s_4.png" width="22" height="17">   0542 343 7225<br>
                       İstanbul Sitesi C1 |  Blok No:2B Daire: 280 | Ataşehir İstanbul </td>
                  </tr>
                </tbody></table>
                
                <table width="377" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="right">
                  <tbody><tr>
                    <td align="center" valign="top">
                    <table width="170" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="left">
                      <tbody><tr>
                        <td mc:edit="heflo" width="200" align="center" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:18px; color:#FFFFFF; padding:10px 0px 5px 0px;">Bizi takip edin</td>
                      </tr>
                      <tr>
                        <td mc:edit="heasocial" align="center" valign="top" style="padding:10px 0px;"><a style="padding:5px;" href="https://www.facebook.com/Packsion-117848532151695"><img src="https://s25.postimg.org/quyqpm55r/s_1.png" width="34" height="34"></a> <a style="padding:5px;" href="https://packsion.com/"><img src="https://s25.postimg.org/npe4zl9qn/s_2.png" width="34" height="34"></a> <a style="padding:5px;" href="https://www.instagram.com/packsioncom/"><img src="https://s25.postimg.org/fg6uytai7/if_instagram_245996.png" width="34" height="34"></a></td>
                      </tr>
                    </tbody></table>
                    <table width="186" border="0" cellspacing="0" cellpadding="0" class="deviceWidth" align="right">
                      <tbody><tr>
                        <td mc:edit="heapref" class="center" width="180" align="right" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:18px; color:#FFFFFF; padding:10px 0px 5px 0px;">PACKSION</td>
                      </tr>
                      <tr>
                        <td mc:edit="hunsub" class="center" align="right" valign="top" style="font-family:Lato, Arial, sans-serif; font-size:14px; color:#88DCFF; padding:5px 0px 10px 0px; line-height:24px;"><a style="text-decoration:none; color:#88DCFF;" href="https://packsion.com/">Sitemizi Ziyaret Edin</a><br>
                         
                        </td>
                      </tr>
                    </tbody></table>

                    </td>
                  </tr>
                </tbody></table>


                </td>
              </tr>
            </tbody></table>

            </td>
          </tr>
          
         
        </tbody></table>        <!-- End 4 Columns -->
						
		</td>
	</tr>
</tbody></table> <!-- End Body -->



</body></html>