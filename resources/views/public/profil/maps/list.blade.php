@extends('public.layout.app', ['title' => 'Peta'])

@section('meta')
  <meta name="description" content="Peta" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Peta"/>
  <meta property="og:type" content="Peta"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Peta</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="">
                    <h1  class="heading__title">Peta Wilayah Kecamatan Serangpanjang</h1>
                        <p>
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126814.05332920709!2d107.54581596829941!3d-6.654462559701624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69191c0bc706c5%3A0xa98656ae2e127eeb!2sSerangpanjang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1618981027535!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                            <iframe frameborder="0" height="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126814.05332920709!2d107.54581596829941!3d-6.654462559701624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69191c0bc706c5%3A0xa98656ae2e127eeb!2sSerangpanjang%2C%20Kabupaten%20Subang%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1618981027535!5m2!1sid!2sid" style="border:0" width="100%"></iframe>
                        </p>
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
