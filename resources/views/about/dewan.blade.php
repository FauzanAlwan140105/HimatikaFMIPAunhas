@extends('layout')
@section('title', 'Dewan')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Dewan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Dewan</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/dewan/dewan.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>The Council</h2>
                        <div class="our-story">
                            <h3>Dewan</h3>
                            <p>
                                Dewan Himatika FMIPA Unhas merupakan lembaga legislatif dari Himatika FMIPA Unhas. Dewan
                                hadir dalam organisasi sebagai fungsi pengawasan Badan Eksekutif Himatika FMIPA Unhas,
                                pengawalan pelaksanaan amanah Musyawarah Tertinggi, dan penegakan konstitusi Himatika FMIPA
                                Unhas. Dewan dalam pelaksanaan tugasnya bisa memberi saran, pendapat, nasehat, dan teguran
                                kepada BE Himatika FMIPA Unhas. Dewan juga dapat berfungsi sebagai pelaksana kegiatan
                                Himatika FMIPA Unhas bila terjadi kekosongan di BE Himatika FMIPA Unhas.
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
                    <h2>Dewan</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($dewan as $item)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $item->foto ? asset($item->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" alt="{{ $item->nama }}">
                                <div class="social">
                                    @if($item->twitter)
                                        <a href="{{ $item->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if($item->instagram)
                                        <a href="{{ $item->instagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if($item->facebook)
                                        <a href="{{ $item->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if($item->linkedin)
                                        <a href="{{ $item->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4>{{ $item->nama }}</h4>
                                <p>{{ $item->jabatan }}
                                    {{ $item->struktur_organisasi === 'inti' ? 'Umum' : ($item->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                </p>
                                @if($item->quotes)
                                    <span>"{{ $item->quotes }}"</span>
                                @endif
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Team Section -->
    </main>
@endsection
