<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $data = BeritaModel::get();
        return view ('admin.berita',['datas'=>$data]);
    }
    public function tambah()
    {
        return view ('admin.berita-tambah');
    }
    public function simpan(Request $request)
    {
        $slug = strtolower(str_replace(' ','-',$request->nama_kategori));
        $data = new BeritaModel;
        $data->nama_kategori = $request->nama_kategori;
        $data->slug = $slug;
        $data->created_at = date('Y-m-d H:i:s');
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/kategori');
    }
    public function edit($id)
    {
        $data = BeritaModel::where('id',$id)->first();
        return view ('admin.kategori-edit',['data'=>$data]);
    }
    public function update(Request $request, $id)
    {
        $slug = strtolower(str_replace(' ','-',$request->nama_kategori));
        $data = BeritaModel::where('id',$id)->first();
        $data->nama_kategori = $request->nama_kategori;
        $data->slug = $slug;
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/kategori');
    }
    public function hapus($id)
    {
        $data = BeritaModel::where('id',$id)->delete();
        

        return redirect('admin/kategori');
    }
}
