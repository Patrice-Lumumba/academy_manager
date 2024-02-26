<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Dotenv\Exception\ValidationException;
    use Dotenv\Validator;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class LoginController extends Controller
    {
        function index()
        {
            return view('auth.login');
        }

        public function store(Request $request){
            $messages = [
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
            ];
            $request->validate([
                'email' => 'required|string|max:255',
                'password' => ['required'],

            ], $messages);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                return redirect()->intended('dashboard')

                    ->withSuccess('Connexion réussie');

            }else {
                return redirect()->route('login')->with('error', __('Email ou mot de passe incorrect'));
            }

        }

        public function logout(Request $request) {
            Auth::logout();
            return redirect('/login');
        }

    }
