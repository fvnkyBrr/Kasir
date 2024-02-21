<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $data = Barang::paginate(35);
        // $dataBarang = DB::select('SELECT * FROM barang WHERE id NOT IN (SELECT id_barang FROM `order`)');
        $kategori = Kategori::all();
        // $order = DB::table('order')->get();
        // dd($data);
        return view('transaksi.index', compact('data' , 'kategori'));

        // return view('transaksi.index');
    }

   
}
