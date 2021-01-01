<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
        return Validator::make($data, [
            'groupName' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'groupStat' => ['required', 'string', 'max:255'], 
            'leadN' => ['required', 'string', 'max:255'],
            'leadE' => ['required', 'string','email', 'max:255', 'unique:users'],
            'leadID' => ['required', 'string', 'max:255'],
            'leadNumber' => ['required', 'numeric'],
            'leadGIT' => ['required', 'string', 'max:255'],
            'leadDOB' => ['required', 'date'],
            'leadBirth' => ['required', 'string', 'max:255']
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
        return User::create([
            'groupName' => $data['groupName'],
            'password' => Hash::make($data['password']),
            'groupStat' => $data['groupStat'],

            'leadN' => $data['leadN'],
            'leadE' => $data['leadE'],
            'leadID' => $data['leadID'],
            'leadNumber' => $data['leadNumber'],
            'leadGit' => $data['leadGit'],
            'leadDOB' => $data['leadDOB'],
            'leadBirth' => $data['leadBirth']
        ]);
    }
}
