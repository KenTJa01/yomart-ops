<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function loginPage()
    {

        return view('auth.login');

    }

    public function postRequestLogin(Request $request)
    {

        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $cekUser = User::where('username', $request->username)->first();

        if ($cekUser){
            if ( $cekUser->is_active == 1 ) {

                if ( Auth::attempt($credentials) ) {

                    $redirectTo =  route('dashboard');

                    return response()->json([
                        'message' => 'Login Success!',
                        'redirect' => $redirectTo
                    ]);

                } else {

                    return response()->json([
                        'errors' => [
                            'title' => ['LOGIN FAILED!'],
                            'message' => ['Username or password are wrong!'],
                        ]
                    ]);

                }

            } else {

                return response()->json([
                        'errors' => [
                            'title' => ['NOT ACTIVE!'],
                            'message' => ['User status not active!'],
                        ]
                    ]);

            }
        }

        return response()->json([
            'errors' => [
                'title' => ['LOGIN FAILED!'],
                'message' => ['Username or password are wrong!'],
            ]
        ]);

    }

    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }

}
