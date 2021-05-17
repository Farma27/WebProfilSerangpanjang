@extends('public.layout.app', ['title' => 'Desa'])

@section('meta')
  <meta name="description" content="Desa" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Desa"/>
  <meta property="og:type" content="Desa"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Desa</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="list-group">
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/cijengkol.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cijengkol</h5>
                  </div>
                  <p class="mb-1">
                    Desa Cijengkol Kecamatan Serangpanjang Kabupaten subang adalah salah satu desa di daerah selatan subang yang memiliki luas wilayah sebesar 854,45 Ha/m2. Luas wilayah ini dibagi menjadi 4 dusun dengan jumlah Kepala Keluarga sebanyak 1667 (sementara). Batas wilayah Desa Cijengkol sendiri di sebelah barat berbatasan dengan Desa Talagasari, lalu di sebelah Timur berbatasan dengan Desa Dayeuh Kolot, di sebelah selatan sendiri berbatasan dengan Desa Cikujang, dan di sebelah Utara berbatasan dengan Desa Cintamekar. Dari 4 Dusun tersebut terbagi menjadi 26 Rt dan 13 Rw.
                  </p>
                  <a href="https://goo.gl/maps/di6on2uiao5RMEkq5" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/cikujang.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cikujang</h5>
                  </div>
                  <p class="mb-1">
                    Desa Cikujang berdiri sejak tahun 1865. Nama desa Cikujang diambil dari sebuah pohon kayu yang bernama Kujang yang terletak dikampung bale kambang. Pohon tersebut pertama ditemukan oleh seorang tokoh di wilayah tersebut bernama Embah Dalem Tirta praja dan kemudian dijadikan nama kampung Cikujang.<br>
                    Seiring perkembangan dengan perkembangan pemerintahan dan perkembangan pendidik nama Cikujang kemudian dijadikan nama Desa.
                  </p>
                  <a href="https://goo.gl/maps/V4Rdj27gAmeopGus5" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="#" class="img-fluid img-thumbnail">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cintamekar</h5>
                  </div>
                  <p class="mb-1">
                    Cintamekar merupakan salah satu desa dengan nama terunik, nama tersebut ternyata merupakan singkatan dari nama ke empat dusun yang berada di cintamekar, CI untuk Cimute, Ta untuk Tangkil, Me untuk Malingping, dan Kar untuk Karapyak. Di Desa Cinta Mekar mengalir sungai yang aliran airnya dimanfaatkan sebagai penggerak pembangkit listrik tenaga mikrohidro. Tenaga listrik yang didapat dijual kepada PLN untuk kemudian didistribusikan ke masyarakat sekitar di Desa Cinta Mekar. Site pembangkit listrik ini kerap kali dikunjungi oleh wisatawan
                  </p>
                  <a href="https://goo.gl/maps/LwiLvTWRowrR78Cr9" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/cipancar.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Cipancar</h5>
                  </div>
                  <p class="mb-1">
                    Desa Cipancar adalah desa yang paling selatan diwilayah Kecamatan Serangpanjang Kabupaten Subang. Adapun nama “Cipancar” identik dengan adanya gunung sunda, di Gunung Sunda terdapat suatu situs. Menurut keterangan masyarakat desa, tempat tersebut di pakai tempat peristirahatan para wali dan sekarang tempat tersebut banyak di kunjungi oleh orang-orang berziarah baik warga desa maupun dari luar Desa Cipancar.
                  </p>
                  <a href="https://goo.gl/maps/DkbhjXZ2x4qQtYgD9" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/ponggang.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Ponggang</h5>
                  </div>
                  <p class="mb-1">
                    Desa Ponggang yang terletak +  1 Km ke arah selatan dari Kecamatan Serang Panjang. Sedangkan untuk menuju Kota Subang, harus menempuh perjalanan antara 30 menit hingga 1 jam. Desa Ponggang Kecamatan Serang Panjang berada di ketinggian 8,62 mdl diatas permukaan laut dengan wilayah ± 141 Hektar. Suhu rata-rata harian di Desa Ponggang adalah 20-30 Celcius.
                  </p>
                  <a href="https://goo.gl/maps/Kv3y3YL12nCfg9xdA" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/talagasari.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Talagasari</h5>
                  </div>
                  <p class="mb-1">
                  Talagasari adalah desa di kecamatan Serangpanjang, Subang, Jawa Barat, Indonesia.
                  </p>
                  <a href="https://goo.gl/maps/dLSJECpL3zZEagv59" target="_blank">Lihat Peta</a>
                </div>
              </li>            
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-wide">
              <div class="widget widget-posts">
                <h5 class="widget__title">Artikel Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($article) > 0)
                    @foreach ($article as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/article/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Agenda Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($agenda) > 0)
                    @foreach ($agenda as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/agenda/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-posts">
                <h5 class="widget__title">Pengumuman Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($announcement) > 0)
                    @foreach ($announcement as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{asset('/storage/announcement/images/'.$list->img)}}"></a>
                        </div><!-- /.widget-post-img -->
                        <div class="widget__post-content">
                          <span class="widget__post-date">{{\Carbon\Carbon::parse($list->created_at)->translatedFormat('d F Y')}}</span>
                          <h6 class="widget__post-title"><a href="#">{{$list->title}}</a></h6>
                        </div><!-- /.widget-post-content -->
                      </div><!-- /.widget-post-item -->
                    @endforeach
                  @else
                    - Belum ada data -
                  @endif
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->

		    </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- /.End Post -->

@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
