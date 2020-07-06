<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
      <title>E-Grocery | Groci</title>
      <meta name="csrf-token" content="{{csrf_token()}}">
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{asset('asset/img/favicon.png')}}">
      <!-- Bootstrap core CSS -->
      <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="{{asset('asset/vendor/icons/css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css" />
      <!-- Select2 CSS -->
      <link href="{{asset('asset/vendor/select2/css/select2-bootstrap.css')}}" />
      <link href="{{asset('asset/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{asset('asset/css/osahan.css')}}" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="{{asset('asset/vendor/owl-carousel/owl.carousel.css')}}">
      <link rel="stylesheet" href="{{asset('asset/vendor/owl-carousel/owl.theme.css')}}">
   </head>
   <body>
      @if (!Auth::check())
      <div class="modal fade login-modal-main" id="bd-example-modal">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-body">
                  <div class="login-modal">
                     <div class="row">
                        <div class="col-lg-6 pad-right-0">
                           <div class="login-modal-left">
                           </div>
                        </div>
                        <div class="col-lg-6 pad-left-0">
                           <button type="button" class="close close-top-right" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                           <span class="sr-only">Close</span>
                           </button>
                              <div class="login-modal-right">
                                 <!-- Tab panes -->
                                 <div class="tab-content">
                                    <div class="tab-pane active" id="login" role="tabpanel">
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                       <h5 class="heading-design-h5">Masuk ke Akun Anda</h5>
                                       <fieldset class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Kata Sandi</label>
                                          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="********" id="password" name="password" required autocomplete="current-password">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <button type="submit" class="btn btn-lg btn-secondary btn-block">Masuk</button>
                                       </fieldset>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                          <label class="custom-control-label" for="remember">Ingat Saya</label>
                                       </div>
                                    </form>
                                    </div>
                                    <div class="tab-pane" id="register" role="tabpanel">
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                       <h5 class="heading-design-h5">Daftar Sekarang!</h5>
                                       <fieldset class="form-group">
                                          <label>Nama Lengkap</label>
                                          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Email</label>
                                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Kata Sandi</label>
                                          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="********" name="password" required autocomplete="new-password">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <label>Konfirmasi Kata Sandi </label>
                                          <input type="password" class="form-control" placeholder="********" name="password_confirmation" required autocomplete="new-password">
                                       </fieldset>
                                       <fieldset class="form-group">
                                          <button type="submit" class="btn btn-lg btn-secondary btn-block">Buat Akun</button>
                                       </fieldset>
                                       <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="customCheck2">
                                          <label class="custom-control-label" for="customCheck2">Saya Setuju dengan <a href="#">Syarat dan Ketentuan</a> Berikut</label>
                                       </div>
                                    </form>
                                    </div>
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="text-center login-footer-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                       <li class="nav-item">
                                          <a class="nav-link active" data-toggle="tab" href="#login" role="tab"><i class="mdi mdi-lock"></i> MASUK</a>
                                       </li>
                                       <li class="nav-item">
                                          <a class="nav-link" data-toggle="tab" href="#register" role="tab"><i class="mdi mdi-pencil"></i> DAFTAR</a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endif
       <nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
         <div class="container-fluid">
            <a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('asset/img/logo.png')}}" alt="logo"> </a>
            <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarNavDropdown">
               <div class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto top-categories-search-main">
                  <div class="top-categories-search">
                     <div class="input-group">
                        <input class="form-control" placeholder="Cari Produk atau Resep" aria-label="Cari Produk atau Resep" type="text">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button"><i class="mdi mdi-file-find"></i> Cari</button>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="my-2 my-lg-0">
                  <ul class="list-inline main-nav-right">
                      @if(!Auth::check())
                     <li class="list-inline-item">
                        <a href="#" data-target="#bd-example-modal" data-toggle="modal" class="btn btn-link"><i class="mdi mdi-account-circle"></i> Masuk / Daftar</a>
                     </li>
                     @endif
                     <li class="list-inline-item cart-btn">
                        <a href="#" data-toggle="offcanvas" class="btn btn-link border-none"><i class="mdi mdi-cart"></i> Keranjang <small class="cart-value">1</small></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile mb-0">
         <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
				  <li class="nav-item">
                     <a href="{{url('/')}}" class="nav-link">Beranda</a>
                  </li>
				  <li class="nav-item">
                     <a href="{{url('about')}}" class="nav-link">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('bahan-masakan')}}">Produk</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('resep')}}">Resep</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{url('contact')}}">Kontak</a>
                  </li>
                  @if(Auth::check())
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Akun Saya
                    </a>
                    <div class="dropdown-menu">
                       <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Profil Saya</a>
                       <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Daftar Transaksi</a> 
                       <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Keluar</a> 
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                 </li>
                  @endif
               </ul>
            </div>
         </div>
      </nav>
      <div id="app">
          @yield('content')
      </div>
      <!-- Footer -->
      <section class="section-padding footer bg-white border-top">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3">
                  <h4 class="mb-5 mt-0"><a class="logo" href="{{url('/')}}"><img src="{{asset('asset/img/logo-footer.png')}}" alt="Groci"></a></h4>
                  <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-phone"></i> +61 525 240 310</a></p>
                  <p class="mb-0"><a class="text-dark" href="#"><i class="mdi mdi-cellphone-iphone"></i> 12345 67890, 56847-98562</a></p>
                  <p class="mb-0"><a class="text-success" href="#"><i class="mdi mdi-email"></i> mail@gmail.com</a></p>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">KATEGORI</h6>
                  <ul>
                    <li><a href="#">Makanan Pembuka</a></li>
                    <li><a href="#">Minuman</a></li>
                    <li><a href="#">Sup</a></li>
                    <li><a href="#">Sayuran</a></li>
                    <li><a href="#">Hidangan utama</a></li>
                    <li><a href="#">Makanan penutup</a></li>
                  <ul>
               </div>
               <div class="col-lg-2 col-md-2">
                  <h6 class="mb-4">TENTANG KAMI</h6>
                  <ul>
                  <li><a href="#">Company Information</a></li>
                  <li><a href="#">Careers</a></li>
                  <ul>
               </div>
               <div class="col-lg-3 col-md-3 offset-md-2">
                  <h6 class="mb-4">Unduh Aplikasi</h6>
                  <div class="app">
                     <a href="#"><img src="{{asset('asset/img/google.png')}}" alt=""></a>
                     <a href="#"><img src="{{asset('asset/img/apple.png')}}" alt=""></a>
                  </div>
                  <h6 class="mb-3 mt-4">BERGABUNG DENGAN KAMI</h6>
                  <div class="footer-social">
                     <a class="btn-facebook" href="#"><i class="mdi mdi-facebook"></i></a>
                     <a class="btn-twitter" href="#"><i class="mdi mdi-twitter"></i></a>
                     <a class="btn-instagram" href="#"><i class="mdi mdi-instagram"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Footer -->
      <!-- Copyright -->
      <section class="pt-4 pb-4 footer-bottom">
         <div class="container">
            <div class="row no-gutters">
               <div class="col-lg-6 col-sm-6">
                  <p class="mt-1 mb-0">&copy; Copyright {{date('Y')}} <strong class="text-dark">E-Grocery</strong>. All Rights Reserved<br>
				  <small class="mt-0 mb-0">Made with <i class="mdi mdi-heart text-danger"></i>
                  </small>
				  </p>
               </div>
            </div>
         </div>
      </section>
      <!-- End Copyright -->
      <div class="cart-sidebar">
         <div class="cart-sidebar-header">
            <h5>
               My Cart <span class="text-success">(1 item)</span> <a data-toggle="offcanvas" class="float-right" href="#"><i class="mdi mdi-close"></i>
               </a>
            </h5>
         </div>
         <div class="cart-sidebar-body">
            <div class="cart-list-product">
               <a class="float-right remove-cart" href="#"><i class="mdi mdi-close"></i></a>
               <img class="img-fluid" src="{{asset('asset/img/item/11.jpg')}}" alt="">
               <h5><a href="#">Product Title Here</a></h5>
               <h6><strong><span class="mdi mdi-approval"></span> Tersedia</strong> - 500 gm</h6>
               <p class="offer-price mb-0">Rp 10,000</p>
            </div>
         </div>
         <div class="cart-sidebar-footer">
            <div class="cart-store-details">
               <p>Sub Total <strong class="float-right">Rp 10,000</strong></p>
               <p>Delivery Charges <strong class="float-right text-danger">+ Rp 5,000</strong></p>
            </div>
            <a href="{{url('checkout')}}"><button class="btn btn-secondary btn-lg btn-block text-left" type="button"><span class="float-left"><i class="mdi mdi-cart-outline"></i> Proceed to Checkout </span><span class="float-right"><strong>Rp 15,000</strong> <span class="mdi mdi-chevron-right"></span></span></button></a>
         </div>
      </div>
      <script type="text/javascript">
        window.base_url  = "{{url('/')}}";
        window.base_path = "{{asset('/')}}";
    </script>
      <!-- Bootstrap core JavaScript -->
      <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- select2 Js -->
      <script src="{{asset('asset/vendor/select2/js/select2.min.js')}}"></script>
      <!-- Owl Carousel -->
      <script src="{{asset('asset/vendor/owl-carousel/owl.carousel.js')}}"></script>
      <!-- Custom -->
      <script src="{{asset('asset/js/custom.js')}}"></script>
      <script src="{{asset('js/app.js')}}"></script>
   </body>
</html>

