@extends('template')

@section('content')
<!--End topbar header-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <a href="{{ url('/layanan/tambah')}}" class= "btn btn-light waves-effect mb-1">Tambah Layanan</a>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Data Layanan Kesehatan</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-hover">
              <tr>
                <th>Id</th>
                <th>Nama Layanan Kesehatan</th>
                <th>Alamat</th>
                <th>Kecamatan</th>
                <th>Gambar</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Status Pelayanan</th>
                </tr>
                @foreach($data_layanan as $layanan)
                <tr>
                    <td>{{$layanan->id}}</td>
                    <td>{{$layanan->nama_layanan}}</td>
                    <td>{{$layanan->alamat}}</td>
                    <td>{{$layanan->kecamatan}}</td>
                    <td><img src="{{$layanan->gambar}}" ></td>
                    <td>{{$layanan->nama_dokter}}</td>
                    <td>{{$layanan->spesialis}}</td>
                    <td>{{$layanan->status_pelayanan}}</td>
                    <td>
                                <a href="#" class="btn btn-warning mb-3"><i class="ri-edit-fill pr-0"></i></a>
                                <form action="#" method="POST">
                                 {{ csrf_field() }} {{ method_field('DELETE') }}
                                  <button class="btn btn-danger mb-3"><i class="ri-delete-bin-6-line"></i></button>
                                 </form>
                   </td>
                </tr>
                @endforeach
            </table>
            </div>
            </div>
    </div>
  </div>
 </div>
</div>
</div><!-- End Row-->
      @endsection