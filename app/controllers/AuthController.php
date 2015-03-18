<?php

class AuthController extends BaseController {

    public function getLogin() {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }

    public function postLogin() {
        $rules = array(
            'email' => 'required',
            'password' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('login') ->with('error_msg', 'Tus datos no son válidos')->withInput();
        }
        else
        {
            // Guardamos en un arreglo los datos del usuario.
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
            if (Auth::attempt($userdata)) {
                return Redirect::to('/');
            }
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('login')
                ->with('error_msg', 'Tus datos son incorrectos') ->withInput(Input::except('password'));
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('login')->with('msg', 'Ha cerrado sesion!');
    }
}
