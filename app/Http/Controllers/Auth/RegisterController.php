<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Models\Role;
    use App\Models\User;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Http\Request;


    class RegisterController extends Controller
    {
        function index()
        {
            return view('auth/register');
        }

        public function store(Request $request)
        {
            $messages = [
                'name.required' => 'Username is required',
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
                'password.confirmed.required' => 'Password and Confirm Password is required',
            ];
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255',
                'password' => ['required', 'confirmed'],
                'password.confirmed' => 'Les deux mots de passes ne coincident pas',

            ], $messages);


            $user = new User();

            $user->password = $request['password'];
            $user->email =  $request['email'];
            $user->name =  $request['name'];

//            $user->getRoleNames();
//
//            $new_user = $user->save();

            if ($user) {
                return redirect()->route('login')->with('success', __('Enregitrement réussit'));
            }



//
        }
    }
