@extends('layout')
@section('title', 'Halaman Pengunjung')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Halaman Pengunjung</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Guest</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Menu</h2>
                </div>

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="fa-sharp fa-solid fa-users-viewfinder"></i>
                            </div>
                            <h3>Database Anggota Himatika</h3>
                            <p> <!-- isi disini ---></p>
                            <a href="/guest/anggota" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-blog"></i>
                            </div>
                            <h3>Blog</h3>
                            <p>Informasi seputar akademik dan himatika.</p>
                            <a href="/guest/blog" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-photo-film"></i>
                            </div>
                            <h3>Galeri Kegiatan</h3>
                            <p>Pusat dokumentasi seluruh kegiatan di Himatika.</p>
                            <a href="/guest/galeri" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Services Section -->
    </main>
@endsection
