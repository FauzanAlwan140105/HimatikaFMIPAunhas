@extends('layout')
@section('title', 'Akademik & Kemahasiswaan')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Akademik & Kemahasiswaan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Akademik & Kemahasiswaan</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/akademik/akademik.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Academic and Student Affairs Division</h2>
                        <div class="our-story">
                            <h3>Akademik dan Kemahasiswaan</h3>
                            <p>
                                Bidang Akademik dan Kemahasiswaan hadir untuk menjalankan fungsi pengawalan urusan akademik
                                anggota Himatika FMIPA Unhas. Bidang ini bertugas dalam pengevaluasian nilai akademik
                                Anggota Himatika FMIPA Unhas dan memberi penjelasan tambahan mengenai materi kuliah. Adapun
                                diantaranya program kerja dari Bidang Akademik & Kemahasiswaan:</p>

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <!-- start About proker -->

        <div data-aos="fade-up" class="section-header "style="margin-top: 8em">
            <h2>Program Kerja</h2>
        </div>
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- PRISMA Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/akademik/prisma.jpeg') }}" alt="PRISMA" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">PRISMA</h4>
                            <p class="program-subtitle">Pelatihan Aktuaria, Sistem Informasi dan Matematika</p>
                            <button class="btn-detail" onclick="toggleDetail('prisma')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="prisma-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Memberikan pemahaman dasar tentang ruang lingkup pembelajaran Aktuaria, Sistem Informasi, dan Matematika kepada anggota Himatika FMIPA Unhas</li>
                                            <li>Meningkatkan pengetahuan anggota Himatika FMIPA Unhas dalam lingkup pembelajaran Aktuaria, Sistem Informasi, dan Matematika</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- HimatikaTalks Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/akademik/talk.jpeg') }}" alt="HimatikaTalks" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">HimatikaTalks</h4>
                            <p class="program-subtitle">Program Pengembangan Diri dan Motivasi</p>
                            <button class="btn-detail" onclick="toggleDetail('talks')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="talks-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Memberikan pengetahuan dan wawasan tentang pengembangan diri dan tujuan karir kepada anggota Himatika FMIPA Unhas</li>
                                            <li>Meningkatkan motivasi belajar anggota Himatika FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End About Section -->

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Akademik & Kemahasiswaan</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($akademik as $akademik)
                        <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="{{ $akademik->foto ? asset($akademik->foto) : asset('assets/img/default.jpg') }}"
                                    class="img-fluid" alt="">
                                <div class="social">
                                    <a href="{{ $akademik->twitter }}"><i class="bi bi-twitter"></i></a>
                                    <a href="{{ $akademik->instagram }}"><i class="bi bi-instagram"></i></a>
                                    <a href="{{ $akademik->facebook }}"><i class="bi bi-facebook"></i></a>
                                    <a href="{{ $akademik->instagram }}"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info text-center">
                                <h4> {{ $akademik->nama }}</h4>
                                <p> {{ $akademik->jabatan }}
                                    {{ $akademik->struktur_organisasi === 'inti' ? 'Umum' : ($akademik->struktur_organisasi === 'dewan' ? 'Dewan' : 'Bidang') }}
                                </p>
                                <span>" {{ $akademik->quotes }}"</span>
                            </div>
                        </div><!-- End Team Member -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Our Team Section -->
        </div>

    <!-- JavaScript untuk dropdown -->
    <script>
        function toggleDetail(programId) {
            const detail = document.getElementById(programId + '-detail');
            const button = event.target.closest('.btn-detail');
            
            if (detail.style.display === 'block') {
                detail.style.display = 'none';
                button.innerHTML = '<i class="fas fa-info-circle"></i> Detail Program';
            } else {
                detail.style.display = 'block';
                button.innerHTML = '<i class="fas fa-times"></i> Tutup Detail';
            }
        }
    </script>
@endsection
