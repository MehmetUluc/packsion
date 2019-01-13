<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use Auth;

class MembershipController extends Controller
{
    public function cancel($id)
    {
    	$order_status = DB::table('orders_status_history')->insert(
						    ['orders_id' => $id, 'orders_status_id' => 3, 'date_added' => date('Y-m-d h:i:s'), 'customer_notified' => 1, 'comments' => 'İptal edildi']
						);
    	$customer = '';
    	Mail::send('emails.cancel', ['customer' => $customer], function ($m) use ($customer) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to(Auth::guard('customer')->user()->customers_email_address, Auth::guard('customer')->user()->customers_firstname)->subject('Packsion Abonelik İptal');
                    $m->bcc('tunckaany@gmail.com');
                });
    	return back();
    }
}
