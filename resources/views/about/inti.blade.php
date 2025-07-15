@extends('layout')
@section('title', 'Struktur Inti')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Struktur Inti</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Struktur Inti</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/inti/inti.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>The Core Team</h2>
                        <div class="our-story">
                            <h3>Struktur Inti</h3>
                            <p>Struktur Inti BE Himatika FMIPA Unhas terdiri dari seorang Ketua Umum yang dibantu oleh
                                Sekretaris Umum dan Bendahara Umum. Ketua Umum berkewajiban dalam pelaksanaan konstitusi
                                organisasi dan pertanggungjawaban kebijakan serta proker. Sekretaris Umum berfungsi dalam
                                manajemen utama administrasi organisasi dan dapat menjadi juru bicara lembaga atas izin
                                Ketua Umum. Bendahara Umum berfungsi dalam manajemen keuangan dan pendanaan
                                kegiatan organisasi.
                            </p>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->
        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Struktur Inti</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($pengurusInti as $pengurus)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $pengurus->foto ? asset($pengurus->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ $pengurus->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $pengurus->instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $pengurus->facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $pengurus->instagram }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4> {{ $pengurus->nama }}</h4>
                                <p> {{ $pengurus->jabatan }}
                                    {{ $pengurus->struktur_organisasi === 'inti' ? 'Umum' : ($pengurus->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                </p>
                                <span>" {{ $pengurus->quotes }}"</span>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>
            </div>
        </section><!-- End Our Team Section -->
    </main>
@endsection
