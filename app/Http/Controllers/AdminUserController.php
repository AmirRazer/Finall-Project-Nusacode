<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $data = User::get();
        return view('admin.admin',['datas'=>$data]);
    }
    public function tambah()
    {
        return view('admin.admin-tambah');

    }
    public function simpan(Request $request)
    {
        $data = new User;
        $data->name = $request->nama;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->password = Hash::make($request->password);
        $data->created_at = date('Y-m-d H:i:s');
        $data->created_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/admin');
    }
    public function edit($id)
    {
        $data = User::where('id',$id)->first();
        return view('admin.admin-edit',['data'=>$data]);
    }
    public function update(Request $request,$id)
    {
        $data = User::where('id', $id)->first();
        $data->name = $request->nama;
        $data->email = $request->email;
        $data->role = $request->role;
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/admin');
    }

    public function hapus ($id)
    {
        $data = user::where('id', $id)->delete();
        return redirect('admin/admin');
    }


}
