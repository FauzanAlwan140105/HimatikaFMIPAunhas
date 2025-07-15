@extends('layout')
@section('title', 'Struktur Kepengurusan')
@section('content')
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('assets/img/sekret.jpeg') }}">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Struktur Kepengurusan</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li>Struktur</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <img data-aos="fade-up" src="{{ asset('assets/img/struktur_matriks.png') }}" class="img-fluid" alt="Responsive image">

@endsection
