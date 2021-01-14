<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function data()
    {
        $user = DB::table('users')->get();
        //return $user;
        return view('user.data', ['users'=>$user]);
    }

    public function add()
    {
        return view('user.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('users')->insert([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> $request->password,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('user')->with('status', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('user/edit', compact('user'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('users')->where('id', $id)
        ->update([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'username'=> $request->username,
            'email'=> $request->email,
            'password'=> $request->password,
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('user')->with('status', 'User berhasil diedit');
    }

    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('user')->with('status', 'User berhasil dihapus');
    }
}
