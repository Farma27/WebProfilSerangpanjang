<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  @yield('meta')
  <link href="{{($favicon) ? asset('/storage/website/'.$favicon) : asset('backend/img/default.png')}}" rel="icon">
  <title>{{$title}}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700%7cSource+Sans+Pro:300,300i,400,400i,600,600i,700">
  <link rel="stylesheet" href="{{asset('frontend/css/libraries.css')}}" />
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" />
  @yield('top-resource')
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=6020c3b32de11300128c2fd3&product=inline-share-buttons' async='async'></script>

</head>

<body>
  <div class="wrapper">
    <!-- === Header === -->
    @include('public.layout.header')

    @yield('content')

    <!-- === Footer === -->
    @include('public.layout.footer')
    <button id="scrollTopBtn"><i class="arrow_up"></i></button>

        <div class="module__search-container">
          <i class="fa fa-times close-search"></i>
          <form class="module__search-form">
            @csrf
            <input type="text" name="cari" class="search__input" placeholder="Cari...">
            <button class="module__search-btn" type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div><!-- /.module-search-container -->
        <div class="module__sidenav-container">
          <div class="sidenav__menu">
            <i class="fa fa-times close-sidenav"></i>
            <div class="sidenav__menu-header mb-40">
              <img src="{{asset('storage/website/default.png')}}" width="auto" height="70px" class="mb-20">
              <p>{{(!empty($getsitus))?$getsitus->description:''}}</p>
            </div><!-- /.sidenav-menu-header -->
            <ul class="contact__list list-unstyled mb-50">
              <li><i class="icon-phone"></i>{{(!empty($getsitus))?$getsitus->phone:'-'}}</li>
              <li><i class="icon-document"></i>{{(!empty($getsitus))?$getsitus->email:'-'}}</li>
              <li><i class="icon-map-pin"></i>{{(!empty($getsitus))?strip_tags($getsitus->address):'-'}}</li>
            </ul><!-- /.contact-list -->
          </div><!-- /.sidenav-menu -->
        </div><!-- /.module-sidenav-container -->

  </div>
  <!-- /.wrapper -->

  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
  <!-- SweetAlert -->
  <script src="{{asset('backend/js/sweetalert.min.js')}}"></script>
  <script>
      //sweetalert for success or error message
      @if(session()->has('success'))
          swal({
              type: "success",
              icon: "success",
              title: "BERHASIL!",
              text: "{{ session('success') }}",
              timer: 2200,
              showConfirmButton: false,
              showCancelButton: false,
              buttons: false,
          });
          @elseif(session()->has('error'))
          swal({
              type: "error",
              icon: "error",
              title: "GAGAL!",
              text: "{{ session('error') }}",
              timer: 4100,
              showConfirmButton: false,
              showCancelButton: false,
              buttons: false,
          });
          @endif
  </script>
  @yield('bottom-resource')

</body>
</html>
