@section('topTitle', 'Category')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div id="alert">
    @include('components.alert')
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'crousel'])
<div class="container-fluid py-4">

    <h2>Upload Image</h2>






    <div class="row">
        <div class="col-lg-6 col-12 mb-3">
            <div class="card" class="w-auto">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-3">
            <div class="card" class="w-auto">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-3">
            <div class="card" class="w-auto">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mb-3">
            <div class="card" class="w-auto">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>

        @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
        @endif

    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection