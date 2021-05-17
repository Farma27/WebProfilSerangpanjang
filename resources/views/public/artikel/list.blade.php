@extends('public.layout.app', ['title' => 'Artikel Terbaru'])

@section('meta')
  <meta name="description" content="Artikel Terbaru" />
  <meta name="keywords" content="Diskominfo Subang" />
  <meta property="og:title" content="Artikel Terbaru"/>
  <meta property="og:type" content="Artikel"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/09.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Artikel SerangPanjang</h1>
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
              @if(count($post)>0)
              @foreach ($post as $article)
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <div class="blog-item">
                    <div class="blog__img">
                      <a href="{{route('public.article.detail',['slug'=>$article->slug])}}">
                        <img height="180px" width="180px"  src="{{($article->img) ? asset('/storage/article/images/'.$article->img) : asset('backend/img/default.png')}}" alt="{{$article->title}}">
                      </a>
                    </div><!-- /.entry-img -->
                    <div class="blog__content">
                      <div class="blog__meta">
                        <div class="blog__meta-cat">
                          <a href="#">{{$article->category->name}}</a>
                        </div><!-- /.blog-meta-cat -->
                        <span class="blog__meta-date">{{\Carbon\Carbon::parse($article->created_at)->translatedFormat('d F Y')}}</span>
                      </div><!-- /.blog-meta -->
                      <h4 class="blog__title"><a href="{{route('public.article.detail',['slug'=>$article->slug])}}">{{$article->title}}</a></h4>
                      <p class="blog__desc">{{$article->short_description}}</p>
                      <a href="{{route('public.article.detail',['slug'=>$article->slug])}}" class="btn btn__secondary btn__link">Selengkapnya</a>
                    </div><!-- /.entry-content -->
                  </div><!-- /.blog-item -->
                </div><!-- /.col-lg-4 -->
              @endforeach
              @else
                <span style="text-align:center;font-weight:bold;"><h4>- Belum ada data -</h4></span>
              @endif
            </div><!-- /.row -->
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                <!-- For Custom pagination User -->
                <div>{{ $post->links('public.layout.pagination') }}</div>
              </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar sidebar-wide">
			        <div class="widget widget-posts">
                <h5 class="widget__title">Agenda Terbaru</h5>
                <div class="widget__content">
                  <!-- post item -->
                  @if(count($agenda) > 0)
                    @foreach ($agenda as $list)
                      <div class="widget-post-item">
                        <div class="widget__post-img">
                          <a href="#"><img src="{{($list->img)? asset('/storage/agenda/images/'.$list->img) : asset('backend/img/default.png')}}"></a>
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
