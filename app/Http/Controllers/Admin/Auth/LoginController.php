<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin';

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login')->withErrors(null);
    }

    public function login(Request $request)
    {
        $credentials = [
            'name' => $request->get('name'),
            'password' => $request->get('password')
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
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
