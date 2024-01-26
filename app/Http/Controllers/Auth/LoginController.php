<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function index(){
        return view('pages.login');
    }

    public function login(Request $request){
        try {
            //code...
            $email = $request->email;
            $password = $request->password;

            if(Auth::attempt(['email'=> $email, 'password'=> $password])){
                if(auth()->user()->authent=='administrator'){
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->route('siswa.dashboard');
                }
            }else{
                Session::flash('failed',"Pengguna dan Kata Sandi Tidak Benar..!");
                return redirect()->route('login.index');
            }

        } catch (\Throwable $th) {
            //throw $th;
            Session::flash("failed","Opps..., terjadi kesalahan");
            return redirect()->route('login.index');
        }

    }

    public function logout(){
        Auth::logout();
    }
}
