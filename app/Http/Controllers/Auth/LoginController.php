<?php
 
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest',['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('auth.login');
    }


    public function login(Request $request) {

        $this->validate($request, [
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
        if ($this->attemptLogin($request)) {
            return redirect('home');
        }

/*        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',// ingresar solo con el email
            //$this->username() => 'required|string',// se puede cambiar la forma de ingresar cambiando solo en username()
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials))
        {
            return redirect()->route('dashboard');
         }

         return back()*
             ->withErrors(['email' => trans('auth.failed')])//se llama al metodo username ==
             ->withInput(request(['email']));// se llama al metodo user name de lo ocntrario solo se escribe 'email'*/
//            ->withErrors([$this->username() => trans('auth.failed')])//se llama al metodo username ==
//            ->withInput(request([$this->username()]));// se llama al metodo user name de lo ocntrario solo se escribe 'email'
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function username()
    {
        return 'email';
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function guard()
    {
        return Auth::guard();
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
}
