@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('topTitle', 'Caraosel')

@section('content')
<div id="alert">
    @include('components.alert')
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'carousel'])
<div class="container-fluid py-4">
    <div class="col-lg-6 col-12 mb-3">
        <div class="card w-auto">
            <div class="card-body">
                <!-- Tampilkan gambar dinamis di sini -->
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @php
                $nama_file = session('nama_file');
                @endphp

                @if(isset($nama_file))
                <img src="{{ asset('uploads/' . $nama_file) }}" class="card-img-top" alt="...">
                @else
                <p>No Image</p>
                @endif

    <form action="{{ route('upload-gambar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>

        <button type="submit" class="btn btn-dark">Terapkan</button>
        <form action="{{ route('hapus-gambar') }}" method="POST">
            @csrf
            <input type="hidden" name="nama_file" value="{{ $nama_file }}">
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </form>
</div>


<!-- tambahkan card lainnya di sini sesuai kebutuhan -->

@if(session('success'))
<p style="color:green;">{{ session('success') }}</p>
@endif
</div>

@include('layouts.footers.auth.footer')
@endsection
