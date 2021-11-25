<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    public function postproduct(Request $request){
        $product = Product::create([
            'nama_product'=> $request->nama_product,
            'kode_product'=> $request->kode_product,
            'harga_product'=> $request->harga_product
        ]);
        if($product->save()){
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!!!']);
        }else{
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function list()
    {
        $product = Product::all();
        return view('halamanindex/daftar_product',['products'=>$product]);
    }

    public function lis()
    {
        $data = Product::all();
        return view('halamanindex/index',['products'=>$data]);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product -> delete();
    }

    public function showData($id)
    {
        $data = Product::find($id);
        return view('halamanindex/edit',['data'=>$data]);
    }

    public function update(Request $request)
    {
        $data = Product::find($request->id);
        $data->nama_product=$request->nama_product;
        $data->kode_product=$request->kode_product;
        $data->harga_product=$request->harga_product;
        if($data->save()){
            return redirect()->route('daftar_product')->with(['success' => 'Data Berhasil Disimpan!!!']);
        }else{
            return redirect()->route('daftar_product')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
