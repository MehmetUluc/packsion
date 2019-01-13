<p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal"><a name="_GoBack"></a><b><span lang="EN-GB" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;">PACKSION MESAFELİ SATIŞ SÖZLEŞMESİ</span></b><span lang="EN-GB" style="font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;text-align:center;line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Bu Sözleşme, ALICI (Tüketici)'nin, mobil cihazındaki uygulama ile işlem
yaptığı halleri de kapsamak üzere SATICI'ya ait www.packsion.com elektronik
ticaret internet sitesine ("İNTERNET SİTESİ") sipariş vererek satın almak
istediği aşağıda belirtilen ürün/hizmetlerin ("Ürün/Ürünler")
ALICI'ya satışı-teslimi ve diğer hususlara ilişkin olarak tarafların hak ve
yükümlülüklerini düzenler. ALICI bu Sözleşme'yi İNTERNET SİTESİ'nde
onayladıktan sonra, sipariş verdiği Ürün(ler)'in bedeli ve masrafları seçtiği
ödeme yöntemi ile tahsil olunur.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">1.&nbsp;TARAFLAR</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">İşbu Mesafeli Satış Sözleşmesi (“Sözleşme”) aşağıdaki taraflar arasında
akdedilmiştir:<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">SATICI:</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;PACKERS Pazarlama İç ve Dış Ticaret A.Ş. ("PACKERS")<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-Adres: Atatürk Mh. Ertuğrul Gazi Sok. Metropol İstanbul Sitesi C1 Blok
No:2B &nbsp;Daire: 280 Ataşehir İstanbul<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-E-mail: info@Packsion.com<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-Tel: <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">SİPARİŞ VEREN: {{ Auth::guard('customer')->user()->firstname . ' ' . Auth::guard('customer')->user()->lastname }} </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p>
@php
  $address = json_decode($order->billing_address_text);
 @endphp
<p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-Adres: {{ $order->customers_street_address }} <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-E-mail: {{ Auth::guard('customer')->user()->customers_email_address }} <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">ALICI: {{ Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname }} &nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-Adres: {{ $order->customers_street_address }}<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-E-mail: {{ Auth::guard('customer')->user()->customers_email }} <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">2.&nbsp;&nbsp;&nbsp;&nbsp;SÖZLEŞMENİN KONUSU</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Tüketicinin Korunması Hakkındaki Kanun ve ilgili sair düzenlemeler
çerçevesinde&nbsp;, PACKERS tarafından, SİPARİŞ VEREN/ALICI'ya satışını yaptığı
ve burada nitelik, miktar ve vergiler dahil satış fiyatı belirtilen ürünlerin
satışı ve teslimi ile ilgili tarafların hak ve yükümlülüklerin düzenlenmesi,
işbu Sözleşme’nin konusunu oluşturmaktadır.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">3.&nbsp;&nbsp;&nbsp;&nbsp;SİPARİŞ KONUSU ÜRÜN BİLGİLERİ<o:p></o:p></span></b></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Ürünlerin Cinsi, Abonelik Türü, Miktarı, ve Satış Bedeli aşağıda
belirtilmiştir.<o:p></o:p></span></p><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0">
 <tbody><tr>
  <td width="166" valign="top" style="width:124.5pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">ÜRÜN<o:p></o:p></span></p>
  </td>
  <td width="145" valign="top" style="width:108.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">ABONELİK TÜRÜ<o:p></o:p></span></p>
  </td>
  <td width="151" valign="top" style="width:113.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">MİKTAR<o:p></o:p></span></p>
  </td>
  <td width="131" valign="top" style="width:98.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">TUTAR (TL)<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>

  <td width="145" valign="top" style="width:108.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p> Aylık </span></p>
  </td>
  <td width="151" valign="top" style="width:113.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p> 1 </span></p>
  </td>
  <td width="131" valign="top" style="width:98.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p> {{ $order->order_price }} </span></p>
  </td>
 </tr>
 <tr>
  <td width="166" valign="top" style="width:124.5pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="145" valign="top" style="width:108.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="151" valign="top" style="width:113.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="131" valign="top" style="width:98.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="166" valign="top" style="width:124.5pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="145" valign="top" style="width:108.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="151" valign="top" style="width:113.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
  <td width="131" valign="top" style="width:98.25pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
  auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:
  &quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">PACKERS, teknik nedenlerden kaynaklanan, ürünlerin nitelikleri ve bedellerindeki
