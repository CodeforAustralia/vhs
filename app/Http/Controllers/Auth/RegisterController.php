<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\UserAddress;
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
    protected $redirectTo = '/dashboard';

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
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
         // add to user  to the database
        $addToDB = new user;

        $addToDB->firstName = $data['firstName'];
        $addToDB->lastName = $data['lastName'];
        $addToDB->email = $data['email'];
        $addToDB->password = bcrypt($data['password']);

        $addToDB->save();

            // Get last inserted ID from users table
        $user_last_id = $addToDB->id;

         // add user's address to the database
        $addToDB_userAddress = new UserAddress;

        $addToDB_userAddress->user_id = $user_last_id;
        $addToDB_userAddress->address_1 = '';
        $addToDB_userAddress->suburb_town = '';
        $addToDB_userAddress->postcode = '';
        $addToDB_userAddress->postal_address_1 = '';
        $addToDB_userAddress->postal_suburb_town = '';
        $addToDB_userAddress->postal_postcode = '';

        $addToDB_userAddress->save();

        return $addToDB;
    }
}
