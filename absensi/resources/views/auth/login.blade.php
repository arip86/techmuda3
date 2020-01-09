
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Attendance</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/slicknav.css')}}">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body>

    <div class="slider_area">
        <div class="slider_active owl-carousel">

            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-9 col-md-9">
                            <div class="slider_text text-center">
                                <h3 align="center">Masuk Atau Daftar Baru</h3>

                            </div>
                        </div>

                        <div class="container">

                            <!-- Outer Row -->
                            <div class="row justify-content-center">

                              <div class="col-xl-10 col-lg-12 col-md-auto">

                                <div class="card o-hidden border-0 shadow-lg my-5">
                                  <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                      <div class="col-lg-12 "></div>
                                      <div class="col-lg-12">
                                        <div class="p-5">
                                          <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Selamat Datang </h1>
                                        </div>
                                        <form class="user" method="POST" action="/postlogin">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                              <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                          </div>
                                          <div class="form-group">
                                              <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                          </div>
                                          <div class="form-group">
                                              <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-warning btn-user btn-block">Login</button>

                                        <hr>
                                        <a href="index.html" class="btn btn-google btn-user btn-block">
                                          <i class="fab fa-google fa-fw"></i> Login with Google
                                      </a>
                                      <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                          <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                      </a>
                                  </form>
                                  <hr>
                                  <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
</div>
</div>
</div>

</div>

</div>


<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
</body>
<footer class="footer">
        <div class="query_area">
            <div class="container">
                <div class="bottom_border">
                        <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="query_text">
                                        <h3>Mempunyai Masalah Dengan Kedisiplinan Karyawan <br>
                                                Hubungi <a href="#">Email</a></h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="query_number">
                                        <h3>+62 8382 6020 329<br/>
                                        +62 8224 6800 286</h3>
                                        <p><a href="#">suwartanti@gmail.com
                                            <br/>
                                        rullyafirda@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Alamat
                            </h3>
                            <ul>
                                <li><p>Jl. Raya Lenteng Agung No.20, RW.1, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12640 </p></li>
                                <li><a href="#">+62 8382 6020 329<br/>+62 8224 6800 286</a></li>
                                <li><a href="#">suwartanti@gmail.com
                                            <br/>
                                rullyafirda@gmail.com</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Deskripsi
                            </h3>
                            <ul>
                                <li><a href="#">Data Karyawan</a></li>
                                <li><a href="#">Data Kehadiran</a></li>
                                <li><a href="#">Jadwal, Jam Kerja</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Tentang
                            </h3>
                            <ul>
                                <li><a href="#">Tentang</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Kontak</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Techmuda3 | Absensi by <a href="https://colorlib.com" target="_blank">Rullya Firda & Suwartanti</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>