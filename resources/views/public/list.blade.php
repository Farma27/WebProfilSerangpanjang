@extends('public.layout.app', ['title' => 'List Page'])

@section('meta')

@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Artikel</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

    <!-- === Postingan === -->
    <section id="blogGridRightSidebar" class="blog blog-grid pb-60">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="row">
              <!-- Blog Item -->
              @foreach ($post as $article)
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="blog-item">
                    <div class="blog__img">
                      <a href="#">
                        <img height="180px" width="180px"  src="{{asset('/storage/article/images/'.$article->img)}}" alt="{{$article->title}}">
                      </a>
                    </div><!-- /.entry-img -->
                    <div class="blog__content">
                      <div class="blog__meta">
                        <div class="blog__meta-cat">
                          <a href="#">{{$article->category->name}}</a>
                        </div><!-- /.blog-meta-cat -->
                        <span class="blog__meta-date">{{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')}}</span>
                      </div><!-- /.blog-meta -->
                      <h4 class="blog__title"><a href="#">{{$article->title}}</a></h4>
                      <p class="blog__desc">{{$article->short_description}}</p>
                      <a href="#" class="btn btn__secondary btn__link">Selengkapnya</a>
                    </div><!-- /.entry-content -->
                  </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
              @endforeach
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <nav class="pagination-area">
                  <ul class="pagination justify-content-center mt-30 mb-30">
                    <li><a class="current" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                  </ul>
                </nav><!-- .pagination-area -->
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-wide">
			        <div class="widget widget-posts">
                <h5 class="widget__title">Artikel Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @foreach ($articles as $list)
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
                </div><!-- /.widget-content -->
              </div><!-- /.widget-posts -->
              <div class="widget widget-categories">
                <h5 class="widget__title">categories</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    @foreach($category as $list)
                    <li><a href="#"><strong>{{$list->name}}</strong></a></li>
                    @endforeach
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-categories -->
              <div class="widget widget-tags">
                <h5 class="widget__title">Tags</h5>
                <div class="widget-content">
                  <ul class="list-unstyled">
                    @foreach($tags as $list)
                    <li><a href="#">{{$list->name}}</a></li>
                    @endforeach
                  </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-Tags -->
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
