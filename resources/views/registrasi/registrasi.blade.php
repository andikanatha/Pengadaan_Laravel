<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pengadaan App</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('arsha/assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('arsha/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('arsha/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/bootstrap-icons/bootstrap-icons.')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('arsha/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('arsha/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">PENGADAAN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        @include('home.parsial.menu');

    </div>
</header><!-- End Header -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">

    </section><!-- End Cta Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>REGISTRASI</h2>
            <p>Silahkan daftarkan usaha anda.</p>
        <div class="row">
            @if(Session::has('succes'))
            </div>
            <div class="alert alert-success" role="alert">
                {{Session::get('succes')}}
                Data Berhasil Ditambahkan
            </div>
            @endif
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('error')}}
            </div>
            @endif
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <div class="alert alert-danger" role="alert">
                        Data anda gagal ditambahkan, Coba Ulang !
                    </div>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            </div>
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="/simpanRegistrasi" method="post" role="form" class="php-email-form">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Nama Usaha</label>
                            <input type="text" name="nama_usaha" class="form-control" id="nama_usaha" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Email</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">No NPWP</label>
                            <input type="text" name="no_npwp" class="form-control" id="no_npwp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Password</label>
                            <input type="email" class="form-control" name="password" id="password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="10" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit">Daftar Sekarang</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Arsha</h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Andika_Natha</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('arsha/assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('arsha/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('arsha/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('arsha/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('arsha/assets/js/main.js')}}"></script>

</body>

</html>
