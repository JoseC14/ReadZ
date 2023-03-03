<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');    
    }


    public function auth(Request $request){

        $credenciais = $request->validate([
            'email'=> ['required','email'],
            'password' =>['required']
        ],[
            'email.required' => 'E-mail é obrigatório',
            'password.required' => 'Senha é obrigatória'
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }else{
            return redirect()->back()->with('danger','E-mail ou senha inválido');
        }
    }
    
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }
    
    public function store(UserRequest $request){
         $usuario = User::create([
            'name'=> $request->user,
            'email'=> $request->email,
            'password'=>bcrypt($request->password)
         ]);

         if ($usuario){
            return redirect('/login');
         }
    }
    
    public function create($id){
        $user = User::find($id);

        return view('editprofile',compact('user'));
    }

    public function edit($id,Request $request){
        $user = User::where('id',$id)->update(['name'=>$request->user]);

        if (isset($user)){
            return redirect('/profile');
        }
    }
}
