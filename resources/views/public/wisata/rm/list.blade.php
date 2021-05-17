@extends('public.layout.app', ['title' => 'Rumah Makan'])
@section('meta')
  <meta name="description" content="Rumah Makan" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Rumah Makan"/>
  <meta property="og:type" content="Rumah Makan"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection
@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Rumah Makan</h1>
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
                  <img src="{{asset('assets/img/rm_1.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Saung Liwet Sate & Bakakak Serangpanjang</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Cijengkol, Serangpanjang, Kabupaten Subang, Jawa Barat 41282<br>
                    Waktu Buka : Pukul 08.00 sampai 00.00<br>
                    Kontak : +6281380006269
                  </p>
                  <a href="https://goo.gl/maps/GnV9raoRudBNQHxd8" target="_blank">Lihat di Google Maps</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/rm_2.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Rumah Makan HANJUANG</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Cijengkol, Serangpanjang, Kabupaten Subang, Jawa Barat 41282 <br>
                    Waktu Buka : 08.00 ~ 21.00
                  </p>
                  <a href="https://goo.gl/maps/ZabZKuFzXABRzYjv5" target="_blank">Lihat di Google Maps</a>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/rm_3.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Warung Sate Cijalu</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Ponggang, Kec.Serangpanjang, Kabupaten Subang, Jawa Barat 41282 <br>
                    Waktu Buka : 08.00 ~ 20.00 <br>
                    Kontak : +6282260809548
                  </p>
                  <a href="https://goo.gl/maps/MsQRMmLTpFLbpq1D7" target="_blank">Lihat di Google Maps</a>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/rm_4.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">RM Haur Koneng</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Cijengkol, Kec.Serangpanjang, Kabupaten Subang, Jawa Barat 41282 <br>
                    Waktu Buka : 08.00 ~ 20.00 <br>
                  </p>
                  <a href="https://goo.gl/maps/cGo22GfMX1akiywXA" target="_blank">Lihat di Google Maps</a>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/rm_5.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Sate Ciawitali</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Cijengkol, Kec.Serangpanjang, Kabupaten Subang, Jawa Barat 41282 <br>
                    Waktu Buka : 08.00 ~ 19.00 <br>
                    Kontak : +6282218701992
                  </p>
                  <a href="https://goo.gl/maps/TapScH8qeJQp1bD88" target="_blank">Lihat di Google Maps</a>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/rm_5.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Sate Cijengkol Pak H.Maman</h5>
                  </div>
                  <p class="mb-1">
                    Alamat : Cijengkol, Kec.Serangpanjang, Kabupaten Subang, Jawa Barat 41282
                  </p>
                  <a href="https://goo.gl/maps/tyQZVzYyrMRVHcJH9" target="_blank">Lihat di Google Maps</a>
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
