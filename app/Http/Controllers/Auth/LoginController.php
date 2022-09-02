<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

            'phone_no' => 'required',

            'password' => 'required',

        ]);



        $fieldType = filter_var($request->phone_no, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone_no';

        if(auth()->attempt(array($fieldType => $input['phone_no'], 'password' => $input['password'])))

        {
            if (auth()->user()->is_admin == 1) {

                return redirect()->route('products.index');

            }else{

                return redirect()->route('home');

            }



        }else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }



    }

}

