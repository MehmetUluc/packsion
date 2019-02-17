<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use SoapClient;
use SOAPHeader;

class MNGController extends Controller
{
	private $url = 'http://service.mngkargo.com.tr/musterikargosiparis/musterikargosiparis.asmx?op=SiparisGirisiDetayliV3&wsdl';
  private $client;
  private $conf;
  function __construct(){
    

    $conf = [];
    $conf['username'] = '35615719';
    $conf['password'] = '356TST2425XGHPRFTG';

    if(!isset($conf['username']) || !isset($conf['password'])) {
      throw new \Exception("Mng Kargo Ayarları Girilmedi");
    }

    $this->conf = $conf;
    $this->client = new SoapClient($this->url, array ('trace' => 0));
  }
  function index(){

  	$params = [
  		"pChIrsaliyeNo" => "",
  		"pPrKiymet" => "",
  		"pGonderiHizmetSekli" => "NORMAL",
  		"pTeslimSekli" => "1",
  		"pChBarkod" => "",
  		"pPrKiymet" => "",
  		"pChIcerik" => "Paket",
  		"pFlAlSms" => 3,
  		"pFlGnSms" => 0,
  		"pKargoParcaList" => "1:1:1:Ürün1:1:;",
  		"pAliciMusteriMngNo" => "",
  		"pAliciMusteriBayiNo" => "",
  		"pAliciMusteriAdi" => "MEHMET ULUÇ",
  		"pChSiparisNo" => "m45578457",
  		"pLuOdemeSekli" => "P",
  		"pFlAdresFarkli" => "0",
  		"pChIl" => "İSTANBUL",
  		"pChIlce" => "ŞİŞLİ",
  		"pChAdres" => "A adresine gönderiver",
  		"pChSemt" => "",
  		"pChMahalle" => "",
  		"pChMeydanBulvar" => "",
  		"pChCadde" => "",
  		"pChSokak" => "",
  		"pChTelEv" => "",
  		"pChTelCep" => "5432135228",
  		"pChTelIs" => "",
  		"pChFax" => "",
  		"pChEmail" => "",
  		"pChVergiDairesi" => "",
  		"pChVergiNumarasi" => "",
  		"pFlKapidaOdeme" => 0,
  		"pKullaniciAdi" => "35615719",
  		"pSifre" => "356TST2425XGHPRFTG",
  		"pMalBedeliOdemeSekli" => "-KREDI_KARTI",
  		"pPlatformKisaAdi" => "",
  		"pPlatformSatisKodu" => ""
  	];

  	//ksort($params);

  	$ch = curl_init();
      //print_r($arParams); exit;
  	$url = "http://service.mngkargo.com.tr/musterikargosiparis/musterikargosiparis.asmx/SiparisGirisiDetayliV3";

      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
      curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

      curl_setopt($ch, CURLOPT_TIMEOUT, 60);
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    //  echo http_build_query($arParams); exit;
      $response = curl_exec($ch);

      return $response;
    
  }
    



  public function ups()
  {

    $xml = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <Login_Type1 xmlns="http://ws.ups.com.tr/wsCreateShipment">
      <CustomerNumber>61Y0V2</CustomerNumber>
      <UserName>cE9RNyCGjHSjMyMhZUHD</UserName>
      <Password>mNUaNLRKBWPhDEZpaYss</Password>
    </Login_Type1>
  </soap:Body>
</soap:Envelope>';

$url = 'http://ws.ups.com.tr/wsCreateShipment/wsCreateShipment.asmx?WSDL';

$headers = array(
                        "Content-type: text/xml;charset=\"utf-8\"",
                        "Accept: text/xml",
                        "Cache-Control: no-cache",
                        "Pragma: no-cache",

                        "Content-length: ".strlen($xml),
                    ); //SOAPAction: your op URL

$ch = curl_init();
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $xml); // the SOAP request
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

             $response = curl_exec($ch); 
$response1 = str_replace("<soap:Body>","",$response);
            $response2 = str_replace("</soap:Body>","",$response1);
$parser = simplexml_load_string($response2);

$session = $parser->Login_Type1Response->Login_Type1Result->SessionID;
   // print_r($parser);


$time = date("c", time());

    $xml = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <OnDemandPickupRequest_Type1 xmlns="http://ws.ups.com.tr/wsCreateShipment">
      <SessionID>'. $session .'</SessionID>
      <OnDemandPickupRequestInfo>
        <LabelSource>1</LabelSource>
        <PickupRequestDay>'. $time.'</PickupRequestDay>
        <RequestedBoxList>
          <BoxType>
            <BoxTypeCode>1</BoxTypeCode>
            <BoxCount>1</BoxCount>
          </BoxType>
          
