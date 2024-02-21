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
        return view('product.index', compact('data', 'kategoris'));
    }

    public function add_product()
    {
        $kategori = Kategori::select('id', 'name_category')->get();
        return view('product.add_product', compact('kategori'));
    }

    public function proses_add_product(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|integer|unique:barang,id',
            'nama_barang' => 'required',
            'kategori' => 'required|exists:categories,id',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        $validatedData['id_category'] = $validatedData['kategori']; // Menambahkan id_category dari kategori yang dipilih
        unset($validatedData['kategori']); // Menghapus kategori dari validatedData

        $data = Barang::create($validatedData);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('product', compact('data'));
    }

    public function edit_product($id)
    {
        $data = Barang::findOrFail($id);
        $kategori = Kategori::all();
        return view('product.edit_product', compact('data', 'kategori'));
    }

    public function proses_edit_product(Request $request, $id)
    {
        // dd($request->all());

        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'id_category' => 'required|integer',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        // Update data barang
        $barang = Barang::find($id);
        $barang->nama_barang = $validatedData['nama_barang'];
        $barang->id_category = $validatedData['id_category'];
        $barang->harga = $validatedData['harga'];
        $barang->stok = $validatedData['stok'];
        $barang->save();
        Alert::success('Product Berhasil Di Edit');
        return redirect()->route('product', compact('barang'));
    }

    public function delete_product($id)
    {
        try {
            // dd($id);
            DB::table('barang')->where('id', $id)->delete();
            Alert::success('Product Berhasil Dihapus');
        } catch (Exception $e) {
            return response([
                'success' => false,
                'msg' => 'Error : ' . $e->getMessage() . ' Line : ' . $e->getLine() . ' File : ' . $e->getFile(),
            ]);
        }
        return redirect()->route('product');
    }
}
