<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLogin()  {
        return view('login.login ');
    }
    public function showRegister()  {
        return view('login.register');
    }
    public function addAccount(request $request)  {

        $validate = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required','unique:App\Models\User','max:255'],
            'password' => ['required','max:255']
        ]);

        if($validate)  {

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;

            $user->save();

            $this->authAccount($request);

            return redirect('/');
        } else  {

            return redirect()->back()->withErrors(['email'=>'Credenciais Inválidas']);
            
        }
    }

    public function logout(request $request)  {

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('accounts/login');

    }

    public function authAccount(request $request)  {

        validator($request->all(), ['email' => ['required', 'email'], 'password' => ['required']])->validate();

        if(auth()->attempt($request->only(['email', 'password'])))  {

            return redirect('/');

        }

        return redirect()->back()->withErrors(['email'=>'Credenciais Inválidas']);

    }

    public function removeAccount(request $request)  {
        $id = $request->id;

        DB::table('users')->where('id', $id)->delete();

        return redirect('/');
    }
}
