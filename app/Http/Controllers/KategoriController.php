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
        return view('category.index', compact('data'));
    }

    public function add_category()
    {
        return view('category.add_category');
    }

    public function proses_add_category(Request $request)
    {
        //validasi data
        $validatedData = $request->validate([
            'category' => 'required|string',
        ]);

        $validatedData['name_category'] = $validatedData['category'];
        unset($validatedData['category']);

        $data = Kategori::create($validatedData);
        Alert::success('Category added successfully');
        // dd($data);
        return redirect()->route('category', compact('data'));
    }

    public function edit_category($id)
    {
        $data = Kategori::findOrFail($id);
        return view('category.edit_category', compact('data'));
    }

    public function proses_edit_category(Request $request, $id)
    {
        $data = Kategori::findOrFail($id);
        $data->update([
            'name_category' => $request->input('category'),
        ]);
        Alert::success('Category successfully edited');
        return redirect()->route('category', compact('data'));
    }

    public function delete_category($id)
    {
        try {
            DB::table('categories')->where('id', $id)->delete();
            Alert::success('Category successfully deleted');
        } catch (Exception $err) {
            return response([
                'success' => false,
                'msg' => 'ERROR : ' . $err->getMessage() . 'LINE :' . $err->getLine() . 'FILE :' . $err->getFile(),
            ]);
        }
        return redirect()->route('category');
    }
}
