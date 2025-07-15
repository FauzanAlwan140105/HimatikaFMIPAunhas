@extends('layout')
@section('title', 'Database Anggota')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Database Anggota</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Anggota</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-20 mt-5 mb-5">
                    <section id="anggota">
                        <div data-aos="fade-up">
                            <div class="section-header mt-3">
                                <h2>Database Anggota</h2>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap  justify-content-between w-full">
                                    <div class="w-1/2 d-flex align-items-center ">
                                        <a href="{{ url('/anggota/create') }}" class="btn btn-primary ms-2  btn-sm"
                                            title="Tambahkan data anggota">
                                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                        </a>
                                        <a href="{{ url('/guest/anggota') }}" class="btn ms-4 btn-success btn-sm"
                                            title="Tambahkan data anggota">
                                            <i class="fa fa-regular fa-eye" aria-hidden="true"></i> Guest View
                                        </a>
                                    </div>

                                    <div class=" w-1/2  mt-4 sidebars ">
                                        <div class="sidebar-item search-form">
                                            <form action="{{ route('anggota.search') }}" method="GET"
                                                class="d-flex  flex-nowrap">
                                                <input type="text" placeholder="Search..." name="s">
                                                <button type="submit"><i class="bi bi-search"></i></button>
                                            </form>
                                        </div><!-- End sidebar search formn-->
                                    </div>
                                </div>
                            </div>

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
                                            <th>Nomor HP/WA</th>
                                            <th>Actions</th>
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
                                                <td>{{ $item->phone }}</td>
                                                <td>
                                                    <!--<a href="{{ url('/anggota/' . $item->id) }}" title="View Anggota"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>-->
                                                    <a href="{{ url('/anggota/' . $item->id . '/edit') }}"
                                                        title="Edit Anggota"><button class="btn btn-primary btn-sm"><i
                                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                            Edit</button></a>
                                                    <form method="POST" action="{{ url('/anggota' . '/' . $item->id) }}"
                                                        accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            title="Delete anggota"
                                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                                class="fa fa-trash-o" aria-hidden="true"></i>
                                                            Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="blog-pagination">
                                    <ul class="justify-content-center ">
                                        {{ $anggota->withQueryString()->links('pagination::bootstrap-4') }}
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                </section>
            </div>
        </div>
        </div>
    </main><!-- End #main -->
@endsection
