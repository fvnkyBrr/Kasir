<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use App\Models\Kategori;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $cartItems = Cart::all(); 

        // dd($data);
        return view('transaksi.index', compact('barang', 'cartItems'));
    }

    public function proses_order(Request $request)
    {
        //validasi request
        $request->validate([
            'barang_id' => 'required|exists:products,id',
            'qty' => 'required|integer|min:1',
        ]);

        // Ambil data produk dari database
        $barang = Barang::findOrFail($request->product_id);

        //Hitung subTotal
        $subTotal = $barang->harga * $request->qty;

        // Tambahkan produk ke keranjang
        Cart::create([
            'product_id' => $barang->id,
            'qty' => $request->qty,
            'harga' => $barang->harga,
            'sub_total' => $subTotal,
        ]);

        return redirect()->back()->with('success', 'Product added to cart successfully');
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'cart_id' => 'required|exists:carts,id',
        ]);

        Cart::destroy($request->cart_id);
        return redirect()->back()->with('success', 'Product removed from cart successfully');
    }

    public function processTransaction(Request $request)
    {
        //Hitung total transaksi
        $total = Cart::sum('sub_total');

        //proses transaksi
        Transaction::create([
            'sub_total' => $total,
            'total' => $total,
            'paid' => $request->paid,
            'change' => $request->paid - $total,
        ]);

        //kosongkan keranjang
        Cart::truncate();
        return redirect()->back()->with('success', 'Transaction processed successfully');
    }
}
