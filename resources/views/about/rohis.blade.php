@extends('layout')
@section('title', 'Kerohanian Islam')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Kerohanian Islam</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Kerohanian Islam</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/rohis/rohis.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Islamic Spirituality Division</h2>
                        <div class="our-story">
                            <h3>Kerohanian Islam</h3>
                            <p>Bidang kerohanian islam merupakan bidang yang mewadahi anggota Himatika FMIPA Unhas khususnya
                                untuk muslim dan muslimah yang bertujuan untuk membentuk pribadi manusia yang beriman dan
                                bertakwa kepada Allah subhaanahu wa ta'ala. serta memiliki budi pekerti dan akhlak yang
                                baik. Selain itu, bidang kerohanian islam juga mewadahi anggota Himatika FMIPA Unhas dalam
                                meningkatkan wawasan keagamaan, khususnya keislaman yang berlandaskan pada manhaj ahlusunnah
                                waljama'ah. Adapun diantaranya program kerja dari Bidang Kerohanian Islam:
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->

        <div data-aos="fade-up" class="section-header "style="margin-top: 8em">
            <h2>Program Kerja</h2>
        </div>
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Himatika Islamic Session Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/rohis/islamic.jpeg') }}" alt="Himatika Islamic Session" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Himatika Islamic Session</h4>
                            <p class="program-subtitle">Syiar Dakwah dan Silaturahmi Islami</p>
                            <button class="btn-detail" onclick="toggleDetail('islamic')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="islamic-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Sebagai bentuk syiar dakwah Himatika FMIPA Unhas</li>
                                            <li>Sebagai wadah maupun sarana untuk menjalin silaturahmi antar sesama anggota Himatika dan KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <ul>
                                            <li>Anggota Himatika FMIPA Unhas</li>
                                            <li>Warga KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Malam Bina Iman dan Takwa (Mabit) Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/rohis/rohis-th.jpg') }}" alt="Malam Bina Iman dan Takwa" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Mabit</h4>
                            <p class="program-subtitle">Malam Bina Iman dan Takwa</p>
                            <button class="btn-detail" onclick="toggleDetail('mabit')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="mabit-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Sarana mendekatkan diri dengan Allah</li>
                                            <li>Meningkatkan nilai keimanan dan ketakwaan anggota Himatika FMIPA Unhas</li>
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
                    <h2>Kerohanian Islam</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($rohis as $item)
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
