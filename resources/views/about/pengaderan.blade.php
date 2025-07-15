@extends('layout')
@section('title', 'Pengaderan')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Pengaderan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Pengaderan</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="row position-relative">
                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/pengaderan/pengaderan.jpg') }});"></div>
                    <div class="col-lg-7">
                        <h2>Cadre Division</h2>
                        <div class="our-story">
                            <h3>Pengaderan</h3>
                            <p>Membentuk kader sesuai dengan tujuan Himatika FMIPA Unhas dan
                                Melakukan pengawalan terhadap proses pengaderan anggota Himatika FMIPA Unhas. kader-kader
                                yang penuh rasa empati dan bertanggung jawab dari hati nurani yang mampu mengemban amanah
                                yang dipercayakan kepadanya. Adapun diantaranya program kerja dari Bidang Pengaderan:</p>
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
                <!-- Bina Akrab 2023 Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/binaAkrab2021.JPG') }}" alt="Bina Akrab 2023" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Bina Akrab 2023</h4>
                            <p class="program-subtitle">Program Pembinaan dan Pengukuhan Anggota Baru</p>
                            <button class="btn-detail" onclick="toggleDetail('binaakrab')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="binaakrab-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Penerimaan anggota baru</li>
                                            <li>Mempererat silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Membangun hubungan silaturahmi antar anggota dengan Civitas Departemen Matematika pada khususnya, serta dengan masyarakat luas pada umumnya</li>
                                            <li>Membangun sikap kebersamaan, kedisiplinan, kemandirian, etika dan moral, serta kepekaan</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <ul>
                                            <li>Mahasiswa baru 2023</li>
                                            <li>Mahasiswa lama Departemen Matematika yang belum mengikuti proses ini</li>
                                            <li>Anggota Himatika FMIPA Unhas</li>
                                            <li>Dosen atau staf Departemen Matematika FMIPA Unhas</li>
                                            <li>Undangan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PMMTD Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/pmmtd0.jpg') }}" alt="PMMTD XXX" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">PMMTD XXX</h4>
                            <p class="program-subtitle">Pelatihan Manajemen Mahasiswa Tingkat Dasar</p>
                            <button class="btn-detail" onclick="toggleDetail('pmmtd')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="pmmtd-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Mempererat hubungan silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Memberikan bekal tentang keorganisasian, kehimatikaan, dan pentingnya sikap kritis dalam organisasi</li>
                                            <li>Pengukuhan anggota baru</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <ul>
                                            <li>Mahasiswa baru 2023 dan mahasiswa lama yang telah lulus Bina Akrab 2023</li>
                                            <li>Anggota Himatika FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PMMTL Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/pengaderan/pmmtd2.jpg') }}" alt="PMMTL XXXI" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">PMMTL XXXI</h4>
                            <p class="program-subtitle">Pelatihan Manajemen Mahasiswa Tingkat Lanjut</p>
                            <button class="btn-detail" onclick="toggleDetail('pmmtl')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="pmmtl-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Mempererat hubungan silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Memberikan pengetahuan tentang pengelolaan organisasi</li>
                                            <li>Meningkatkan keterampilan manajerial</li>
                                            <li>Memberikan pengetahuan tentang kepemimpinan</li>
                                            <li>Mengembangkan potensi diri dalam upaya melahirkan dan mempersiapkan kepemimpinan masa depan</li>
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

        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pengaderan</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($pengaderan as $item)
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
