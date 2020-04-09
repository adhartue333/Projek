<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{asset('public/assets/images/logo-icon2.jpeg')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Pelayanan Kesehatan</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-images" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">Admin</h6>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="{{route('beranda')}}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Beranda</span>
        </a>
      </li>
      <li>
        <a href="{{route('layanan')}}" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Layanan Kesehatan</span>
        </a>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i>
          <span>Data Statistik</span>
        </a>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Daftar Antrian Pasien</span>
        </a>
       </li>
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Kelola Peta</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Kelola Peta Rumah Sakit</a></li>
          <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Kelola Peta Puskesmas</a></li>
          <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Kelola Peta Klinik</a></li>
          <li><a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> Kelola Peta Apotek</a></li>
        </ul>
       </li>
     
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-folder-image"></i> <span>Daftar Jadwal Dokter</span>
        </a>
       </li>
   </div>
  