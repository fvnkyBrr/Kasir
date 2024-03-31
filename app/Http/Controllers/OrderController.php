<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Cart;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        $cartItems = Cart::whereNull('transaction_id')->get();
        $total = $cartItems->sum('sub_total');
        

        // dd($data);
        return view('order.transaction', compact('data', 'cartItems', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'qty' => 'required',
        ]);

        $product = Barang::findOrFail($request->input('product_id'));

        Cart::create(
            
            [
                'product_id' => $request->product_id,
                'qty' => $request->input('qty'),
                'harga' => $product->price,
                'sub_total' => $product->price * $request->qty,
            ],
        );

        return redirect()->route('orders');
    }

    public function plus(string $id)
    {
        $cart = Cart::findOrFail($id);
        $product = Barang::find($cart->id);
        $currentQty = $cart->qty;
        $cart->qty = $currentQty + 1;
        $cart->sub_total = $cart->harga * $cart->qty;
        $cart->save();

        return redirect()->route('orders');
    }
    public function minus(string $id)
    {
        $cart = Cart::findOrFail($id);
        $product = Barang::find($cart->id);
        $currentQty = $cart->qty;
        $cart->qty = $currentQty - 1;
        $cart->sub_total = $cart->harga * $cart->qty;
        if ($cart->qty == 0) {
            $cart->delete();
        } else {
            $cart->save();
        }

        return redirect()->route('orders');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            Cart::findOrFail($id)->delete();
            return redirect()->route('orders');
    }

    public function checkout(Request $request){

        $validated = $request->validate([
            'paid' => 'required',
        ]);
        $paid = $validated['paid'];
        $cart = Cart::whereNull('transaction_id')->get();
        $total = $cart->sum('sub_total');
        if($paid < $total){
            Alert::error('Error', 'Paid must be greater than or equal to total');
            return redirect()->route('orders');
        }
        $serial_number = "89737";
        $subtotal = $total;
        $change = $paid - $total;
        $transaction = Transaction::create(
            [
            'user_id' => request()->user()->id,
            'serial_number' => $serial_number,
            'sub_total' => $subtotal,
            'paid' => $paid,
            'total' => $total,
            'change' => $change,
            ]
            );
        if($transaction){
            foreach($cart as $c){
                $cart = Cart::find($c->id);
                $product = Barang::find($c->product_id);
                if($product->stok < $c->qty){
                    Cart::find($c->id)->delete();
                    Alert::error('Error', $product->name.' Stock not enough');
                    return redirect()->route('orders');
                }
                $product->stok = $product->stok - $c->qty;
                $product->save();
                $cart->transaction_id = $transaction->id;
                $cart->save();
            }
        }
        $id_transaction = $transaction->id;
        return redirect()->route('orders')->with('success', 'Transaction success');
    }
}
