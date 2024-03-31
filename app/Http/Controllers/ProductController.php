<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function index()
    {
        $data = Barang::paginate(35);
        $kategoris = Kategori::all();
        // dd($kategoris)
        $title = 'Delete User!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('product.index', compact('data', 'kategoris'));
    }

    public function add_product()
    {
        $category = Kategori::select('id', 'name_category')->get();
        return view('product.add_product', compact('category'));
    }

    public function proses_add_product(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|unique:products,id',
            'name_product' => 'required',
            'category' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $validatedData['id_category'] = $validatedData['category']; // Menambahkan id_category dari kategori yang dipilih
        unset($validatedData['category']); // Menghapus kategori dari validatedData

        $data = Barang::create($validatedData);
        Alert::success('Product added successfully');
        return redirect()->route('product', compact('data'));
    }

    public function edit_product($id)
    {
        $data = Barang::findOrFail($id);
        $category = Kategori::all();
        return view('product.edit_product', compact('data', 'category'));
    }

    public function proses_edit_product(Request $request, $id)
    {
        // dd($request->all());

        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name_product' => 'required|string',
            'id_category' => 'required|integer',
            'price' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        // Update data barang
        $product = Barang::find($id);
        $product->name_product = $validatedData['name_product'];
        $product->id_category = $validatedData['id_category'];
        $product->price = $validatedData['price'];
        $product->stok = $validatedData['stok'];
        $product->save();
        Alert::success('Product successfully edited');
        return redirect()->route('product', compact('product'));
    }

    public function delete_product($id)
    {
        try {
            // dd($id);
            DB::table('products')->where('id', $id)->delete();
            Alert::success('Product successfully deleted');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg' => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile(),
            ]);
        }
        return redirect()->route('product');
    }      
}
