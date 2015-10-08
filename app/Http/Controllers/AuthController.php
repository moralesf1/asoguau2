<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use View;
use Redirect;
use Input;

class AuthController extends Controller
{
    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('auth/login');
    }

    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'correo' => Input::get('correo'),
            'password' => Input::get('password')
        ];
 
        // Verificamos los datos
        if (Auth::attempt($data)) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            return Redirect::to('/');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('auth/login')->with('error_message', 'Logged out correctly');
    }

}
