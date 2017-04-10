<?php

namespace App\Http\Controllers\Tenant\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/tenant';

    protected function guard()
    {
        return Auth::guard('tenant');
    }

    public function showLoginForm()
    {
        return view('tenant.auth.login')->withErrors(null);
    }

    public function login(Request $request)
    {
        $credentials = [
            'name' => $request->get('name'),
            'password' => $request->get('password')
        ];

        if (Auth::guard('tenant')->attempt($credentials)) {
            return \Redirect::action("Admin\\HomeController@index");
        } else {
            return redirect()->back();
        }
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'name';
    }
}
