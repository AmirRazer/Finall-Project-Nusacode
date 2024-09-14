@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Kategori</h4>
                  <p class="card-description">
                    Tambah Kategori
                  </p>
                  <form class="forms-sample" method="post" action="/admin/kategori/update/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                      <label>Nama Kategori</label>
                      <input value="{{$data->nama_kategori}}" type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Update</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection