@extends('public.layout.app', ['title' => 'Beranda - Web OPD'])

@section('meta')

@endsection

@section('content')

  <!-- === Slider === -->
      <section id="slider3" class="slider slider-3 text-center">
        <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1"
          data-autoplay="false" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="3000">
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img">
              <img src="{{asset('assets/img/welcome.png')}}" alt="slide img">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                  <div class="slide__content">
                    <!-- <div class="heading__shape heading__shape-white"></div> -->
                    <h2 class="slide__title color-white">Selamat Datang </h2>
                    <div class="heading__desc">
                    <p>
                      <strong>PORTAL INFORMASI PEMERINTAHAN KECAMATAN SERANGPANJANG</strong>
                    </p>
                    </div>
                    <hr class="style mb-5"> 
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-10 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
          <div class="slide-item align-v-h bg-overlay bg-overlay-2">
            <div class="bg-img">
              <img src="{{asset('assets/img/kantor_bg.png')}}" alt="slide img">
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                  <div class="slide__content">
                    <!-- <div class="heading__shape heading__shape-white"></div> -->
                    <h2 class="slide__title color-white">Kecamatan Serangpanjang</h2>
                    <hr class="style mb-5"> 
                    <a href="#" class="btn btn__rounded btn__white">Kontak Kami</a>
                  </div><!-- /.slide-content -->
                </div><!-- /.col-lg-10 -->
              </div><!-- /.row -->
            </div><!-- /.container -->
          </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
      </section><!-- /.slider -->

      <!-- === Features === -->
      <section id="features" class="features">
        <div class="container">
          <div class="row justify-content-center">
            <!-- <div class="mx-auto"> -->
              <!-- feature item #1 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                  <h4 class="feature__title ">Layanan Masyarakat</h4>
                  <div class="feature__content">
                    <p class="feature__desc">Kami siap melayani anda.</p>
                    <a href="#" class="btn btn__link">Selengkapnya</a>
                  </div><!-- /.feature-content -->
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-4 -->
              <!-- feature item #3 -->
              <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="feature-item">
                  <h4 class="feature__title">Kritik/Saran/Keluhan Anda</h4>
                  <div class="feature__content">
                    <p class="feature__desc">Silahkan Kirim Kritik/Saran/Keluhan Anda dengan menekan di bawah ini.</p>
                    <a href="{{route('public.contact')}}" class="btn btn__link">Selengkapnya</a>
                  </div><!-- /.feature-content -->
                </div><!-- /.feature-item -->
              </div><!-- /.col-lg-4 -->
            <!-- </div> -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Features -->
      
      <!-- === Blog === -->
      <section id="content-desktop" class="wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container py-5">
          <div class="row">
            
          </div>
        </div>
      </section>

      <!-- === Feed === -->
      <section>
      <div>
        <div>

        </div>
      </div>
      </section>
@endsection

@section('top-resource')
@endsection
@section('bottom-resource')
@endsection
