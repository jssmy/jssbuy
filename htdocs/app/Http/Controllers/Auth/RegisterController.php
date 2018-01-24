<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Slug as Slug;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;

use App\Mail\send;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
 
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //dd($data);
        
        return Validator::make($data, [
            //'slug'      => 'required|string|max:255', 
            'name'      => 'required|string|max:255',
            'lastname'  => 'required|string|max:255',
            'birthday'  =>  'required|before:today',
            'genere'    =>  'required|in:F,M',
            'email'     => 'required|string|email|max:255|unique:users',
            'password'  => 'required|string|min:6|confirmed',
        ]);
    }

    protected function validator_url(array $data)
    {


        return Validator::make($data, [
            'slug'      => 'required|string|max:255|unique:users', 
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        
       // $this->validator_url($data)->validate();

       //dd($data);
        //dd($data);
        $slug = new Slug();
        $url  = $slug->make($data['name'].' '.$data['lastname']);
        $data['slug'] = $url;
        $confirmation_code = $data['_token'];
        User::create([
            'slug'      => $data['slug'],
            'name'      => $data['name'],
            'lastname'  => $data['lastname'],
            'birthday'  => $data['birthday'],
            'genere'    => $data['genere'],
            'email'     => $data['email'],
            'confirmation'=>$data['_token'],
            'password'  => bcrypt($data['password']),
        ]);

        \Mail::to($data['email'])->send(new send($data['name'],$data['_token']));


       /*\Mail::send('auth.passwords.confirmation', array(
            'name'         =>Input::get('name'),
            'confirmation_code' =>$data['_token']


            ), function($message){
         
                $message->from('dontreplay@gmail.com','JssMy');
                $message->to(Input::get('email'), Input::get('name').' '.Input::get('lastname'));
                $message->subject('Gracias por registrarse');
    });
*/
   

    }


    public function verify($confirmation_code){


dd($confirmation_code);

        //return view();
    }





}
