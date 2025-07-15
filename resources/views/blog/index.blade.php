@extends('layout')
@section('title', 'Blog')
@section('blog')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Blog Details</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Blog Details</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="blog" class="blog">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                @guest
                @else
                    <a href="{{ url('/blog/create') }}" class="btn btn-primary btn-sm" title="Tambahkan data anggota">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <a href="{{ url('/guest/blog') }}" class="btn btn-success btn-sm" title="Tambahkan data anggota">
                        <i class="fa fa-regular fa-eye" aria-hidden="true"></i> Guest View
                    </a>
                @endguest
                <div class="section-header">
                    <h2>Blog</h2>
                </div>


                <div class="row gy-4 posts-list">
                    @foreach ($blog as $item)
                        <div class="col-xl-4 col-md-6">
                            <div class="post-item position-relative h-100">

                                <div class="post-img position-relative overflow-hidden">
                                    <img src="{{ asset($item->image) }}" class="img-fluid " alt="">
                                    <span class="post-date">{{ $item->created_at->format('d M') }}</span>
                                </div>

                                <div class="post-content d-flex flex-column">

                                    <h3 class="post-title">{{ Str::limit($item->judul, 40) }}</h3>

                                    <div class="meta d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-person"></i> <span class="ps-2">{{ $item->author }}</span>
                                        </div>
                                        <span class="px-3 text-black-50">/</span>
                                        <div class="d-flex align-items-center">
                                            <i class="bi bi-folder2"></i> <span class="ps-2">{{ $item->kategori }}</span>
                                        </div>
                                    </div>


                                    {!! Str::limit($item->desc, 50) !!}


                                    <a href="{{ url('/blog/' . $item->id) }}" class="readmore stretched-link"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>

                                </div>

                            </div>
                            @guest
                            @else
                                <div class="mb-10">
                                    <a href="{{ url('/blog/' . $item->id) . '/edit' }}" title="Edit Blog"><button
                                            class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                                aria-hidden="true"></i> Edit</button></a>
                                    <form method="POST" action="{{ route('blog.destroy', $item->id) }}" accept-charset="UTF-8"
                                        style="display:inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete anggota"
                                            onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                                aria-hidden="true"></i> Delete</button>
                                    </form>
                                </div>
                            @endguest
                        </div>
                    @endforeach
                </div>
                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        {{ $blog->links('pagination::bootstrap-4') }}
                    </ul>
                </div>
            </div>
        </section>
    </main>
@endsection
