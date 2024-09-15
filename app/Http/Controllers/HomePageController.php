<?php

namespace App\Http\Controllers;

use App\Models\BeritaModel;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $data = BeritaModel::leftJoin('kategori','berita.kategori_berita','kategori.id')
        ->leftJoin('users','berita.author','users.id')
        ->select('berita.*','kategori.nama_kategori','users.name as author_name')->paginate('15');
        
        return view('frontend.homepage',['berita_terbaru'=>$data]);
    }
}
