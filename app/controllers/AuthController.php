<?php

class AuthController extends BaseController {

    public function getLogin() {
        return View::make('Auth.login');
    }

    public function postLogin() {
        $rules = array(
            'email' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('') ->with('error_msg', 'Tus datos no son válidos')->withInput();
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
                
                $user = Auth::user();
                $user->last_access = new DateTime();
                $user->save();

                return Redirect::to('project');
                
            }
            // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
            return Redirect::to('')
                ->with('error_msg', 'Sus datos son incorrectos') ->withInput(Input::except('password'));
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('')->with('msg', 'Sesión finalizada');
    }


    

    public function getAbout(){

        $user = Auth::user();

        return View::make('About.about', array('user' => $user));

    }
}
