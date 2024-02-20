@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="h3 text-center mt-3 mb-3">Buku Terbaru</div>
        <div class="row">
            @foreach ($allBuku as $item)
                <div class="col-md-3 col-12 mb-4">
                    <div class="card shadow-none border">
                        <img src="{{ asset('img/cover/' . $item->cover) }}" class="figure-img img-fluid rounded"
                            style="object-fit:contain;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p>{{ $item->kategori->name }}</p>
                            <a href="{{ url('library/' . $item->name) }}" class="btn btn-dark btn-sm">lihat</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="h3 text-center mt-3 mb-3">Request Buku</div>
        <div class="form-floating mb-3 mt-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Nama Buku</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Deskripsi Buku</label>
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Alasan</label>
        </div>
        <div class="mb-3 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">alasan ini kuat?</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-dark align-items-center px-6">kirim</button>
        </div>
    </div>
@endsection
