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
    





}
