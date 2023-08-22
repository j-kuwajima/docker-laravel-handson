<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $data = session()->all();   
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'name2' => ['required', 'string', 'max:255'],
            'name_kana' => ['required', 'string', 'max:255'],
            'name_kana2' => ['required', 'string', 'max:255'],
            'mail_flg' => ['required', 'string', 'max:255'],
            // 'birthday' => ['required', 'date', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'zip' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'area2' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $data = session()->all();   
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name2' => $data['name2'],
            'name_kana' => $data['name_kana'],
            'name_kana2' => $data['name_kana2'],
            'mail_flg' => $data['mail_flg'],
            'birthday' => $data['birthday'],
            'gender' => $data['gender'],
            'zip' => $data['zip'],
            'area' => $data['area'],
            'area2' => $data['area2'],
            'mobile_number' => $data['mobile_number'],            
        ]);
    }

    
    public function confirm()
    {
        $request = request();
        foreach($request->all() as $key => $val){                       //’Ç‹L
            $request->session()->put($key, $request->$key);             //’Ç‹L
        }
        $request->session()->put('birthday', $request->yy_birth . '-' . $request->mm_birth . '-' . $request->dd_birth); 
        return view('auth.confirm'); 
    }
    
}
