@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
         
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manajemen Berita</h4>
                  <p class="card-description">
                    -
                  </p>
                  <div>
                  @if(Session::has('success'))
                  <p class="alert">{{ Session::get('success') }}</p>
                  @endif
                  </div>
                  <div>
                  <a href="/admin/berita/tambah"><button type="button" class="btn btn-primary">Tambah Berita</button></a>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Is Headline
                          </th>
                          <th>
                            Is Berita Pilihan
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($datas as $data)
                        <tr>
                          
                          <td>
                            {{$data->id}}
                          </td>
                          <td>
                          {{$data->judul_berita}}
                          </td>
                          <td>
                          {{$data->kategori_berita}}
                          </td>
                          <td>
                          
                          @if($data->is_headline == 'yes')
                            <a href="/admin/berita/set_headline/{{ $data->id }}/no">
                              <div class="badge badge-opacity-success me-3">{{$data->is_headline}}</div>
                            </a>
                          @else 
                            <a href="/admin/berita/set_headline/{{ $data->id }}/yes">
                              <div class="badge badge-opacity-secondary me-3">No</div>
                            </a>
                          @endif
                          
                          </td>
                          <td>

                          @if($data->is_berita_pilihan == 'yes')
                            <a href="/admin/berita/set_berita_pilihan/{{ $data->id }}/no">
                              <div class="badge badge-opacity-success me-3">{{$data->is_berita_pilihan}}</div>
                            </a>
                          @else 
                            <a href="/admin/berita/set_berita_pilihan/{{ $data->id }}/yes">
                              <div class="badge badge-opacity-secondary me-3">No</div>
                            </a>
                          @endif
                          </td>
                          <td>
                            <a href="/admin/berita/edit/{{$data->id}}"><button type="button" class="btn btn-sm btn-primary btn-rounded btn-fw">Edit</button></a>
                            <a href="/admin/berita/hapus/{{$data->id}}"><button type="button" class="btn btn-sm btn-danger btn-rounded btn-fw">Hapus</button></a>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection