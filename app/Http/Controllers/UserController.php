<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view('users.users', compact('user'), [
            "title" => "user",
        ]);
    }
    public function create()
    {

        return view('users.users-entry', [

            "title" => "produk",
        ]);

    }
    public function store(Request $request)
    {
        $val = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);
        $val['password'] = bcrypt($val['password']);
        // dd($val);
        User::create($val);
        toast('Data berhasil ditambahkan', 'success');
        return redirect('/user');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.users-edit', compact('user'), [
            "title" => 'user',
        ]);
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);
        $val = $request->only(['name', 'username', 'password', 'role_id']);
        $val['password'] = bcrypt($val['password']);
        User::find($id)->update($val);
        toast('Data berhasil diubah', 'success');
        return redirect('/user');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        toast('Data berhasil dihapus', 'success');
        return redirect('/user');
    }
}
