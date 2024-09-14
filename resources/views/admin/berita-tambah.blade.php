@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Berita</h4>
                  <p class="card-description">
                    Tambah Berita
                  </p>
                  <form class="forms-sample" method="post" action="/admin/admin/simpan">
                    @csrf
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Konten</label>
                      <input type="email" name="konten" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="gambar" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" class="form-control">
                        <option value="superadmin">Super Admin</option>
                        <option value="editor">Editor</option>
                      </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection