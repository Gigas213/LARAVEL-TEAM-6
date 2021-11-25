<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use App\Models\User;

class HalamanawalController extends Controller
{
    public function halamanlogin(){
        return view('halamanawal.login');
    }

    public function postlogin(Request $request){
        if ( Auth::attempt($request->only('email','password'))){
            return redirect(('halamanindex/index'));
        }
        return  redirect('/');
    }
    public function logout(Request $request){
        Auth::Logout();
        return redirect('/halamanawal/login');
    }

    public function halamanregister(){
        return view('halamanawal.register');
    }
    public function postregis(Request $request){
        $user = User::create([
            'name'=> $request->name,
            'level'=> 'member',
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        if($user->save()){
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!!! Silahkan Login.']);
        }else{
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}