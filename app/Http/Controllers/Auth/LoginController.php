<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email'=> $input['email'],'password' => $input['password']))) {
            if (auth()->user()->role == 'user') {
                return redirect()->route('homeuser');
            } else if (auth()->user()->role == 'adminkonten') {
                return redirect()->route('homekonten');
            } else if (auth()->user()->role == 'adminkeuangan') {
                return redirect()->route('homekeuangan');
            } else if (auth()->user()->role == 'pemilik') {
                return redirect()->route('homepemilik');
            } else {
                return redirect()->back();
            }
            } else {
                return redirect()->route('login')->with('error', 'Email Address And Password Are Wrong.');
            }
        }

        public static function cek_user()
    {
        if (isset($_COOKIE['token']) && !empty($_COOKIE['token'])) {
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    }


