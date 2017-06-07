<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $req)
    {
        $remember=($req->remember)?true:false;
        $login=array('email'=>$req->email,'password'=>$req->password);
        if ($req->remember==true)
           $result=Auth::attempt($login,true);
        else
           $result=Auth::attempt($login,false);
        if ($result){
            $user = Auth::user();
            if($user->level==1)
                return redirect()->route('product.index')->with('status-success','Login successfully!');
            else
                return redirect()->route('home')->with('status-success','Login successfully!');
        }
        else{
            return redirect()->back()->with('status-error','User or password unvailable');
        }
        
    }
}