hatalar ile güncellemeden oluşabilecek hatalarından sorumlu değildir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">4.&nbsp;&nbsp;&nbsp;&nbsp;SİPARİŞ VE TESLİM DETAYLARI</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">İşbu Sözleşme konusu siparişe ilişkin detaylar aşağıdaki şekildedir:<o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:7.5pt;line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">ALICI'nın bildirdiği
teslim yeri dahil Teslimat Bilgileri aşağıda belirtildiği gibidir. Teslimatı
yapacak kargo firmasının ALICI'nın bulunduğu yerde şubesi olmadığı takdirde
ALICI'nın SATICI tarafından bildirilecek bir diğer yakın şubesinden teslim
alması gerekmektedir (Bu hususta ALICI'ya gerekli bilgilendirme, e-posta/mail,
SMS veya telefonla yapılacaktır).<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p>&nbsp;</o:p></span></p><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0">
 <tbody><tr>
  <td width="108" valign="top" style="width:81.0pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">SİPARİŞ
  TARİHİ/SAATİ  </span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="485" valign="top" style="width:363.75pt;padding:0cm 0cm 0cm 0cm">{{ $order->created_at }}</td>
 </tr>
 <tr>
  <td width="108" valign="top" style="width:81.0pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">TESLİMAT
  TARİHİ/SAATİ</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="485" valign="top" style="width:363.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">İlk
  teslim: <b><span style="color:red">Sipariş
  Tarihi + 7-10 gün arası</span></b><o:p></o:p></span></p>
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">Düzenli
  teslimat: İlk sipariş sonrası 27-30 gün içinde. Ödeme başarılı olarak
  gerçekleşmesi sonrasında kutu hazırlanacaktır.<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="108" valign="top" style="width:81.0pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">TESLİMAT
  YERİ</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="485" valign="top" style="width:363.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0">
   <tbody><tr>
    <td width="157" valign="top" style="width:117.75pt;padding:0cm 0cm 0cm 0cm">
    <p class="MsoNormal" align="center" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
    auto;text-align:center;line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
    mso-fareast-language:EN-GB">{{ $order->customers_street_address }} <o:p></o:p></span></p>
    </td>

   </tr>


  </tbody></table>
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
</tbody></table><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.&nbsp;&nbsp;&nbsp;&nbsp;TESLİM KOŞULLARI</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.1.</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"> Ürünlerin teslimatı için Sözleşme konusu siparişin elektronik ortamda
PACKERS'a ulaşmış olması ve SİPARİŞ VEREN/ALICI tarafından ürün bedelinin
PACKERS’ın hesabına aktarılmış olması gerekir. Ürünlerin bedeli PACKERS’ın
hesabına aktarılmamış ve/veya banka kayıtlarında iptal edilmiş ise PACKERS’ın
ürünleri teslim etme yükümlülüğü yoktur.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.2. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Teslimat, kargo şirketi aracılığıyla ALICI'ya, ALICI tarafından
belirtilen SİPARİŞ VEREN’in adresinde yapılacaktır.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.3. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Teslimat adresinin işyeri veya konut olması gerekir. PACKERS, işyeri
veya konut olmayan herhangi bir adrese teslimat yapmaz.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.4.</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"> Ürünler, sağlam, eksiksiz ve siparişte belirtilen niteliklere uygun
teslim edilecektir. SİPARİŞ VEREN/ALICI, kendisine teslim edilen ürünleri
kontrol etmeli, teslimat eksiksiz gerçekleştirildi ise kendisine ibraz edilen
faturayı imzalamalıdır. Bu, siparişlerin PACKERS tarafından eksiksiz teslim
edildiği anlamına gelir ve SİPARİŞ VEREN/ALICI’nın başkaca itiraz hakkı yoktur.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.5. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">PACKERS, nakliyeyi ve teslimatı engelleyen mücbir sebepler, hava
muhalefeti, ulaşımın kesilmesi, trafiğin olağanüstü biçimde sıkışması gibi
durumlar nedeni ile ürünleri süresi içinde teslim edemez ise, durumu SİPARİŞ VEREN/ALICI'ya
bildirir. SİPARİŞ VEREN/ALICI siparişin iptal edilmesini veya teslimat
süresinin engelleyici durumun ortadan kalkmasına kadar ertelenmesini tercih
edebilir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">5.6. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">SİPARİŞ VEREN/ALICI siparişi iptal etmeyi seçerse veya PACKERS herhangi
bir ürünü herhangi bir sebepten ötürü teslim edemezse, varsa, SİPARİŞ
VEREN/ALICI’nın ödemiş olduğu tutar 10 (on) iş günü&nbsp;içerisinde kendisine
iade edilir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<b>5.7. </b>ALICI, ürünü
teslim aldığında fatura üzerinde fiyatı belirtilmemiş ürünlerin teslim aldığı
kutu içerisinde olduğunu kontrol etmekle yükümlüdür. ALICI kutuyu teslim alması
ile fatura üzerinde fiyatı belirtilmemiş ürünlerin kutu içerisinde olduğunu
kabul, beyan ve taahhüt eder.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">6.&nbsp;&nbsp;&nbsp;&nbsp;SİPARİŞ BEDELİ VE ÖDEME KOŞULLARI</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">6.1.</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;İşbu Sözleşme konusu siparişe ilişkin tutar, sair hizmet bedeli ve
varsa hediye / indirim / promosyonlar sonucunda ödenmesi gereken nihai sipariş
tutarı aşağıdaki gibidir:<o:p></o:p></span></p><table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="602" style="width:451.5pt;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:
 0cm 0cm 0cm 0cm">
 <tbody><tr>
  <td width="125" valign="top" style="width:93.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">ÖDEME
  ŞEKLİ</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="477" valign="top" style="width:357.75pt;padding:0cm 0cm 0cm 0cm">
  <table class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="478" style="width:358.5pt;mso-cellspacing:0cm;mso-yfti-tbllook:1184;mso-padding-alt:
   0cm 0cm 0cm 0cm">
   <tbody><tr>
    
    <td width="245" valign="top" style="width:183.75pt;padding:0cm 0cm 0cm 0cm">
    <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
    auto;line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
    mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Kredi kartı<o:p></o:p></span></p>
    </td>
   </tr>
  </tbody></table>
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="125" valign="top" style="width:93.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">SİPARİŞ
  TUTARI</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="477" valign="top" style="width:357.75pt;padding:0cm 0cm 0cm 0cm">{{ $order->total_amount }}</td>
 </tr>
 <tr>
  <td width="125" valign="top" style="width:93.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">HİZMET
  BEDELİ</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="477" valign="top" style="width:357.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">0 TL
  (KDV dahil) (SİPARİŞ VEREN / ALICI tarafından ödenecektir.)*<o:p></o:p></span></p>
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><i><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">*PACKERS,
  SİPARİŞ VEREN/ALICI’nın siparişi iptal ve/veya iade talep etmesi durumunda,
  SİPARİŞ VEREN/ALICI’nın oluşturduğu toplam sipariş tutarı üzerinden bu bedeli
  talep edebilir.</span></i><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="125" valign="top" style="width:93.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">HEDİYE
  ÇEKİ / İNDİRİM</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="477" valign="top" style="width:357.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr>
  <td width="125" valign="top" style="width:93.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">İNDİRİMLER
  DÜŞÜLDÜKTEN SONRAKİ TOPLAM SİPARİŞ TUTARI</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;;
  mso-fareast-language:EN-GB"><o:p></o:p></span></p>
  </td>
  <td width="477" valign="top" style="width:357.75pt;padding:0cm 0cm 0cm 0cm">
  <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
  line-height:normal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
  mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">&nbsp;<o:p></o:p></span></p>
  {{ $order->order_price }}
  </td>
 </tr>
