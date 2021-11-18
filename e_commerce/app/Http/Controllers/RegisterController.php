<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name'=> 'required|min:5|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=>'required|min:6'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success', 'Registrasion successful pleas login!');

        return redirect('/login');
    }
}
