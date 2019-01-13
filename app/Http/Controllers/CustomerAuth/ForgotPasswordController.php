<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use App\Customer;
use DB;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('customer.guest');
    }

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('customer.auth.passwords.email');
    }

    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker('customers');
    }

    public function sendEmail(Request $request)
    {
        $email = $request->customers_email_address;

        $customer = Customer::where('customers_email_address', $email)->first();

        if($customer){
            DB::table('customer_password_resets')->insert([
                ['email' => $email , 'token' => md5($email)],
            ]);
            session()->flash('success', 1);
            $customer->hash = 'https://packsion.com/customer/password/reset/' . md5($email);
                    Mail::send('emails.forget_new', ['customer' => $customer], function ($m) use ($customer) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to($customer->customers_email_address, $customer->customers_firstname)->subject('Şifre Sıfırlama');
                    $m->bcc('tunckaany@gmail.com');
                });

            return back();
        } else {
            session()->flash('error', 1);
            return back();
        }

        
    }
}
