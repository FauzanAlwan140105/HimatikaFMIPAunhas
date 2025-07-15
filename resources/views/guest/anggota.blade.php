@extends('layout')
@section('title', 'Database Anggota')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Database Anggota</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/guest">Guest</a></li>
                <li>Anggota</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">
        <section id="anggota">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-20 mt-5 mb-5">
                        <div class="section-header mt-3">
                            <h2>Database Anggota</h2>
                        </div>
                        <div class="card-body">
                            @guest
                            @else
                                <div class="position-relative">
                                    <div class="position-absolute top-0 start-0">
                                        <a href="{{ url('/anggota') }}" class="btn btn-danger btn-sm"
                                            title="Tambahkan data anggota">
                                            <i class="fa fa-regular fa-eye" aria-hidden="true"></i> Admin View
                                        </a>
                                    </div>
                                </div>
                            @endguest
                            <div class="position-relative md-align-center">
                                <div class="position-absolute top-0 end-0">
                                    <div class="sidebars">
                                        <div class="sidebar-item search-form">
                                            <form action="{{ route('guest.search') }}" method="GET" class="">
                                                <input type="text" placeholder="Search..." name="s">
                                                <button type="submit"><i class="bi bi-search"></i></button>
                                            </form>
                                        </div><!-- End sidebar search formn-->

                                    </div>
                                </div>
                            </div>
                            <br />
                            <br />
                            <br />
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Angkatan</th>
                                            <th>Status Anggota</th>
                                            <th>Asal Daerah</th>
                                            <th>Program Studi</th>
                                            <!--<th>Actions</th>-->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($anggota as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->angkatan }}</td>
                                                <td>{{ $item->status_anggota }}</td>
                                                <td>{{ $item->domisili }}</td>
                                                <td>{{ $item->prodi }}</td>
                                                <!--
                                                                                                    <td>
                                                                                                        <a href="{{ url('/guest/anggota/' . $item->id) }}" title="View Anggota"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                                                                    </td>
                                                                                                    -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="blog-pagination">
                                    <ul class="justify-content-center">
                                        {{ $anggota->withQueryString()->links('pagination::bootstrap-4') }}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
