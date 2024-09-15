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
                  <form class="forms-sample" method="post" enctype="multipart/form-data" action="/admin/berita/simpan">
                    @csrf
                    <div class="form-group">
                      <label>Judul</label>
                      <input type="text" name="judul" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Konten</label>
                      <textarea name="konten" id="content"></textarea>
                    </div>
                    <div class="form-group">
                      <label>Gambar</label>
                      <input type="file" name="gambar" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                      <label>Kategori</label>
                      <select name="kategori" class="form-control">
                        @foreach($kategori_list as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                        @endforeach
                      </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor.create( document.querySelector( '#content' ) )
                .catch( error => {
                    console.error( error );
                } );

                
</script>
@endsection


