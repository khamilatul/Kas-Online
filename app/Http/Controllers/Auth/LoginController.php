<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Master\UserFormRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function postLogin(UserFormRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'), true)) {

            session()->put('email', Auth::user()->email);
            session()->put('name', Auth::user()->name);
            session()->put('level', Auth::user()->level);
            session()->put('user_id', Auth::user()->id);

//aksi untuk yang data user sudah lengkap
            return redirect()->route('frontoffice');
        }
        else {
                session()->flash('auth_message', 'Kombinasi Email dan Password Salah!');
                return redirect()->route('login');
            }
        }
    

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }}
