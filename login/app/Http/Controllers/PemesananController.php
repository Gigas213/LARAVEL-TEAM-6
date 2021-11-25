<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('halamanindex.pemesanan');
    }
}
