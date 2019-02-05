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

$ch = \curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "Content-Type", "text/xml; charset=utf-8"
));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
    $response = curl_exec($ch);

    print_r($response);
      exit;



    $xml = '<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
  <soap:Body>
    <OnDemandPickupRequest_Type1 xmlns="http://ws.ups.com.tr/wsCreateShipment">
      <SessionID>61Y0V2</SessionID>
      <OnDemandPickupRequestInfo>
        <LabelSource>int</LabelSource>
        <PickupRequestDay>dateTime</PickupRequestDay>
        <RequestedBoxList>
          <BoxType>
            <BoxTypeCode>int</BoxTypeCode>
            <BoxCount>int</BoxCount>
          </BoxType>
          <BoxType>
            <BoxTypeCode>int</BoxTypeCode>
            <BoxCount>int</BoxCount>
          </BoxType>
        </RequestedBoxList>
        <ShipmentInfo>
          <ShipperAccountNumber>string</ShipperAccountNumber>
          <ShipperName>string</ShipperName>
          <ShipperContactName>string</ShipperContactName>
          <ShipperAddress>string</ShipperAddress>
          <ShipperCityCode>int</ShipperCityCode>
          <ShipperAreaCode>int</ShipperAreaCode>
          <ShipperPostalCode>string</ShipperPostalCode>
          <ShipperPhoneNumber>string</ShipperPhoneNumber>
          <ShipperPhoneExtension>string</ShipperPhoneExtension>
          <ShipperMobilePhoneNumber>string</ShipperMobilePhoneNumber>
          <ShipperEMail>string</ShipperEMail>
          <ShipperExpenseCode>string</ShipperExpenseCode>
          <ConsigneeAccountNumber>string</ConsigneeAccountNumber>
          <ConsigneeName>string</ConsigneeName>
          <ConsigneeContactName>string</ConsigneeContactName>
          <ConsigneeAddress>string</ConsigneeAddress>
          <ConsigneeCityCode>int</ConsigneeCityCode>
          <ConsigneeAreaCode>int</ConsigneeAreaCode>
          <ConsigneePostalCode>string</ConsigneePostalCode>
          <ConsigneePhoneNumber>string</ConsigneePhoneNumber>
          <ConsigneePhoneExtension>string</ConsigneePhoneExtension>
          <ConsigneeMobilePhoneNumber>string</ConsigneeMobilePhoneNumber>
          <ConsigneeEMail>string</ConsigneeEMail>
          <ConsigneeExpenseCode>string</ConsigneeExpenseCode>
          <ServiceLevel>int</ServiceLevel>
          <PaymentType>int</PaymentType>
          <PackageType>string</PackageType>
          <NumberOfPackages>int</NumberOfPackages>
          <CustomerReferance>string</CustomerReferance>
          <CustomerInvoiceNumber>string</CustomerInvoiceNumber>
          <DeliveryNotificationEmail>string</DeliveryNotificationEmail>
          <IdControlFlag>int</IdControlFlag>
          <PhonePrealertFlag>int</PhonePrealertFlag>
          <SmsToShipper>int</SmsToShipper>
          <SmsToConsignee>int</SmsToConsignee>
          <InsuranceValue>decimal</InsuranceValue>
          <InsuranceValueCurrency>string</InsuranceValueCurrency>
          <ValueOfGoods>decimal</ValueOfGoods>
          <ValueOfGoodsCurrency>string</ValueOfGoodsCurrency>
          <ValueOfGoodsPaymentType>int</ValueOfGoodsPaymentType>
          <DeliveryByTally>int</DeliveryByTally>
          <ThirdPartyAccountNumber>string</ThirdPartyAccountNumber>
          <ThirdPartyExpenseCode>string</ThirdPartyExpenseCode>
          <PackageDimensions>
            <DimensionInfo xsi:nil="true" />
            <DimensionInfo xsi:nil="true" />
          </PackageDimensions>
        </ShipmentInfo>
      </OnDemandPickupRequestInfo>
    </OnDemandPickupRequest_Type1>
  </soap:Body>
</soap:Envelope>';
  }

}
