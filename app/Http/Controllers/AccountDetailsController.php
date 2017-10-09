<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountDetails;
use App\Models\UserAddress;
use App\User as User;
use Session;
use Auth;
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
     * Show the Account dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all account details
        $AccountDetails = AccountDetails::orderBy('firstName')->paginate(30);
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
        $user_testType = Auth::user()->test_type;
        $AccountDetails = AccountDetails::where('id', $id)->get();
        $UserAddress = UserAddress::where('user_id', $id)->get();
        return view('pages/account/view')->with([
            'AccountDetails' => $AccountDetails,
            'UserAddress' => $UserAddress,
            'user_testType' => $user_testType
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
     * Updatebyadmin function
     *
     * @return \Illuminate\Http\Response
     */
     public function updatebyadmin(Request $request, $id)
     {
        $password = $request->input('password');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $reference_id = $request->input('reference_id');
        $client_id = $request->input('client_id');
        $password_confirmation = $request->input('password_confirmation');

            // Find the User to update
        $updateUser = AccountDetails::where('id', $id)->first();

        $updateUser->firstName = $firstName;
        $updateUser->lastName = $lastName;
        $updateUser->client_id = $client_id;
        $updateUser->email = $email;
        $updateUser->mobile = $mobile;
        $updateUser->reference_id = $reference_id;

        if($password == '') {
            
        } else {
                    // if password is not empty
            if($password != $password_confirmation) {
                        // if password field is not the same as password_confirmation
                Session::flash('message', 'New password didn\'n match.');
                return redirect()->route('accounts.edit', ['id' => $id]);
            } else {
                        // change password
                $updateUser->password = bcrypt($password);
            }
        } 


        $updateUser->save();

        if (!$updateUser) {
            Session::flash('message', 'There was a problem submitting your form! Please try again!');
            return redirect()->route('accounts.edit', ['id' => $id]);
        }
        else {
            Session::flash('message', 'You\'ve successfully completed your submission!');
            return redirect()->route('accounts.view', ['id' => $id]);
        }
    }

     /**
     * Update function
     *
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
        $password = $request->input('password');
        $current_password = $request->input('current_password');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $mobile = $request->input('mobile');
        $password_confirmation = $request->input('password_confirmation');

        // Find the User to update
        $updateUser = AccountDetails::where('id', $id)->first();

        $updateUser->firstName = $firstName;
        $updateUser->lastName = $lastName;
        $updateUser->email = $email;
        $updateUser->mobile = $mobile;
        
        if ($current_password != '') {
            // if current password is not empty
            if (Hash::check($request->input('current_password'), $updateUser->password)) {
                // if current password is the same as the database
                if($password == '') {
                    // if password field is empty
                    Session::flash('message', 'Please enter new password.');
                    return redirect()->route('accounts.edit', ['id' => $id]);
                } else {
                    // if password is not empty
                    if($password != $password_confirmation) {
                        // if password field is not the same as password_confirmation
                        Session::flash('message', 'New password didn\'n match.');
                        return redirect()->route('accounts.edit', ['id' => $id]);
                    } else {
                        // change password
                        $updateUser->password = bcrypt($password);
                    }
                } 
            } else {
                Session::flash('message', 'Incorrect current password.');
                return redirect()->route('accounts.edit', ['id' => $id]);
            }

        } else {
            // Do nothing
        }

        $updateUser->save();

        if (!$updateUser) {
            Session::flash('message', 'There was a problem submitting your form! Please try again!');
            return redirect()->route('accounts.edit', ['id' => $id]);
        }
        else {
            Session::flash('message', 'You\'ve successfully completed your submission!');
            return redirect()->route('accounts.view', ['id' => $id]);
        }
    }
}
