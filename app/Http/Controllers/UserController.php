<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('DataUsers.index', compact('users'));
    }

    public function add_users()
    {
        return view('DataUsers.add_users');
    }

    public function proses_add_users(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'user_level' => 'required|in:admin,user',
            'jenis_kelamin' => 'required',
        ]);

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_level' => $request->user_level,
            'jenis_kelamin' => $request->jenis_kelamin,
        ]);

        return redirect()->route('users');
    }

    public function edit_users($id)
    {
        $data = User::findOrFail($id);
        return view('DataUsers.edit_user', compact('data'));
    }

    public function proses_edit_users(Request $request, $id)
    {
        // dd($request->all());
        $userLevel = $request->filled('user_level') ? $request->user_level : 'default_user_level';

        if ($request->password == null) {
            $data = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'user_level' => $request->user_level,
                    // 'password' => Hash::make($request->password),
                ]);
        } else {
            $data = DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'user_level' => $request->user_level,
                    'password' => Hash::make($request->password),
                ]);
        }
        // Alert::success('Users Berhasil Di Edit');
        return redirect()->route('users', compact('data'));
    }

    public function delete_users($id){

        
        try{
            // dd($id);
            DB::table('users')->where('id', $id)->delete();
        }catch(Exception $err){
            return response([
                'success' => 'false',
                'msg' => 'Error : ' . $err->getMessage() . 'Line :' . $err->getLine() . 'File :' . 
                $err->getFile(),
            ]);
        }
    }
}
