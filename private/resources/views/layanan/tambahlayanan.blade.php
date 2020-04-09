@extends('template')

@section('content')
<!--End topbar header-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
        <form action="{{ route('layanan.store') }}" method="POST" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="card">
            <div class="card-header"></i> Tambah Layanan Kesehatan</div>
            <div class="card-body">
              <div class="table-responsive">
{{-- <div class="form-group">
    <label for="Id">Id</label>
    <input name="id" type="text" class="form-control" id="Id" aria-describedby="id">
  </div> --}}
  <div class="form-group">
    <label for="Nama Layanan">Nama Layanan Kesehatan</label>
    <textarea name="nama_layanan" input type="text" class="form-control"  id="namalayanan"></textarea>
  </div>
  <div class="form-group">
   <label for="alamat">Alamat</label>
   <textarea name="alamat" input type="text" class="form-control"  id="alamat"></textarea>
   </div>
   <div class="form-group">
    <label for="Kecamatan">Kecamatan</label>
    <textarea name="kecamatan" input type="text" class="form-control" id="kecamatan"></textarea>
  </div>
  <div class="form-group">
    <label for="FileGambar">Gambar</label>
    <input name="gambar" type="file" class="form-control-file" id="FileGambar">
  </div>
  <div class="form-group">
    <label for="Nama">Nama Dokter</label>
    <input name="nama_dokter" type="text" class="form-control" id="nama" aria-describedby="nama">
  </div>
  <div class="form-group">
    <label for="Spesialis">Spesialis</label>
    <input name="spesialis" type="text" class="form-control" id="spesialis" aria-describedby="spesialis">
  </div>
<div class="form-group">
    <label for="status_pelayanan">Status Pelayanan</label>
    <input type="text" name="status_pelayanan" class="form-control" id="statuspelayanan">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light waves-effect " data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-light waves-effect ">Save</button>
        </form>
       </div>
       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      </div>
    </div>
  </div>
 </div>
 </div>
@endsection