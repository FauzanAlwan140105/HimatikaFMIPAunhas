@extends('layout')
@section('title', 'Eksternal')

<!-- Link CSS untuk styling program -->
<link rel="stylesheet" href="{{ asset('assets/css/akademik.css') }}">

@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Eksternal</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Eksternal</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    <div class="col-lg-7 about-img"
                        style="background-image: url({{ asset('assets/img/about/eksternal/eksternal.jpg') }});"></div>

                    <div class="col-lg-7">
                        <h2>External Division</h2>
                        <div class="our-story">
                            <h3>Eksternal</h3>
                            <p>Bidang Eksternal berfungsi untuk mengidentifikasi dan mengkaji isu untuk menentukan sikap
                                yang bijak dalam penanggapannya, mengimplementasikan ilmu untuk meningkatkan kepedulian
                                terhadap lingkungan sosial, dan menjalin silaturahmi dalam bentuk pendelegasian di ranah
                                eksternal Himatika FMIPA Unhas. Adapun diantaranya program kerja dari Bidang Eksternal:</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Himatika Mengabdi</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Benchmarking</span></li>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->
        <!-- start About proker -->
        <div data-aos="fade-up" class="section-header" style="margin-top: 8em">
            <h2>Program Kerja</h2>
        </div>
        
        <!-- Program Kerja Section -->
        <div class="container program-section" data-aos="fade-up">
            <div class="row g-4">
                <!-- Diskrit Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/eksternal/diksi.jpg') }}" alt="Diskrit" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Diskrit</h4>
                            <p class="program-subtitle">Diskusi Kritis - Forum Kajian dan Diskusi</p>
                            <button class="btn-detail" onclick="toggleDetail('diskrit')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="diskrit-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Meningkatkan kesadaran anggota terhadap isu yang diangkat</li>
                                            <li>Menjalin silaturahmi antar anggota Himatika dan warga KM FMIPA Unhas</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas dan Warga KM FMIPA Unhas</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Himatika Mengabdi Program -->
                <div class="col-lg-6 col-md-12">
                    <div class="program-item">
                        <div class="program-photo">
                            <img src="{{ asset('assets/img/about/eksternal/mengabdi.jpg') }}" alt="Himatika Mengabdi" class="img-fluid">
                        </div>
                        <div class="program-info">
                            <h4 class="program-title">Himatika Mengabdi</h4>
                            <p class="program-subtitle">Program Pengabdian Masyarakat</p>
                            <button class="btn-detail" onclick="toggleDetail('mengabdi')">
                                <i class="fas fa-info-circle"></i> Detail Program
                            </button>
                            
                            <!-- Dropdown Detail -->
                            <div class="program-detail" id="mengabdi-detail">
                                <div class="detail-content">
                                    <div class="tujuan">
                                        <h5><i class="fas fa-bullseye"></i> Tujuan</h5>
                                        <ul>
                                            <li>Menjalin silaturahmi antar anggota Himatika FMIPA Unhas</li>
                                            <li>Menyalurkan bantuan kepada masyarakat umum</li>
                                            <li>Meningkatkan kualitas SDM dalam bidang pendidikan</li>
                                        </ul>
                                    </div>
                                    <div class="sasaran">
                                        <h5><i class="fas fa-users"></i> Sasaran</h5>
                                        <p>Anggota Himatika FMIPA Unhas dan Masyarakat umum</p>
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
                    <h2>Eksternal</h2>
                </div>
                <div class="row gy-5">
                    @foreach ($eksternal as $item)
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