        </RequestedBoxList>
        <ShipmentInfo>
          <ShipperAccountNumber></ShipperAccountNumber>
          <ShipperName>Mehmet Uluç</ShipperName>
          <ShipperContactName></ShipperContactName>
          <ShipperAddress>Teiaş Mahallesi 12 Şubat Kahramanmaraş</ShipperAddress>
          <ShipperCityCode>46</ShipperCityCode>
          <ShipperAreaCode>46</ShipperAreaCode>
          <ShipperPostalCode></ShipperPostalCode>
          <ShipperPhoneNumber>05432135228</ShipperPhoneNumber>
          <ShipperPhoneExtension></ShipperPhoneExtension>
          <ShipperMobilePhoneNumber></ShipperMobilePhoneNumber>
          <ShipperEMail>muluculuc@gmail.com</ShipperEMail>
          <ShipperExpenseCode></ShipperExpenseCode>
          <ConsigneeAccountNumber>61Y0V2</ConsigneeAccountNumber>
          <ConsigneeName>Packsion Com</ConsigneeName>
          <ConsigneeContactName>Packsion Com</ConsigneeContactName>
          <ConsigneeAddress>beşiktaş mahallesi Beşiktaş İstanbul</ConsigneeAddress>
          <ConsigneeCityCode>34</ConsigneeCityCode>
          <ConsigneeAreaCode>34</ConsigneeAreaCode>
          <ConsigneePostalCode></ConsigneePostalCode>
          <ConsigneePhoneNumber></ConsigneePhoneNumber>
          <ConsigneePhoneExtension></ConsigneePhoneExtension>
          <ConsigneeMobilePhoneNumber></ConsigneeMobilePhoneNumber>
          <ConsigneeEMail></ConsigneeEMail>
          <ConsigneeExpenseCode></ConsigneeExpenseCode>
          <ServiceLevel>5</ServiceLevel>
          <PaymentType>1</PaymentType>
          <PackageType>K</PackageType>
          <NumberOfPackages>1</NumberOfPackages>
          <CustomerReferance></CustomerReferance>
          <CustomerInvoiceNumber></CustomerInvoiceNumber>
          <DeliveryNotificationEmail></DeliveryNotificationEmail>
          <IdControlFlag>0</IdControlFlag>
          <PhonePrealertFlag>0</PhonePrealertFlag>
          <SmsToShipper>0</SmsToShipper>
          <SmsToConsignee>0</SmsToConsignee>
          <InsuranceValue>0</InsuranceValue>
          <InsuranceValueCurrency></InsuranceValueCurrency>
          <ValueOfGoods>0</ValueOfGoods>
          <ValueOfGoodsCurrency></ValueOfGoodsCurrency>
          <ValueOfGoodsPaymentType>0</ValueOfGoodsPaymentType>
          <DeliveryByTally>0</DeliveryByTally>
          <ThirdPartyAccountNumber></ThirdPartyAccountNumber>
          <ThirdPartyExpenseCode></ThirdPartyExpenseCode>
          <PackageDimensions>
            <DimensionInfo xsi:nil="true" />
            <DimensionInfo xsi:nil="true" />
          </PackageDimensions>
        </ShipmentInfo>
      </OnDemandPickupRequestInfo>
    </OnDemandPickupRequest_Type1>
  </soap:Body>
</soap:Envelope>';


  $url = 'http://ws.ups.com.tr/wsCreateShipment/wsCreateShipment.asmx?WSDL';

  $headers = array(
                          "Content-type: text/xml;charset=\"utf-8\"",
                          "Accept: text/xml",
                          "Cache-Control: no-cache",
                          "Pragma: no-cache",

                          "Content-length: ".strlen($xml),
                      ); //SOAPAction: your op URL

  $ch = curl_init();
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

              curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
              curl_setopt($ch, CURLOPT_TIMEOUT, 10);
              curl_setopt($ch, CURLOPT_POST, true);
              curl_setopt($ch, CURLOPT_POSTFIELDS, $xml); // the SOAP request
              curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

               $response = curl_exec($ch); 
  $response1 = str_replace("<soap:Body>","",$response);
              $response2 = str_replace("</soap:Body>","",$response1);
  $parser = simplexml_load_string($response2);

 echo $response;



  }

}
