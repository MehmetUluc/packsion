<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Customer;
use GuzzleHttp\Client;

class TestController extends Controller
{
    public function index()
    {

    	try {
		     $mailSent = Mail::raw('test', function($message) {
		         $message->from('info@packsion.com', 'Packsion');
		         $message->to('muluculuc@gmail.com', 'name');
		         $message->subject('testing');
		     });

		     print_r($mailSent);
		} catch (\Exception $e) {
		    dd($e->getMessage());
		}

		$fail = Mail::failures();

		if(!empty($fail)) throw new \Exception('Could not send message to '.$fail[0]);
    }

    public function op_product()
    {
    	$product = [

			"MaterialCode"=>"01140202040601", // nvarchar(MAX)
			"LongName"=>"Erkek-PIERRE CARDIN-Alt-Smart Casual-Koyu Kahve-CANTA-ABIYE-L", // nvarchar(MAX)
			"ShortName"=>"CANTA ABIYE", // nvarchar(MAX)
			"MaterialType"=>"Kadın Çanta" // nvarchar(MAX)


    	];

        $url = 'https://owms-packsion-api-staging.azurewebsites.net/api/Materials?api_key=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJPUExPRyIsImlhdCI6MTUzMDY4Nzc0MSwiZXhwIjoxNzUxNjEyNTQxLCJhdWQiOiIzNjBEUiIsInN1YiI6InVzZXJAMzYwRFIiLCJSb2xlIjoiVXNlciJ9.fXhVZVgd4ikPVHLq9OJ_CcULGo9a8OSBPHN9UT75M6M';
 
        
        $ch = \curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($product));
		$response = curl_exec($ch);

        	return $response;



    	
    }

    public function op_customer ()
    {
    	$customer = [
		  "CustomerCode"=> "19557",
		  "Title"=> "Mehmet",
		  "ShortName"=> "Uluç",
		  "Adress"=> "Kayseri Yolu Üzeri 12. km Teiaş Müdürlük Lojmanları A Blok No:1",
		  "PostCode"=> "46100",
		  "Province"=> "46",
		  "TaxAdministration"=> "",
		  "TaxNumber"=> "",
		  "Phone"=> "5432135228",
		  "Fax"=> "",
		  "Email"=> "muluculuc@gmail.com",
		  "PaymentType"=> "Payu"
		];

		$url = 'https://owms-packsion-api-staging.azurewebsites.net/api/Customers?api_key=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJPUExPRyIsImlhdCI6MTUzMDY4Nzc0MSwiZXhwIjoxNzUxNjEyNTQxLCJhdWQiOiIzNjBEUiIsInN1YiI6InVzZXJAMzYwRFIiLCJSb2xlIjoiVXNlciJ9.fXhVZVgd4ikPVHLq9OJ_CcULGo9a8OSBPHN9UT75M6M';
 
        
        $ch = \curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($customer));
		$response = curl_exec($ch);

        	return $response;

    }

    public function op_siparis()
    {
    	$siparis = [
			"DeliveryNumber"=> "158",
			"CustomerCode"=> "19557",
			"OrderDetails"=> [
				[
					"MaterialCode"=> "01140202040601",
					"Quantity"=> "1"
				]
				
			],
			"TotalPrice"=> "250"
		];


		$url = 'https://owms-packsion-api-staging.azurewebsites.net/api/PickRequests?api_key=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJPUExPRyIsImlhdCI6MTUzMDY4Nzc0MSwiZXhwIjoxNzUxNjEyNTQxLCJhdWQiOiIzNjBEUiIsInN1YiI6InVzZXJAMzYwRFIiLCJSb2xlIjoiVXNlciJ9.fXhVZVgd4ikPVHLq9OJ_CcULGo9a8OSBPHN9UT75M6M';
 
        //return json_encode($siparis); exit;
        $ch = \curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($siparis));
		$response = curl_exec($ch);

        	return $response;
    }
}
