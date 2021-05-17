@extends('public.layout.app', ['title' => 'Data Pegawai'])

@section('meta')
  <meta name="description" content="Data Pegawai" />
  <meta name="keywords" content="Data Pegawai" />
  <meta property="og:title" content="Data Pegawai"/>
  <meta property="og:type" content="Data Pegawai"/>
  <meta property="og:image" content="{{asset('fontend/images/grid/1.jpg')}}"/>
@endsection

@section('content')
  <!-- === Page Title === -->
  <section id="page-title" class="page-title page-title-layout1 bg-overlay bg-overlay-3 text-center">
    <div class="bg-img"><img src="{{asset('frontend/images/page-titles/04.jpg')}}" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <h1 class="pagetitle__heading">Data Pegawai</h1>
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <!-- ===== Bidang Section ===== -->
    <section id="fancyboxLayout1" class="fancybox-layout1 text-center pt-100">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading heading-3 mb-60">
              <h2 class="heading__title">Best Business Solutions </h2>
              <p class="heading__desc">We are York, our strategists will help you set an objective and choose your
                tools, developing a plan that is custom-built for your business. </p>
              <div class="divider__line"></div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row mb-80 mb-30-xs mb-30-sm">
          <!-- fancybox item #1 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-desktop"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Development</h4>
                <p class="fancybox__desc">The development of your next business plan will be executed by a brilliant
                  team who will indicate your grand success.</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #2 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-layers"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Web Design</h4>
                <p class="fancybox__desc">What separates York agency from all other web design agencies is the ability
                  to offer the most User Friendly Experience.</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #3 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-strategy"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Brand Identity</h4>
                <p class="fancybox__desc">Your logo is the very heart of identity, let our designers deliver the perfect
                  dreamy design for your new business identity.</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- fancybox item #4 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-video"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Photography</h4>
                <p class="fancybox__desc">Photography is the core of everything we do, photography equipment, camera and
                  reviews, photography articles.</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #5 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-layers"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Graphic Design</h4>
                <p class="fancybox__desc">What separates York agency from all other web design agencies is the ability
                  to offer the most User Friendly Experience.</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
          <!-- fancybox item #6 -->
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox__icon">
                <i class="icon-mobile"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox__content">
                <h4 class="fancybox__title">Mobile Apps</h4>
                <p class="fancybox__desc">Increase social reach and productivity with our Awesome App Directory, with a
                  big collection of famous applications..</p>
                <div class="dotted__line"><span></span></div>
              </div><!-- /.fancybox-content -->
            </div><!-- /.fancybox-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /. fancybox layout 1 -->
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
