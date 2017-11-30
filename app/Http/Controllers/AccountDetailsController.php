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
        /* Only authorized to view/ edit own profile, unless logged in as admin */
        $authorized = ( (Auth::user()->id == $id) || (Auth::user()->usertype == 1) ) ? true : false;

        if ($authorized) {
        return view('pages/account/view')->with([
            'AccountDetails' => $AccountDetails,
            'UserAddress' => $UserAddress,
            'user_testType' => $user_testType
            ]);
        } else {
            return redirect()->route('dashboard');
        }
    }

     /**
     * Show the Account Edit Page
     *
     * @return \Illuminate\Http\Response
     */
     public function search(Request $request)
     {
      $q = $request->input( 'q' );
      $user = User::where('firstName','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
      if(count($user) > 0)
        return view('pages/account/search')->withDetails($user)->withQuery ( $q );
    else return view ('pages/account/search')->withMessage('No Details found. Try to search again !')->withQuery ( $q );
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
        /* Only authorized to view/ edit own profile, unless logged in as admin */
        $authorized = ( (Auth::user()->id == $id) || (Auth::user()->usertype == 1) ) ? true : false;

        if ($authorized) {
            return view('pages/account/edit')->with([
                'AccountDetails' => $AccountDetails,
                'UserAddress' => $UserAddress
                ]);
        } else {
            return redirect()->route('dashboard');
        }
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
        $address_1 = $request->input('address_1');
        $suburb_town = $request->input('suburb_town');
        $postcode = $request->input('postcode');
        $reference_id = $request->input('reference_id');
        $client_id = $request->input('client_id');
        $password_confirmation = $request->input('password_confirmation');

            // Find the User to update
        $updateUser = AccountDetails::where('id', $id)->first();
        $updateUserAddress = userAddress::where('user_id', $id)->first();

        $updateUser->firstName = $firstName;
        $updateUser->lastName = $lastName;
        $updateUser->client_id = $client_id;
        $updateUser->email = $email;
        $updateUser->mobile = $mobile;
        $updateUser->reference_id = $reference_id;
        $updateUserAddress->address_1 = $address_1;
        $updateUserAddress->suburb_town = $suburb_town;
        $updateUserAddress->postcode = $postcode;

        if($password == '') {

        } else {
                    // if password is not empty
            if($password != $password_confirmation) {
                        // if password field is not the same as password_confirmation
                Session::flash('message.level', 'danger');
                Session::flash('message.content', 'New password didn\'n match.');
                return redirect()->route('accounts.edit', ['id' => $id]);
            } else {
                        // change password
                $updateUser->password = bcrypt($password);
            }
        }


        $updateUser->save();
        $updateUserAddress->save();

        if (!$updateUser) {
           Session::flash('message.level', 'danger');
           Session::flash('message.content', 'There was a problem submitting your form! Please try again!');
           return redirect()->route('accounts.edit', ['id' => $id]);
       }
       else {
        Session::flash('message.level', 'success');
        Session::flash('message.content', 'You\'ve successfully completed your submission!');
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
        $address_1 = $request->input('address_1');
        $suburb_town = $request->input('suburb_town');
        $postcode = $request->input('postcode');
        $password_confirmation = $request->input('password_confirmation');

        // Find the User to update
        $updateUser = AccountDetails::where('id', $id)->first();
        $updateUserAddress = UserAddress::where('user_id', $id)->first();

        $updateUser->firstName = $firstName;
        $updateUser->lastName = $lastName;
        $updateUser->email = $email;
        $updateUser->mobile = $mobile;
        $updateUserAddress->address_1 = $address_1;
        $updateUserAddress->suburb_town = $suburb_town;
        $updateUserAddress->postcode = $postcode;

        if ($current_password != '') {
            // if current password is not empty
            if (Hash::check($request->input('current_password'), $updateUser->password)) {
                // if current password is the same as the database
                if($password == '') {
                    // if password field is empty
                    Session::flash('message.level', 'danger');
                    Session::flash('message.content', 'Please enter new password.');
                    return redirect()->route('accounts.edit', ['id' => $id]);
                } else {
                    // if password is not empty
                    if($password != $password_confirmation) {
                        // if password field is not the same as password_confirmation
                        Session::flash('message.level', 'danger');
                        Session::flash('message.content', 'New password didn\'n match.');
                        return redirect()->route('accounts.edit', ['id' => $id]);
                    } else {
                        // change password
                        $updateUser->password = bcrypt($password);
                    }
                }
            } else {
                Session::flash('message.level', 'danger');
                Session::flash('message.content', 'Incorrect current password.');
                return redirect()->route('accounts.edit', ['id' => $id]);
            }

        } else {
            // Do nothing
        }

        $updateUser->save();
        $updateUserAddress->save();

        if (!$updateUser) {
            Session::flash('message.level', 'danger');
            Session::flash('message.content', 'There was a problem submitting your form! Please try again!');
            return redirect()->route('accounts.edit', ['id' => $id]);
        }
        else {
            Session::flash('message.level', 'success');
            Session::flash('message.content', 'You\'ve successfully completed your submission!');
            return redirect()->route('accounts.view', ['id' => $id]);
        }
    }
}
