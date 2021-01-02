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
            'groupName' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed',
                            'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[!@#$%&*?]/'],
            'groupStat' => ['required', 'string'],
            'leadN' => ['required', 'string'],
            'leadE' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'leadNumber' => ['required', 'numeric', 'digits_between:8,15', 'unique:users'],
            'leadID' => ['required', 'string', 'unique:users'],
            'leadGit' => ['required', 'string', 'unique:users'],
            'leadBirth' => ['required', 'string'],
            'leadDOB' => ['required']
        ],
        [
            'groupName.max' => 'The group name must not contain more than 255 characters.',
            'groupName.unique' => 'That group name has already been taken.',

            'password.regex' => 'The password must contain an uppercase letter, a lowercase letter, a number, and a special character.',
            
            'leadE.max' => 'The email must not contain more than 255 characters.',
            'leadE.unique' => 'That email has already been used.',

            'leadNumber.numeric' => 'The WhatsApp number must be numeric.',
            'leadNumber.digits_between' => 'The WhatsApp number must be between 8 and 15 digits.',
            'leadNumber.unique' => 'That WhatsApp number has already been used.',

            'leadID.email' => 'That LINE ID has already been used.',

            'leadGit' => 'That GitHub/GitLab ID has already been used.'
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
            'leadNumber' => $data['leadNumber'],
            'leadID' => $data['leadID'],
            'leadGit' => $data['leadGit'],
            'leadBirth' => $data['leadBirth'],
            'leadDOB' => $data['leadDOB']
        ]);
    }
}
