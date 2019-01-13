<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Parasut;
use App\Shipment;
use App\Customer;
use App\Product;
use App\ProductsDescription;
use App\ShippingMeta;
use App\Order;

class ParasutController extends Controller
{

	protected $client;

    public function __construct()
    {


    	$this->client = new Parasut\Client([
		    "client_id" => "fd8e688c07996bdc56e9f2e71780a81cd9e59551b35de24c906091604942c9ad",
			"username" => "muluculuc@gmail.com",
			"password" => "Ferh4n1982",
			"grant_type" => "password",
			"redirect_uri" => "urn:ietf:wg:oauth:2.0:oob",
		    'company_id' => "240901"
		]);
    }


    public function create($id){

    	$shipment = Shipment::find($id);

    	$customer = Customer::find($shipment->customer_id);

    	$order = Order::find($shipment->order_id);

    	if(!$customer->parasut_id){
    		$pcustomer = array (
		    'data' =>
		        array (
		            'type' => 'contacts',
		            'attributes' => array (
		                    'email' => $customer->customers_email_address,
		                    'name' => $customer->customers_firstname . ' ' . $customer->customers_lastname, // REQUIRED
		                    
		                    'contact_type' => 'person', // or company
		                    'district' => $order->billing_state,
		                    'city' => $order->billing_city,
		                    'address' => $order->customers_street_address,
		                    'phone' => $order->customers_telephone,
		                    'account_type' => 'customer', // REQUIRED
		                    'tax_number' => '11111111111', // TC no for person
		                    'tax_office' => ''
		            ),
		            
		        ),
		);

			$account = new Parasut\Account($this->client);
			$parasut_customer = $account->create($pcustomer);

			$customer->parasut_id = $parasut_customer['data']['id'];
			$customer->save();
    	}

    	$products = ShippingMeta::where('meta_key', 'product')->where('shipping_id', $id)->get();

    	$count_products = count($products)-1;
    	$data = [];
    	foreach($products as $key => $product){

    		$base_product = Product::find($product->meta_value);
    		if(!$base_product->parasut_id){
    			$productArr = array(
				    'data' => array (
				        'type' => 'products',
				        'attributes' => array (
				            'name' => $this->getProductName($product->meta_value)
				        )
				    )
				);
				$response = $this->client->call(Parasut\Product::class)->create($productArr);

				$base_product->parasut_id = $response['data']['id'];
				$base_product->save();
    		}
    		$data[$key]['type'] = 'sales_invoice_details';
    		$data[$key]['attributes'] = [
    			'quantity' => 1,
    			'unit_price' => number_format($product->shipment_price / 1.08, 2),
    			'vat_rate' => '8',
    			'description' => $this->getProductName($product->meta_value)
    		];



    		$data[$key]['relationships'] = [

    			'product' => [
    				'data' => [
    					'id' => $base_product->parasut_id,
    					'type' => 'products',
    				],
    			],
    		];
    	}
    	if(count($products) > 1) {
    		$data[$count_products]['attributes']['unit_price'] = $data[$count_products]['attributes']['unit_price'] - 0.01; 
    	}
    	
    	//print_r($data); exit;


    	$invoice = array (
		    'data' => array (
		       'type' => 'sales_invoices', // Required
		       'attributes' => array (
		           'item_type' => 'invoice', // Required
		           'description' => 'Packsion',
		           'issue_date' => date('Y-m-d'), // Required
		           'due_date' => date('Y-m-d'),
		           'invoice_series' => '',
		           'invoice_id' => '',
		           'currency' => 'TRL'
		       ),
		       'relationships' => array (
		           'details' => array (
		               'data' =>$data,
		           ),
		           'contact' => array (
		               'data' => array (
		                   'id' => $customer->parasut_id,
		                   'type' => 'contacts'
		               )
		           )
		       ),
		    )
		);

		

		$lokal_invoice = $this->client->call(Parasut\Invoice::class)->create($invoice);

		$shipment->parasut_id = $lokal_invoice['data']['id'];
		$shipment->save();

		$payArr = array(
		    "data" => array(
		        "type" => "payments",
		        "attributes" => array(
		            "description" => "Ödeme Alındı",
		            "account_id" => "372661", // bank account id on Parasut
		            "date" => date('Y-m-d'),
		            "amount" => number_format($shipment->price, 2),
		            "exchange_rate" => 1.0
		        )
		    )
		);
		$invid = $shipment->parasut_id; // Invoice id
		$pay_arr = $this->client->call(Parasut\Invoice::class)->pay($invid, $payArr);




		$invArr = array (
		    "data" => array(
		        "type" => "e_archives",
		        "relationships" => array (
		            "sales_invoice" => array (
		                "data" => array (
		                    "id" => $shipment->parasut_id, // Invoice Id
		                    "type" => "sales_invoices"
		                )
		            )
		        )
		    )
		);
		$archive = $this->client->call(Parasut\Invoice::class)->create_e_archive($invArr);
   		$shipment = Shipment::find($id);
   		$shipment->archive_id = $archive['data']['id'];
   		$shipment->save();

   		return back();
		
		
    }

    private function getProductName($id)
    {
    	return ProductsDescription::where('products_id', $id)->first()->products_name;
    }
}
