<?php

namespace App\Http\Controllers\Auth;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


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
    protected $redirectTo = '/buscomp_dashboard';




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

        

        return Validator::make($data, [
            
            'name' => 'required|string|max:255|unique:bus_company,company_name',
            'Company_Registration_Number' => 'required|string|max:255',
            'Owner_Name' => 'required|string|max:255',
            'Owner_National_Id' => 'required|integer',
            'Office_Location' => 'required|string|max:255',
            'Phone_Number' => 'required|integer',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'company_name' => $data['name'],
            'company_reg_id' =>$data[ 'Company_Registration_Number'],
            'owner_name' => $data[ 'Owner_Name'],
            'owner_national_IDno' => $data[ 'Owner_National_Id'],
            'company_office_location' => $data[ 'Office_Location' ],
            'company_phone_no' =>  $data['Phone_Number'],
            'company_email' => $data['email'],
            'company_password' => bcrypt($data['password']),
        ]);
    }
}
