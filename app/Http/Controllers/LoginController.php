<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{

    public function login()
    {
        if(session('key') == null || session('name') == null || session('role') == null){
            //mengosongkan session
            session()->put('name','');
            session()->put('role','');
            session()->put('key','');
            return view('welcome_login');
        }
        return redirect()->back();
    }

    public function authenticate(Request $request){
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
        //menaburi salt
        $key = "ToolRepairApp";
        $password = md5($request->password.$key);
        //menampung data
        $username = $request->username;
        //mencari apakah user terdaftar
        $check = User::
            where('username',$username)
            ->where('password',$password)
            ->where('status','ACTIVE')
            ->first();
        //jika terdata dan sebagai admin user akan dilempar ke home
        if($check){
            if($check->role == 'admin_toolrepair' || $check->role == 'admin_production' || $check->role == 'admin_it'){
                Auth::login($check);

                $key = md5("ToolRepairApp");
                $request->session()->put('name',$check->name);
                $request->session()->put('role',$check->role);
                $request->session()->put('key',$key);
                if($check->role == 'admin_it'){
                    return redirect()->intended('user');
                }
                return redirect()->intended('dashboard');
            }
            return back()->withErrors(['username' => 'Anda bukan admin.',])->onlyInput('username');
        }
        //jika tidak terdata user kembali ke halaman login
        return back()->withErrors([
            'username' => 'Akun tidak ditemukan!!',
        ])->onlyInput('username');
    }

    public function logout(){
        Auth::logout();
        //mengosongkan session
        session()->put('name','');
        session()->put('role','');
        session()->put('key','');
        return view('welcome_login');
    }
}
