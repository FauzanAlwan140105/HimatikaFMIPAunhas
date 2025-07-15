@extends('layout')
@section('title', 'Galeri')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Galeri Kegiatan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Galeri</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">

        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">
                <a href="{{ url('/galeri/create') }}" class="btn-add" title="Tambahkan data anggota">
                    <i class="fa fa-plus" aria-hidden="true"></i> Add New
                </a>
                <a href="{{ url('/guest/galeri') }}" class="btn-add" title="Tambahkan data anggota">
                    <i class="fa fa-regular fa-eye" aria-hidden="true"></i> Guest View
                </a>
                <div class="section-header mt-3">

                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-Mathematics">Mathematics Event</li>
                        <li data-filter=".filter-Bina">Bina Akrab</li>
                        <li data-filter=".filter-Himatika">Premi</li>
                        <li data-filter=".filter-Latihan">Latihan Kepemimpinan</li>
                        <li data-filter=".filter-Reset">Himatika Reset</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach ($galeri as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $item->kegiatan }}">
                                <div class="portfolio-content h-100">
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                    <div class="portfolio-info">
                                        <h4>{{ $item->kegiatan }}</h4>
                                        <a href="{{ asset($item->image) }}" title="{{ $item->kegiatan }}"
                                            data-gallery="portfolio-gallery-{{ $item->kegiatan }}"
                                            class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                        <form method="POST" action="{{ url('/galeri' . '/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-sm"
                                                style="background-color: #ff0000; color:#fff" title="Delete anggota"
                                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                    class="bi bi-trash3" aria-hidden="true"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- End Projects Item -->
                        @endforeach
                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