</tbody></table><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">6.2.</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;İşbu Sözleşme konusu sipariş konusu fatura sipariş konusu ürünle
birlikte teslimat adresinde teslim edilecek olup, faturaya ilişkin detaylar
aşağıda yer almaktadır.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Ürünün tesliminden sonra ALICI'ya ait kredi kartının ALICI'nın
kusurundan kaynaklanmayan bir şekilde yetkisiz kişilerce haksız veya hukuka
aykırı olarak kullanılması nedeni ile ilgili banka veya finans kuruluşun ürün
bedelini SATICI'ya ödememesi halinde, ALICI'nın kendisine teslim edilmiş olması
kaydıyla ürünün 3 gün içinde SATICI'ya gönderilmesi zorunludur. Bu takdirde
nakliye giderleri ALICI'ya aittir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Kredi kartı ile satın alınan, PACKERS stil danışmanlığı servisinin, aylık
periyodlarla olmak üzere periyodik ödemeye ve yenilemeye tabi olduğunu;
ALICI'nın satın alma sırasında belirtmiş olduğu sıklıkta, ALICI'nın satın alma
sırasında kullanmış olduğu kredi kartından paket gönderim ücretinin periyodik
olarak PAYU ödeme sistemleri aracılığıyla tahsil edeceğini; ALICI ara vermediği
sürece PACKERS tarafından ürün gönderiminin kredi kartından periyodik olarak
yapılan tahsilat başarılı olduğu sürece devam edeceğini; ALICI dilerse
gönderimine o periyoda ait ücret çekilmeden önce&nbsp; </span><span lang="EN-GB"><a href="http://www.packsion.com/"><span style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-fareast-font-family:&quot;Times New Roman&quot;;mso-fareast-language:EN-GB">www.packsion.com</span></a></span><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"> üzerinden aktif
olarak üyeliğini yöneterek iptal edebileceğini ya da gönderim sıklığı / yerini
değiştirebileceğini bildiğini kabul ve beyan eder.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">ALICI'nın ürün gönderimine ara vermesi veya
gönderimi sonlandırması durumunda, satın alma sırasında kullanmış olduğu kredi
kartından periyodik tahsilat yapılmaz. ALICI'nın ürün gönderimine ara vermesi
veya gönderimi sonlandırmasına karşın,sistemsel hata sonucu yapılan tahsilat
tutarı ise 10 gün içerisinde ALICI’nın hesabına iade edilir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
text-align:justify;line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">PACKERS sunduğu ürün fiyatlarında önceden haber
vermeksizin değişiklik yapma hakkını saklı tutar.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><u><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Fatura Bilgileri;</span></u></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">- İsim/Ünvan: {{ Auth::guard('customer')->user()->firstname . ' ' . Auth::guard('customer')->user()->lastname }} <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">- Adres: {{ $order->customers_street_address }} <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;Email:  {{ Auth::guard('customer')->user()->email }} &nbsp; <o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;TC Kimlik No:<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><u><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Faturaya İlişkin Bilinmesi Gerekenler;</span></u></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">- SİPARİŞ VEREN, ALICI ve fatura bilgileri aynı ve/veya farklı kişilere
ait olabilir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;Farklı kişilere ait olması durumunda, SİPARİŞ VEREN verdiği ve
onayladığı tüm bilgilerden tek başına sorumludur.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;SİPARİŞ VEREN ve ALICI’nın birlikte sorumlu olduğu yükümlülükler
burada SİPARİŞ VEREN/ALICI olarak belirtilmiştir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;SİPARİŞ VEREN verdiği ve onayladığı bilgilerin doğru olduğunu
kabul eder.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;Verilen bilgiler ile ALICI’ya ulaşılamaması durumunda sorumluluk
SİPARİŞ VEREN’e aittir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">-&nbsp;Bu Sözleşme'de PACKERS tarafından verilen bilgiler, uzaktan
iletişim araçlarına uygun olarak, iyi niyet ilkeleri çerçevesinde, ergin
olmayanlar ile ayırım gücünden yoksun veya kısıtlı erginleri koruyacak şekilde
ve ticari amaçlarla verilmektedir<o:p></o:p></span></p><p class="MsoListParagraph" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:
auto;margin-left:21.0pt;mso-add-space:auto;text-indent:-18.0pt;line-height:
normal;mso-list:l0 level1 lfo1"><!--[if !supportLists]--><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">7.<span style="font-variant-numeric: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></b><!--[endif]--><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">PERAKENDE SATIŞ VE SON KULLANICI</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">PACKERS tarafından sunulan hizmet perakende satışa ve son kullanıcıya
yöneliktir; toptan ve yeniden satış amaçlı siparişlerin ön bilgilendirme formu
ve/veya satış sözleşmesi oluşmuş olsa dahi, PACKERS’ın toptan ve yeniden satış
amacı bulunduğundan şüphe etmesi halinde siparişi iptal etme ve ürünleri teslim
etmeme hakkı saklıdır. SİPARİŞ VEREN/ALICI, bu hususu peşinen kabul eder.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">8. CAYMA HAKKI, KULLANILMASI VE İSTİSNALARI<o:p></o:p></span></b></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">8.1. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">ALICI Ürün'ü teslim aldığı tarihten itibaren ondört (14) gün içinde
herhangi bir gerekçe göstermeksizin ve cezai şart ödemeksizin bu Sözleşme'den
cayma hakkına sahiptir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><br>
Ancak kanunen şu mal/hizmetlere ilişkin sözleşmelerde, kullanılmamış/istifade
edilmemiş olsa dahi, cayma hakkı bulunmamaktadır : a) ALICI'nın özel istekleri
veya onun kişisel ihtiyaçları doğrultusunda hazırlanan mallar (üzerinde
değişiklik ya da ilaveler yapılarak kişiye/kişisel ihtiyaçlara özel hale
getirilenler, ALICI siparişine istinaden yurt içinden veya dışından ithal/temin
edilen özel Ürünler dahil) b) kozmetik vb.leri ile çikolata vb. gıda maddeleri
gibi çabuk bozulabilen veya son kullanma tarihi geçebilecek mallar c) yine
kozmetik, mayo, iç giyim mamülleri vb. teslimden sonra ambalaj, bant, mühür,
paket gibi koruyucu unsurları açılmış ve iadesi sağlık-hijyen açısından uygun
olmayan mallar d) teslimden sonra başka ürünlerle karışan ve doğası gereği
ayrıştırılması mümkün olmayan mallar e) ALICI onayı ile cayma hakkı süresi
içinde ifasına başlanan hizmetler ve f) genel olarak ilgili mevzuat uyarınca
mesafeli satış kapsamı dışında kabul edilen diğer mal-hizmetler ile ALICI'nın
ticari/mesleki amaçla satın alma yaptığı haller.<br>
<!--[if !supportLineBreakNewLine]--><br>
<!--[endif]--><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">8.2. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Cayma hakkı kullanımı mümkün olan hallerde, ALICI, cayma süresi içinde
malı, işleyişine, teknik özelliklerine ve kullanım talimatlarına uygun bir şekilde
kullanmadığı takdirde meydana gelen değişiklik ve bozulmalardan kanun gereği
sorumludur. Buna göre, cayma tarihine kadarki süreçte Ürün'ün kullanım
talimatlarına, teknik özelliklerine ve işleyişine uygun bir şekilde
kullanılmamasından ötürü değişiklik veya bozulma olursa ALICI cayma hakkını
kaybedebilir; SATICI tarafından kabul edildiği hallerde, iade edilecek Ürün
bedelinden değişiklik / bozulma kadar indirim yapılır.<br>
<!--[if !supportLineBreakNewLine]--><br>
<!--[endif]--><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">8.3. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Cayma hakkı bulunan hallerde ALICI'nın cayma hakkını kullandığına dair
açık bir bildirimi yasal 14 günlük süre içinde SATICI'ya yöneltmiş (yukarıda
belirtilen iletişim adreslerine sözlü/yazılı iletmiş) olması yeterlidir. Söz
konusu hakkın süresi içerisinde kullanılması durumunda, Ürün'ün azami on (10)
gün içerisinde, giderleri ALICI'ya ait olmak üzere SATICI'nın yukarıdaki
adresine gönderilmesi zorunludur. INTERNET SİTESİ'nde ürün iadeleri için
anlaşmalı kargo firması belirtilmiş ise, ALICI Ürün'ü bulunduğu İlçe
dahilindeki veya haricindeki bir şubesinden gönderebilir, bu takdirde ALICI'dan
masraf alınmaz.&nbsp;<br>
<!--[if !supportLineBreakNewLine]--><br>
<!--[endif]--><o:p></o:p></span></p><p class="MsoNormal" style="margin-bottom:7.5pt;line-height:normal"><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Bu iade işleminde
Ürün'ün kutusu, ambalajı, varsa standart aksesuarları ile birlikte eksiksiz ve
hasarsız olarak teslim edilmesi gerekmektedir. Ayrıca vergi mevzuatı gereği,
ALICI tarafından kanunen İade Faturası kesilmesi gereken hallerin yanı sıra
Ürünle beraber iade edilecek olan fatura üzerinde, aşağıda belirtilen, iade ile
ilgili bölüm doldurulup imzalanacaktır. Faturası kurumlar (tüzel kişiler) adına
düzenlenen sipariş iadeleri, İade Faturası kesilmediği takdirde kabul edilmeyecektir).<br>
<br>
"Ürünün iade edileceği adres, SATICI adresi / iade için teslim olunan
kargo firması adresi."&nbsp;<br>
<br>
Yukarıdaki belirtilen gereklerin ALICI tarafından yerine getirilmesi kaydı ile,
cayma bildiriminin SATICI'ya ulaştığı tarihten itibaren 14 gün içinde, Ürün
bedeli ve varsa Ürün'ün ALICI'ya teslim masrafları ALICI'ya, Ürün'ü satın
alırken kullandığı ödeme aracına uygun bir şekilde iade edilir.&nbsp;<br>
<br>
ALICI'nın Ürünler'e ilişkin cayma süresi sonrasındaki kanuni
hakları-sorumlulukları ile SATICI'nın ALICI'dan olan, ödül puanlarına, hediye
çeklerine ve bedelsiz imkanlara ilişkin bulunları da kapsamak üzere akdi ve
kanuni tahsil-mahsup hakları dahil hak ve yükümlülükleri ayrıca mevcut ve
geçerlidir.<o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">8.4. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Ödül puanları vb.lerini kazandıran bir kuruluş ile ALICI ve SATICI
arasında, ödül puanlarının SATICI'ya ait İNTERNET SİTESİ'nden alışverişlerde
indirim vb. sağlamasına imkan veren cari bir anlaşmanın-sözleşmenin varlığında,
ALICI, SATICI'nın söz konusu anlaşması ve keza kendisinin anılan kuruluş ile
sözleşmesinin gereği olarak bu Sözleşme konusu alışverişi sebebi ile öyle bir
ödül puanı kazanmış ise, işbu Sözleşme'den cayılması ve sair suretle
feshi/sipariş iptali ile ALICI'ya bir geri ödeme yapılması mevzubahis olan
hallerde, ALICI tarafından bu Sözleşme konusu satın alma ile kazanılmış ödül
puanları, hediyeler ve benzerlerinin tutarı (parasal değeri) ALICI'dan geri
alınır.&nbsp;<br>
<br>
Şöyleki; bu geri alma işlemi, SATICI'nın ilgili kuruluş ile anlaşmasında farklı
bir yöntem öngörülmedikçe, ALICI'nın anılan kuruluş-sistem nezdinde (işbu
Sözleşme konusu alışveriş ile kazanılmış ödül puanları hariç) yeterli-başka
ödül puanı mevcut ise öncelikle o ödül puanlarından, mevcut değil ise
SATICI'nın ALICI'ya iade edeceği bedelden nakden indirilerek (mahsup edilerek)
yapılır.<br>
<!--[if !supportLineBreakNewLine]--><br>
<!--[endif]--><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">&nbsp;</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">9.&nbsp;UYUŞMAZLIKLARIN ÇÖZÜLMESİ</span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;"><o:p></o:p></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">9.1. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Tüketici şikâyet ve itirazları konusundaki başvurular, Bakanlıkça her
yıl Aralık ayında belirlenen parasal sınırlar dahilinde tüketicinin mal veya
hizmeti satın aldığı veya ikametgâhının bulunduğu yerdeki tüketici sorunları hakem
heyetine veya tüketici mahkemesine yapılabilmektedir.<b><o:p></o:p></b></span></p><p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;
line-height:normal"><b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">9.2. </span></b><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">Bu Sözleşme'den doğabilecek uyuşmazlıkların iyi niyet çerçevesinde
çözülememesi halinde İstanbul Çağlayan Mahkemeleri ve İcra Daireleri
yetkilidir.<o:p></o:p></span></p><p class="MsoNormal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><o:p>&nbsp;</o:p></span></b></p><p class="MsoNormal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">10. BİLDİRİMLER ve DELİL
SÖZLEŞMESİ<o:p></o:p></span></b></p><p class="MsoNormal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">İşbu
Sözleşme tahtında Taraflar arasında yapılacak her türlü yazışma, mevzuatta
sayılan zorunlu haller dışında, e-mail aracılığıyla yapılacaktır. Alıcı, işbu
Sözleşme'den doğabilecek ihtilaflarda </span><span lang="EN-GB" style="font-family: &quot;Times New Roman&quot;, serif;">"PACKERS")</span><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">'in resmi defter ve ticari
kayıtlarıyla, kendi veritabanında, sunucularında tuttuğu elektronik bilgilerin
ve bilgisayar kayıtlarının, bağlayıcı, kesin ve münhasır delil teşkil
edeceğini, bu maddenin Hukuk Muhakemeleri Kanunu'nun 193. maddesi anlamında
delil sözleşmesi niteliğinde olduğunu kabul, beyan ve taahhüt eder.<o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><o:p>&nbsp;</o:p></span></p><p class="MsoNormal"><b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">11. &nbsp;YÜRÜRLÜK</span></b><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><o:p></o:p></span></p><p class="MsoNormal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;"><o:p>&nbsp;</o:p></span></p><p>

</p><p class="MsoNormal"><span lang="EN-GB" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">11
(on bir) maddeden ibaret bu Sözleşme, Taraflarca okunarak, 03/08/2017
tarihinde, Alıcı tarafından elektronik ortamda onaylanmak suretiyle akdedilmiş
ve yürürlüğe girmiştir.<o:p></o:p></span></p>