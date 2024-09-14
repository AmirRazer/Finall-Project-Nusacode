@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Admin</h4>
                  <p class="card-description">
                    Edit Admin
                  </p>
                  <form class="forms-sample" method="post" action="/admin/admin/update/{{$data->id}}">
                    @csrf
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" value="{{$data->name}}" name="nama" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" value="{{$data->email}}" name="email" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Role</label>
                      <select name="role" class="form-control">
                        <option value="superadmin" @if($data->role=='superadmin') selected @endif>Super Admin</option>
                        <option value="editor" @if($data->role=='editor') selected @endif>Editor</option>
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