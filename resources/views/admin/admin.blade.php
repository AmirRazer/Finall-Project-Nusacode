@extends('admin.layout')

@section('konten')
<div class="content-wrapper">
          <div class="row">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Manajemen Admin</h4>
                  <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p>
                  <div>
                  <a href="/admin/admin/tambah"><button type="button" class="btn btn-primary">Tambah Admin</button></a>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nama
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Role
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
                          {{$data->name}}
                          </td>
                          <td>
                          {{$data->email}}
                          </td>
                          <td>
                          {{$data->role}}
                          </td>
                          <td>
                            <a href="/admin/admin/edit/{{$data->id}}"><button type="button" class="btn btn-sm btn-primary btn-rounded btn-fw">Edit</button></a>
                            <a href="/admin/admin/hapus/{{$data->id}}"><button type="button" class="btn btn-sm btn-danger btn-rounded btn-fw">Hapus</button></a>
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