@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manajemen Kategori</h4>
                  <p class="card-description">
                    -
                  </p>
                  <div>
                  <a href="/admin/kategori/tambah"><button type="button" class="btn btn-primary">Tambah Kategori</button></a>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nama Kategori
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
                          {{$data->nama_kategori}}
                          </td>
                          <td>
                            <a href="/admin/kategori/edit/{{$data->id}}"><button type="button" class="btn btn-sm btn-primary btn-rounded btn-fw">Edit</button></a>
                            <a href="/admin/kategori/hapus/{{$data->id}}"><button type="button" class="btn btn-sm btn-danger btn-rounded btn-fw">Hapus</button></a>
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