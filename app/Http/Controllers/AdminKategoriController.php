<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
class AdminKategoriController extends Controller
{
    public function index()
    {
        $data = KategoriModel::get();
        return view('admin.kategori',['datas'=>$data]);
    }
    public function tambah()
    {
        return view('admin.kategori-tambah');
    }
    public function simpan(Request $request)
    {
        $slug = strtolower(str_replace(' ','-',$request->nama_kategori));

        $data = new KategoriModel;
        $data->nama_kategori = $request->nama_kategori;
        $data->slug = $slug;
        $data->created_at = date('Y-m-d H:i:s');
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();
        return redirect('admin/kategori');
    }
    public function edit($id)
    {
        $data = KategoriModel::where('id',$id)->first();
        return view('admin.kategori-edit',['data'=>$data]);
    }

    public function update(Request $request, $id)
    {
        $data = KategoriModel::where('id',$id)->first();
        $data->nama_kategori = $request->nama_kategori;
        $data->slug = strtolower(str_replace(' ','-',$request->nama_kategori));
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/kategori');
    }

    public function hapus($id)
    {
        $data = KategoriModel::where('id', $id)->delete();
        return redirect('admin/kategori');
    }


}
