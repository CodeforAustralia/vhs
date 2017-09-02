<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountDetails;
use App\Models\UserAddress;
use App\User as User;
use Session;
use Illuminate\Support\Facades\Hash;

class AccountDetailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all account details
        $AccountDetails = AccountDetails::all();
        // Get all account address details
        // $UserAddress = UserAddress::all();

        return view('pages/account/index')->with([
            'AccountDetails' => $AccountDetails
            ]);
    }

    /**
     * Show the Account View Page
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $AccountDetails = AccountDetails::where('id', $id)->get();
        $UserAddress = UserAddress::where('user_id', $id)->get();
        return view('pages/account/view')->with([
            'AccountDetails' => $AccountDetails,
            'UserAddress' => $UserAddress
            ]);
    }

     /**
     * Show the Account Edit Page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $AccountDetails = AccountDetails::where('id', $id)->get();
        $UserAddress = UserAddress::where('user_id', $id)->get();
        return view('pages/account/edit')->with([
            'AccountDetails' => $AccountDetails,
            'UserAddress' => $UserAddress
            ]);
    }

     /**
     * Show the Account Edit Page
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));

        $updateUser = User::find($id);

        // echo $updateUser;
        // die;

        $updateUser->firstName = $firstName;
        $updateUser->lastName = $lastName;
        $updateUser->email = $email;
        $updateUser->password = $password;

        // Update User in database
        $updateUser->save();

        if (!$updateUser) {
            Session::flash('message', 'There was a problem submitting your form! Please try again!');
            return redirect()->route('accounts.error');
        }
        else {
            Session::flash('message', 'You\'ve successfully completed your submission!');
            return redirect()->route('accounts.success');
        }
        
    }

    /*
    * Render successful submission page
     */
    public function success()
    {
        return view('pages/account/success');
    }

    /*
    * Render error page
     */
    public function error()
    {
        return view('pages/account/error');
    }
}
