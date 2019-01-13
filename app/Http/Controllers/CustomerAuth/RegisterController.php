<?php

namespace App\Http\Controllers\CustomerAuth;

use App\Customer;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Mail;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/checkout/plan';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'customers_firstname' => 'required|max:255',
            'customers_lastname' => 'required|max:255',
            'customers_email_address' => 'required|email|max:255|unique:customers',
            'password' => 'required|min:6',
            'agrement' => 'required',
        ], $this->messages());
    }

    public function messages()
    {
            
        return [
            'customers_email_address.required' => 'Email alanı zorunludur',
            'customers_email_address.unique' => 'Bu email ile daha önce kayıt olunmuş',
            'customers_firstname.required'  => 'Adınız alanı zorunludur',
            'customers_lastname.required'  => 'Soyadınız alanı zorunludur',
            'password.required'  => 'Parola alanı zorunludur',
            'agrement.required'  => 'Üyelik Sözleşmesi ve Kişisel Verilerinin İşlenmesi Ve Aktarılmasına İlişkin Aydınlatma Metni alanı zorunludur',
        ];
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Customer
     */
    protected function create(array $data)
    {
        Mail::send('emails.welcome', ['data' => $data], function ($m) use ($data) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to($data['customers_email_address'], $data['customers_firstname'])->subject('Hoşgeldiniz');
                    $m->bcc('tunckaany@gmail.com');
                });
        setcookie("packsion_cookie", 1, time()+3600*24*365*100);
        return Customer::create([
            'customers_firstname' => $data['customers_firstname'],
            'customers_lastname' => $data['customers_lastname'],
            'customers_email_address' => $data['customers_email_address'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('customer.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('customer');
    }
}
