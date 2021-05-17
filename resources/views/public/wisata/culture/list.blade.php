@extends('public.layout.app', ['title' => 'Budaya dan Kesenian'])
@section('meta')
  <meta name="description" content="Budaya dan Kesenian" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Budaya dan Kesenian"/>
  <meta property="og:type" content="Budaya"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection
@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Budaya dan Kesenian</h1>
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
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/genjring_bonyok.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Genjring Bonyok</h5>
                  </div>
                </div>
              </li>
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/sisingaan.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Sisingaan</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/doger_subang.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Doger Subang</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/ruwatan_bumi.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Ruwatan Bumi</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/gembyung.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Gembyung</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/mapag_dewi_sri.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Mapag Dewi Sri</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/nadran.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Nadran</h5>
                  </div>
                </div>
              </li>            
              <li class="list-group-item list-group-item-action d-flex justify-content align-items-start">
                <div class="list-content col-md-4 col-sm-4">
                  <img src="{{asset('assets/img/toleat.png')}}" class="img-fluid">
                </div>
                <div class="ms-2 me-auto">
                  <div class="d-flex w-100 justify-content">
                    <h5 class="mb-1">Toleat</h5>
                  </div>
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
