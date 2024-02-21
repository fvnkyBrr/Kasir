<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        // dd($data);
        return view('kategori.index', compact('data'));
    }

    public function add_kategori()
    {
        return view('kategori.add_kategori');
    }

    public function proses_add_kategori(Request $request)
    {   
        //validasi data
        $validatedData = $request->validate([
            'kategori' => 'required|string',
        ]);

        $validatedData['name_category'] = $validatedData['kategori'];
        unset($validatedData['kategori']);

        $data = Kategori::create($validatedData);
        Alert::success('Kategori Berhasil Di Tambah');
        // dd($data);
        return redirect()->route('kategori', compact('data'));
    }

    public function edit_kategori($id)
    {
        $data = Kategori::findOrFail($id);
        return view('kategori.edit_kategori', compact('data'));
    }

    public function proses_edit_kategori(Request $request, $id)
    {
        $data = Kategori::findOrFail($id);
        $data->update(
            [
                'name_category' => $request->input('kategori'),
            ]
        );
        Alert::success('Kategori Berhasil Di Edit');
        return redirect()->route('kategori', compact('data'));
    }
    
    public function delete_kategori($id)

    {
        try{
            DB::table('categories')->where('id', $id)->delete();
            Alert::success('Kategori Berhasil Dihapus');
        }catch(Exception $err){
            return response([
                'success'=> false,
                'msg' => 'ERROR : ' . $err->getMessage() . 'LINE :' . $err->getLine() . 'FILE :' . $err->getFile(),
            ]);
        }
        return redirect()->route('kategori');
    }
}