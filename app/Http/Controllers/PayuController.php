<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;
use App\Product;
use App\AddressBook;

class PayuController extends Controller
{
    public function initPayment(Request $request)
    {
    	$url = "https://secure.payu.com.tr/order/alu/v3";

    	$product = Product::where('products_id', session()->get('product_id'))->with('desc')->first();
    	$order = Order::where('orders_id', session()->get('order_id'))->first();

    	//$customer = Customer::find($order->customers_id);

    	$address = AddressBook::where('address_book_id', session()->get('checkout_address_id'));

		$secretKey = '@0WH|BJC07]A8@h9+le(';
		$arParams = array(
		    //The Merchant's ID
		    "MERCHANT" => "EDSFTRHY",
		    //order external reference number in Merchant's system
		    "ORDER_REF" => rand(1000,9999),
		    "ORDER_DATE" => gmdate('Y-m-d H:i:s'),

		    //First product details begin
		    "ORDER_PNAME[0]" => $product['desc']['products_name'],
		    "ORDER_PCODE[0]" => $product['desc']['products_id'],
		    "ORDER_PINFO[0]" => $product['desc']['products_description'],
		    "ORDER_PRICE[0]" => $product['products_price'],
		    "ORDER_QTY[0]" => "1",
		    //First product details end


		    "PRICES_CURRENCY" => "TRY",
		    "PAY_METHOD" => "CCVISAMC",
		    "SELECTED_INSTALLMENTS_NUMBER" => "0",
		    "CC_NUMBER" => $request->cc_number,
		    "EXP_MONTH" => $request->month,
		    "EXP_YEAR" => $request->year,
		    "CC_CVV" => $request->cvv,
		    "CC_OWNER" => $request->owner,

		    //Return URL on the Merchant webshop side that will be used in case of 3DS enrolled cards authorizations.
		    "BACK_REF" => "http://45.76.43.8/3d-return",
		    "CLIENT_IP" => $request->ip(),
		    "BILL_LNAME" => $address->entry_laststname,
		    "BILL_FNAME" => $address->entry_firstname,
		    "BILL_EMAIL" => $order->customers_email_address,
		    "BILL_PHONE" => $address->entry_phone,
		    "BILL_COUNTRYCODE" => "TR",
	      "BILL_ZIPCODE" => "", //optional
			  "BILL_ADDRESS" => "", //optional
		  	"BILL_ADDRESS2"=> " ", //optional
		    "BILL_CITY" => "", //optional
		    "BILL_STATE" => "", //optional
			  "BILL_FAX" => "", //optional

		    "DELIVERY_LNAME" => "", //optional
		    "DELIVERY_FNAME" => "", //optional
    		"DELIVERY_EMAIL" => "", //optional
    		"DELIVERY_PHONE" => "", //optional
    		"DELIVERY_COMPANY" => "", //optional
    		"DELIVERY_ADDRESS" => "", //optional
    		"DELIVERY_ADDRESS2" => "", //optional
    		"DELIVERY_ZIPCODE" => "", //optional
		    "DELIVERY_CITY" => "", //optional
		    "DELIVERY_STATE" => "", //optional
		    "DELIVERY_COUNTRYCODE" => "", //optional

		);

		//begin HASH calculation
		ksort($arParams);

		$hashString = "";

		foreach ($arParams as $key=>$val) {
		    $hashString .= strlen($val) . $val;
		}

		$arParams["ORDER_HASH"] = hash_hmac("md5", $hashString, $secretKey);
		//end HASH calculation

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arParams));
		$response = curl_exec($ch);

		$curlerrcode = curl_errno($ch);
		$curlerr = curl_error($ch);

		if (empty($curlerr) && empty($curlerrcode)) {
		    $parsedXML = @simplexml_load_string($response);
		    if ($parsedXML !== FALSE) {

		        //Get PayU Transaction reference.
		        //Can be stored in your system DB, linked with your current order, for match order in case of 3DSecure enrolled cards
		        //Can be empty in case of invalid parameters errors
		        $payuTranReference = $parsedXML->REFNO;

		        if ($parsedXML->STATUS == "SUCCESS") {

		            //In case of 3DS enrolled cards, PayU will return the extra XML tag URL_3DS that contains a unique url for each
		            //transaction. For example https://secure.payu.com.tr/order/alu_return_3ds.php?request_id=2Xrl85eakbSBr3WtcbixYQ%3D%3D.
		            //The merchant must redirect the browser to this url to allow user to authenticate.
		            //After the authentification process ends the user will be redirected to BACK_REF url
		            //with payment result in a HTTP POST request - see 3ds return sample.
		            if (($parsedXML->RETURN_CODE == "3DS_ENROLLED") && (!empty($parsedXML->URL_3DS))) {
		                header("Location:" . $parsedXML->URL_3DS);
		                die();
		            }

		            echo "SUCCES [PayU reference number: " . $payuTranReference . "]";
		        } else {
		            echo "FAILED: " . $parsedXML->RETURN_MESSAGE . " [" . $parsedXML->RETURN_CODE . "]";
		            if (!empty($payuTranReference)) {
		                //the transaction was register to PayU system, but some error occured during the bank authorization.
		                //See $parsedXML->RETURN_MESSAGE and $parsedXML->RETURN_CODE for details
		                echo " [PayU reference number: " . $payuTranReference . "]";
		            }
		        }
		    }
		} else {
		    //Was an error comunication between servers
		    echo "cURL error: " . $curlerr;
		}

    }
}
