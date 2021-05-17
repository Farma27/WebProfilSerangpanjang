@extends('public.layout.app', ['title' => 'Objek Wisata'])
@section('meta')
  <meta name="description" content="Objek Wisata" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Objek Wisata"/>
  <meta property="og:type" content="Wisata"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection
@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Objek Wisata</h1>
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
                  <img src="{{asset('assets/img/curug_cijalu.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Curug Cijalu</h5>
                  </div>
                  <p class="mb-1">
                    Objek wisata air terjun ini selalu ramai dikunjungi wisatawan, terutama akhir pekan dan liburan panjang. Curug Cijalu seolah muncul membelah Gunung Sunda dengan ketinggian air terjunnya yang mencapai 70 meter.
                  </p>
                  <a href="https://goo.gl/maps/DFJHD1NYuhESeHcw5" target="_blank">Lihat Peta</a>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/curug_mugiri.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Curug Mugiri</h5>
                  </div>
                  <p class="mb-1">
                    Curug Mugiri merupakan objek wisata alam baru yang berada di kampung Arjasari desa Cikujang kecamatan Serangpanjang kabupaten Subang
                  </p>
                  <a href="https://goo.gl/maps/82ZjES7VLSdbgxuF9" target="_blank">Lihat Peta</a>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/curug_ponggang.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Curug Ponggang</h5>
                  </div>
                  <p class="mb-1">
                    Curug Ponggang ini berada di perbatasan dua desa, yakni Sukajaya, kecamatan Kiara Pedes, kabupaten Purwakarta dan desa Ponggang, kecamatan Serangpanjang, kabupaten Subang. Curug ini mengalirkan air ke sungai Cilamaya. Aliran sungai Cilamaya ini memang batas alami kabupaten Purwakarta dan Subang.
                  </p>
                  <a href="https://goo.gl/maps/ij8ixjmrHCiUiiE99" target="_blank">Lihat Peta</a>
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
