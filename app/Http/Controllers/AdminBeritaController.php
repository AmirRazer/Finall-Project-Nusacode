<?php

namespace App\Http\Controllers;

use Monolog\Logger;
use App\Models\BeritaModel;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Monolog\Handler\StreamHandler;
use Illuminate\Support\Facades\Auth;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $log_path = storage_path().'/admin-log';
        $log_name = 'aktifitas-admin'. date('Y-m-d'). '.log';
        $log = new Logger('log-admin');
        $log->pushHandler(new StreamHandler($log_path.'/'.$log_name));
        $log->info(Auth::id(). 'akses modul berita'. date('Y-m-d'));

        $data = BeritaModel::get();
        return view ('admin.berita',['datas'=>$data]);
    }
    public function tambah()
    {
        $list_kategori = KategoriModel::get();
        return view ('admin.berita-tambah',['kategori_list'=> $list_kategori]);
    }
    public function simpan(Request $request)
    {

        //simpan gambar
        $imageName = 'img-'.time().'.'. $request->gambar->extension();
        $request->gambar->move(public_path('img'),$imageName);
        $slug = strtolower(str_replace(' ','-',$request->judul));


        $data = new BeritaModel;
        $data->judul_berita = $request->judul;
        $data->konten_berita = $request->konten;
        $data->gambar = $imageName;
        $data->kategori_berita = $request->kategori;
        $data->slug = $slug;
        $data->jumlah_views = 0;
        $data->is_headline = 'no';
        $data->is_berita_pilihan = 'no';
        $data->author = Auth::id();
        $data->created_at = date('Y-m-d H:i:s');
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/berita');
    }
    public function edit($id)
    {
        $list_kategori = KategoriModel::get();
        $data = BeritaModel::where('id',$id)->first();
        return view ('admin.berita-edit',['data'=>$data,'kategori_list'=> $list_kategori]);
    }
  
public function update(Request $request, $id)
    {
        $data = BeritaModel::where('id', $id)->first();
        $slug = strtolower(str_replace(' ', '-', $request->judul));

        if ($request->gambar != null) {
            // Check if the old image exists before attempting to delete it
            $oldImagePath = public_path('img/' . $data->gambar);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Save the new image
            $imageName = 'img-' . time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('img'), $imageName);
            $data->gambar = $imageName;
        }

        $data->judul_berita = $request->judul;
        $data->konten_berita = $request->konten;
        $data->kategori_berita = $request->kategori;
        $data->slug = $slug;
        $data->updated_at = date('Y-m-d H:i:s');
        $data->save();

        return redirect('admin/berita');
    }
    public function hapus($id)
    {
        $data = BeritaModel::where('id',$id)->delete();
        

        return redirect('admin/berita');
    }

    public function set_headline($id_berita, $status)
    {
        $data = BeritaModel::where('id',$id_berita)->first();
        $data->is_headline = $status;
        $data->save();

        return redirect('admin/berita')->with('success','berhasil set headline');
    }

    public function set_berita_pilihan($id_berita, $status)
    {
        $data = BeritaModel::where('id',$id_berita)->first();
        $data->is_berita_pilihan = $status;
        $data->save();

        return redirect('admin/berita')->with('success','berhasil set berita pilihan');
    }
}
