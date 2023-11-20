@section('topTitle', 'Category')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div id="alert">
    @include('components.alert')
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'crousel'])
<div class="container-fluid py-4">

<h2>Upload Image</h2>

    




    <div class="row row-cols-2 row-cols-md-2 g-4">
        <div class="col">
            <div class="card" style="width: 45rem;">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 45rem;">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 45rem;">
                <img src="https://i.ibb.co/MCJK9bL/Carousel.png" class="card-img-top" alt="...">
                <div class="card-body ">
                    <a href="#" class="btn btn-dark">Terapkan</a>
                    <a href="#" class="btn btn-white">Hapus</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 45rem;">
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

    <form action="/image/store" method="post" enctype="multipart/form-data">
        @csrf
        <label for="image">Image:</label>
        <input type="file" name="image" required>
        <br>
        <button type="submit">Upload</button>
        
    </form>
    </div>

    @include('layouts.footers.auth.footer')
</div>
@endsection