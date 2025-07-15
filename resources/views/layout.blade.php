<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        @yield('title') - Himatika FMIPA Unhas
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @livewireStyles
    <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center" data-aos="fade-down" data-aos-delay="100">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="/" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </a>

            {{-- <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i> --}}

            <div class="humburger">
                <input type="checkbox" id="mobileNavCheckbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav id="navbar" class="navbar">
                <ul>

                    <li><a href="/">Home</a></li>
                    @guest
                        <li><a href="/guest/anggota">Anggota</a></li>
                        <li><a href="/guest/blog">Blog</a></li>
                        <li><a href="/guest/galeri">Galeri</a></li>
                    @else
                        <li><a href="/anggota">Anggota</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/galeri">Galeri</a></li>
                    @endguest
                    <li class="dropdown"><a href="#"><span>Tentang himatika</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="/about#sejarah">Sejarah</a></li>
                            <li><a href="/about#struktur">Struktur Organisasi</a></li>
                            <li><a href="/about#konstitusi">Konstitusi</a></li>
                        </ul>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="login-btn">{{ __('Login') }}</a>
                            </li>
                        @endif

                        {{-- @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="register-btn">{{ __('Register') }}</a>
                            </li>
                        @endif --}}
                    @else
                        <li class="dropdown">
                            <a id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <i class="bi bi-chevron-down dropdown-indicator"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end bg-secondary" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('slider')
    @yield('blog')
    @yield('content')



    @if (session()->has('message'))
        <!-- Latar belakang hitam transparan -->
        <!-- Modal -->
        <div class="modal fade show" id="myModal" role="dialog" aria-modal="true"
            style="display: block; z-index: 9999;">
            <div class="modal-dialog" style="z-index: 10000;">
                <div class="modal-content" style="background-color: #ffffff; border-radius: 10px;">
                    <div class="modal-header" style="background-color: #28a745; color: #ffffff;">
                        <h5 class="modal-title">Success!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeModal()"
                            style="color: #e60000; background-color: transparent; border: none; font-size: 30px;">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <p> {{ session()->get('message') }}</p>
                    </div>
                    <div class="modal-footer" style="background-color: #f8f9fa;">
                        <button type="button" class="btn btn-success" class="close" data-dismiss="modal"
                            aria-label="Close" onclick="closeModal()">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latar belakang hitam transparan -->
        <div class="modal-backdrop show"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.629); z-index: 9998;"
            onclick="closeModal()">
        </div>
    @endif
    {{-- gagal --}}
    @if (session()->has('error'))
        <!-- Latar belakang hitam transparan -->
        <!-- Modal -->
        <div class="modal fade show" id="myModal" role="dialog" aria-modal="true"
            style="display: block; z-index: 9999;">
            <div class="modal-dialog" style="z-index: 10000;">
                <div class="modal-content" style="background-color: #ffffff; border-radius: 10px;">
                    <div class="modal-header" style="background-color: #a72828; color: #ffffff;">
                        <h5 class="modal-title">Failure!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            onclick="closeModal()"
                            style="color: #e60000; background-color: transparent; border: none; font-size: 30px;">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        <p> {{ session()->get('error') }}</p>
                    </div>
                    <div class="modal-footer" style="background-color: #f8f9fa;">
                        <button type="button" class="btn btn-danger" class="close" data-dismiss="modal"
                            aria-label="Close" onclick="closeModal()">Ok</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latar belakang hitam transparan -->
        <div class="modal-backdrop show"
            style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.629); z-index: 9998;"
            onclick="closeModal()">
        </div>
    @endif
    <!-- JavaScript untuk menutup modal -->
    <script>
        function closeModal() {
            var modalBackdrop = document.querySelector('.modal-backdrop');
            var modal = document.querySelector('.modal');
            modalBackdrop.remove();
            modal.remove();
        }
    </script>
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer" data-aos="fade-up" data-aos-delay="200">

        <div class="footer-content position-relative">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Sekretariat</br>
                                Himatika FMIPA Unhas</h3>
                            <p>
                                LFD 110 Himatika FMIPA Unhas,<br>
                                Jln. Perintis Kemerdekaan Km. 10 Tamalanrea, Makassar<br><br>
                                <strong>Email:</strong> bravohimatikafmipaunhas@gmail.com<br>
                            </p>
                            <div class="social-links d-flex mt-3">
                                <a href="https://twitter.com/himatikafmipauh"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/groups/113372848725819/"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/himatikafmipaunhas/"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-instagram"></i></a>
                                <a href="https://www.youtube.com/channel/UCQvNkbWmbeORGb-Vrqt6irg"
                                    class="d-flex align-items-center justify-content-center"><i
                                        class="bi bi-youtube"></i></a>
                            </div>
                        </div>
                    </div><!-- End footer info column-->

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About us</a></li>
                            @guest
                                <li><a href="/guest/galeri">Galeri</a></li>
                                <li><a href="/guest/blog">Blog</a></li>
                                <li><a href="/guest/anggota">Database Anggota</a></li>
                            @else
                                <li><a href="/galeri">Galeri</a></li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/anggota">Database Anggota</a></li>
                            @endguest
                        </ul>
                    </div>

                    <div class="col-lg-6 col-md-3 foterForm footer-link">
                        <h4>Contact us</h4>
                        <form method="post" action="{{ route('submitForm') }}">
                            @csrf
                            <div class="">
                                <div class="styled-input wide">
                                    <input type="text" name="name" required />
                                    <label>Name</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="styled-input">
                                    <input type="email" name="email" required />
                                    <label>Email</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="styled-input" style="float:right;">
                                    <input type="text" name="phone" required />
                                    <label>Phone Number</label>
                                </div>
                            </div>
                            <div class="">
                                <div class="styled-input wide">
                                    <textarea required name="message"></textarea>
                                    <label>Message</label>
                                </div>
                            </div>
                            <div class="">
                                <button type="submit" class="btn-lrg submit-btn">Send Message</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="footer-legal text-center position-relative">
                <div class="container">
                    <div class="copyright">
                        <strong><i><span>Queen Of Science</span></i></strong>
                    </div>
                </div>
            </div>

    </footer>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/5875j2ck7sspps3t45sgsafr53irk1owed2duchaz98s6394/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea.tiny',
            plugins: 'anchor autolink charmap emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            height: 400,
            menubar: false,
            branding: false,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save();
                });
            }
        });
    </script>
    @livewireScripts
</body>

</html>
