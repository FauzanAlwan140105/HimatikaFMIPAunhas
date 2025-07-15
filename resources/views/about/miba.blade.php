@extends('layout')
@section('title', 'Minat & Bakat')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Minat & Bakat</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Minat & Bakat</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/miba/minat.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Interests & Talents Division</h2>
                        <div class="our-story">
                            <h3>Minat & Bakat</h3>
                            <p>Bidang minat dan bakat adalah bidang yang bertujuan untuk mengawal segala hal yang menyangkut
                                minat dan bakat anggota seperti pewadahan dan pengembangan minat dan bakat anggota. Adapun
                                diantaranya Program Kerja dari bidang Minat & Bakat:</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->
        <div data-aos="fade-up" class="section-header" style="margin-top: 8em">
            <h2>Program Kerja</h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Pekan Raya Himatika Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/pekanraya.jpeg') }}" alt="Pekan Raya Himatika" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Pekan Raya Himatika</h4>
                            <p class="program-subtitle">Festival Kreativitas dan Talent Show</p>
                            <button class="btn-detail" onclick="toggleDetail('pekanraya')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="pekanraya-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Mempererat silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Mewadahi kreatifitas dan potensi anggota Himatika FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas dan Undangan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sport Day Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/sport.jpg') }}" alt="Himatika Sport Day" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Himatika Sport Day</h4>
                            <p class="program-subtitle">Kompetisi Olahraga dan Kebugaran</p>
                            <button class="btn-detail" onclick="toggleDetail('sportday')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="sportday-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Menjalin dan mempererat tali silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Meningkatkan kebugaran jasmani anggota Himatika FMIPA Unhas</li>
                                            <li>Mewadahi minat dan bakat anggota di bidang olahraga</li>
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

                <!-- Digital Creative Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/miba/digital.jpeg') }}" alt="Digital Creative" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Digital Creative</h4>
                            <p class="program-subtitle">Platform Karya Visual dan Konten Kreatif</p>
                            <button class="btn-detail" onclick="toggleDetail('digital')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="digital-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Sebagai sarana penyampaian informasi</li>
                                            <li>Mewadahi minat dan bakat anggota Himatika FMIPA Unhas di bidang karya visual</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas dan masyarakat umum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Minat & Bakat</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($miba as $item)
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
