<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('data_user.index', compact('users'));
    }

    public function add_user()
    {
        return view('data_user.add_user');
    }

    public function proses_add_user(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,user',
            'jenis_kelamin' => 'required',
        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        Alert::success('User added successfully');
        return redirect()->route('users');
    }

    public function edit_user($id)
    {
        $data = User::findOrFail($id);
        return view('data_user.edit_user', compact('data'));
    }

    public function proses_edit_user(Request $request, $id)
    {
        // dd($request->all());
        $role = $request->filled('role') ? $request->role : 'default_role';

        if ($request->password == null) {
            $data = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    // 'password' => Hash::make($request->password),
                ]);
        } else {
            $data = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'user_level' => $request->role,
                    'password' => Hash::make($request->password),
                ]);
        }
        Alert::success('User successfully edited');
        return redirect()->route('users', compact('data'));
    }

    public function delete_user($id)
    {
        try {
            // dd($id);
            DB::table('users')->where('id', $id)->delete();
            Alert::success('User successfully deleted');
        } catch (Exception $err) {
            return response([
                'success' => 'false',
                'msg' => 'Error : ' . $err->getMessage() . 'Line :' . $err->getLine() . 'File :' . $err->getFile(),
            ]);
        }
        return redirect()->route('users');
    }
}
