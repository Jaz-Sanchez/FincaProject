<?php
 
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('auth.login');
    }


    public function login() {
        $credentials = $this->validate(request(), [
            //'email' => 'email|required|string',// ingresar solo con el email 
            $this->username() => 'required|string',// se puede cambiar la forma de ingresar cambiando solo en username()
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) 
        {
            return redirect()->route('dashboard');
         }

         return back()
            ->withErrors([$this->username() => trans('auth.failed')])//se llama al metodo username ==
            ->withInput(request([$this->username()]));// se llama al metodo user name de lo ocntrario solo se escribe 'email'
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function username(){
        return 'email';
    }
}
