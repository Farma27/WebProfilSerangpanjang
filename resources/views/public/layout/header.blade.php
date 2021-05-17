<header id="header3" class="header header-3 header-full">
  <div class="header__topbar header__topbar-dark color-white">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-9 col-lg-9">
          <ul class="contact__list list-unstyled">
            <li><i>{{\Carbon\Carbon::now()->translatedFormat('l, d F Y')}}</i></li>            
          </ul>
        </div><!-- /.col-lg-9 -->
        <div class="col-sm-4 col-md-3 col-lg-3">
          <div class="social__icons justify-content-end">
            <span>Follow Us:</span>
            <a href="https://www.facebook.com/serangpanjangmidang/ " target="_blank"><i class="fa fa-facebook"></i></a>
            <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
            <a href="https://www.instagram.com/kecamatanserangpanjang/" target="_blank"><i class="fa fa-instagram"></i></a>
            <!-- <a href="#"><i class="fa fa-feed"></i></a> -->
          </div><!-- /.social-icons -->
        </div><!-- /.col-lg-3 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </div><!-- /.header-top -->

  <!-- === Menu Nav === -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{asset('assets/img/logo/default.png')}}" width="70px" height="75px">
        <!-- <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo"> -->
        <!-- @if($logo) -->
        <!-- <img src="{{asset('storage/website/'.$logo)}}" width="200px" height="70px" class="logo-dark">
        @else -->
        <!-- <img src="{{asset('storage/website/default.png')}}"> -->
        <!-- @endif -->
      </a>
      <button class="navbar-toggler" type="button">
        <span class="menu-lines"><span></span></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavigation">
        <ul class="navbar-nav mr-30 ml-30 mr-auto">
          <li class="nav__item">
            <a href="{{route('public.homepage')}}" class="nav__item-link {{ Request::routeIs('public.homepage') ? 'active' : '' }}">Beranda</a>
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link {{ Request::routeIs('public.profil')||Request::routeIs('public.field')||Request::routeIs('public.staff') ? 'active' : '' }}">Profil</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
                <a href="{{route('public.history.list')}}" class="nav__item-link {{ Request::routeIs('public.history.list')||Request::routeIs('public.history.list') ? 'active' : '' }}">Sejarah</a></li>
              <!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{route('public.maps.list')}}" class="nav__item-link {{ Request::routeIs('public.maps.list')||Request::routeIs('public.maps.list') ? 'active' : '' }}">Peta</a></li>
              <!-- /.nav-item -->
              <li class="nav__item">
              <a href="{{route('public.visi.list')}}" class="nav__item-link {{ Request::routeIs('public.visi.list')||Request::routeIs('public.visi.list') ? 'active' : '' }}">Visi Misi</a></li>
              <!-- /.nav-item -->
              <li class="nav__item">
              <a href="{{route('public.topography.list')}}" class="nav__item-link {{ Request::routeIs('public.topography.list')||Request::routeIs('public.topography.list') ? 'active' : '' }}">Topografi</a></li>
              <!-- /.nav-item -->
              <li class="nav__item">
                <a href="https://drive.google.com/file/d/1A4ZigaNqZlUDqaKGd5NzstmcKNmqfdka/view" class="nav__item-link" target="_blank">Struktur Organisasi</a></li>
              <!-- /.nav-item -->
              <li class="nav__item">
                <a href="{{route('public.field')}}" class="nav__item-link {{ Request::routeIs('public.field')||Request::routeIs('public.staff') ? 'active' : '' }}">Data Pegawai</a></li>
              <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Pemerintahan</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
              <a href="{{route('public.desa.list')}}" class="nav__item-link {{ Request::routeIs('public.desa.list')||Request::routeIs('public.desa.list') ? 'active' : '' }}">Profil Desa</a></li>
              <li class="nav__item">
              <a href="{{route('public.uptd.list')}}" class="nav__item-link {{ Request::routeIs('public.uptd.list')||Request::routeIs('public.uptd.list') ? 'active' : '' }}">UPTD</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Wisata</a>
            <ul class="dropdown-menu">
              <li class="nav__item">
                <a href="{{route('public.tour.list')}}" class="nav__item-link {{ Request::routeIs('public.tour.list')||Request::routeIs('public.tour.list') ? 'active' : '' }}">Objek Wisata</a></li>
              <li class="nav__item">
                <a href="{{route('public.culture.list')}}" class="nav__item-link {{ Request::routeIs('public.culture.list')||Request::routeIs('public.culture.list') ? 'active' : '' }}">Budaya dan Kesenian</a></li>
              <li class="nav__item">
                <a href="{{route('public.sport.list')}}" class="nav__item-link {{ Request::routeIs('public.sport.list')||Request::routeIs('public.sport.list') ? 'active' : '' }}">Sarana Olahraga</a></li>
              <li class="nav__item">
                <a href="{{route('public.hotel.list')}}" class="nav__item-link {{ Request::routeIs('public.hotel.list')||Request::routeIs('public.hotel.list') ? 'active' : '' }}">Hotel</a></li>
              <li class="nav__item">
                <a href="{{route('public.rm.list')}}" class="nav__item-link {{ Request::routeIs('public.rm.list')||Request::routeIs('public.rm.list') ? 'active' : '' }}">Rumah Makan</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link {{ Request::routeIs('public.agenda.*')||Request::routeIs('public.announcement.*')||Request::routeIs('public.article.*') ? 'active' : '' }}">Konten Publikasi</a>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{route('public.agenda.list')}}" class="nav__item-link {{ Request::routeIs('public.agenda.*') ? 'active' : '' }}">Agenda</a></li>
              <li class="nav__item"><a href="{{route('public.announcement.list')}}" class="nav__item-link {{ Request::routeIs('public.announcement.*') ? 'active' : '' }}">Pengumuman</a></li>
              <li class="nav__item"><a href="{{route('public.article.list')}}" class="nav__item-link {{ Request::routeIs('public.article.*') ? 'active' : '' }}">Artikel</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item with-dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Galeri</a>
            <ul class="dropdown-menu">
              <li class="nav__item"><a href="{{route('public.album.list')}}" class="nav__item-link {{ Request::routeIs('public.album.*') ? 'active' : '' }}">Album Foto</a></li>
              <li class="nav__item"><a href="{{route('public.video.list')}}" class="nav__item-link {{ Request::routeIs('public.video.*') ? 'active' : '' }}">Video</a></li>
              <li class="nav__item"><a href="{{route('public.infographic.list')}}" class="nav__item-link {{ Request::routeIs('public.infographic.*') ? 'active' : '' }}">Info Grafis</a></li>
            </ul><!-- /.dropdown-menu -->
          </li><!-- /.nav-item -->
          <li class="nav__item">
            <a href="{{route('public.contact')}}" class="nav__item-link {{ Request::routeIs('public.contact') ? 'active' : '' }}">Kontak Kami</a>
          </li><!-- /.nav-item -->
        </ul><!-- /.navbar-nav -->
      </div><!-- /.navbar-collapse -->
      <div class="navbar-modules">
        <div class="modules__wrapper d-flex align-items-center">
          <a href="#" class="module__btn module__btn-search"><i class="york-search"></i></a>
          <a href="#" class="module__btn module__btn-sidenav"><i class="york-menu"></i></a>
        </div><!-- /.modules-wrapper -->
      </div><!-- /.navbar-modules -->
    </div><!-- /.container -->
  </nav><!-- /.navabr -->
</header><!-- /.Header 3 -->
