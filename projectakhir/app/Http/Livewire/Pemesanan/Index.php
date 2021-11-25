<?php

namespace App\Http\Livewire\Pemesanan;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{
    public $product;
    public $pembayaran;
    public function submit()
    {
        $transaction = Transaction::create([
            'product_id'=> $this->product,
            'qty'=> 1,
        ]);
        $transaction->total = $transaction->product->harga_product;
        $transaction->save();

        session()->flash('message','Produc Berhasil Di input !!!');
    }

    public function render()
    {
        return view('livewire.pemesanan.index',[
            'products' => Product::orderBy('nama_product','asc')->get(),
            'transactions' => Transaction::get()
        ]);
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();

        session()->flash('messages','Produc Berhasil Di Hapus !!!');
    }

    public function save(){
        $order = Order::create([
            'no_order'=>'OD'.date('Ymd').rand(1111,9999),
            'nama' => auth()->user()->name
        ]);

        $transaction = Transaction::get();
        foreach ($transaction as $key => $value){
            $product =array(
                'order_id' => $order ->id,
                'product_id'=>$value->product_id,
                'qty'=>$value->qty,
                'total'=>$value->total,
                'created_at'=> \Carbon\carbon::now(),
                'updated_at'=> \Carbon\carbon::now()
            );

            $orderProduct = OrderProduct::insert($product);

            $deleteTransaction = Transaction::where('id',$value->id)->delete();
        }
        session()->flash('message','Transaksi Berhasil Disimpan !!!');
    }
}
