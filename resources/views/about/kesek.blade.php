@extends('layout')
@section('title', 'Kesekretariatan')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Kesekretariatan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Kesekretariatan</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/kesek/kesek.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>Secretariat Division</h2>
                        <div class="our-story">
                            <h3>Kesekretariatan</h3>
                            <p>Bidang kesekretariatan adalah bidang yang bertanggung jawab terhadap sekretariat Himatika
                                FMIPA Unhas, yaitu mengupayakan peningkatan, pengembangan dan pemeliharaan sarana dan
                                prasarana sekretariat Himatika FMIPA Unhas dalam rangka peningkatan kinerja badan eksekutif
                                dan kenyamanan warga serta senantiasa melakukan koordinasi aktif dengan sekretaris umum
                                dalam persuratan. Adapun diantaranya program kerja dari bidang kesekretariatan:</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header" style="margin-top: 8em">
            <h2>Program Kerja</h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Sarana Prasarana Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/kesek/pendataan.jpg') }}" alt="Sarana Prasarana" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Sarana & Prasarana</h4>
                            <p class="program-subtitle">Pengadaan, Pendataan, serta Pemeliharaan Fasilitas</p>
                            <button class="btn-detail" onclick="toggleDetail('sarpras')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="sarpras-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Menyediakan fasilitas yang dibutuhkan anggota Himatika FMIPA Unhas</li>
                                            <li>Menjaga kondisi fasilitas yang ada agar dapat digunakan dengan baik oleh anggota Himatika FMIPA Unhas</li>
                                            <li>Mendata inventaris Himatika FMIPA Unhas</li>
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

                <!-- Himatika Reset Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/kesek/kesek-th.jpg') }}" alt="Himatika Reset" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Himatika Reset</h4>
                            <p class="program-subtitle">Penataan Ulang Sekretariat dan Bonding</p>
                            <button class="btn-detail" onclick="toggleDetail('reset')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="reset-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Melakukan aktivitas penataan ulang sekretariat Himatika FMIPA Unhas</li>
                                            <li>Menjalin silaturahmi antar anggota Himatika FMIPA Unhas</li>
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
                    <h2>Kesekretariatan</h2>
                </div>

                <div class="row gy-5">
                    @foreach ($kesekretariatan as $item)
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
