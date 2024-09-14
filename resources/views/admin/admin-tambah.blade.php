@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Admin</h4>
                  <p class="card-description">
                    Tambah Admin
                  </p>
                  <form class="forms-sample" method="post" action="/admin/admin/simpan">
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Passowrd</label>
                      <input type="text" name="password" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <select name="role" class="form-control">
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