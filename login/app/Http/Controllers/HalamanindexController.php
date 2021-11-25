<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GantiPasswordReques;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;
use Illuminate\Support\Facades\Hash as FacadesHash;

class HalamanindexController extends Controller
{
    public function halamanindex(){
        return view('halamanindex.index');
    }
    public function halamanpemesanan(){
        return view('halamanindex.pemesanan');
    }
    public function halamanganti(){
        return view('halamanindex.ganti');
    }
    public function halamantambah(){
        return view('halamanindex.tambah');
    }
    public function halamanupdatex(){
        return view('halamanindex.updatex');
    }
    public function tambahproduct(){
        return view('halamanindex.tambah_product');
    }
    public function daftarproduct(){
        return view('halamanindex.daftar_product');
    }
    public function editproduct(){
        return view('halamanindex.edit');
    }

    public function updatePassword(GantiPasswordReques $request)
    {
        $old_password = auth()->user()->password;
        $user_id = auth()->user()->id;
        if(Hash::check($request->input('old_password'),$old_password)){
            $user = User::find($user_id);
            $user -> password = Hash::make($request->input('password'));
            if($user->save()){
                return redirect()->back()->with('success','Ganti Password Berhasil');
            }
        }else{
            return redirect()->back()->with('failed','Password Lama invalid');
        }
    }
}
