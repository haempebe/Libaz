@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')

    <div class="col-12 h3 text-center mt-3" style="font-family: poppins">Buku Terbaru</div>
    <div class="row mx-10">
        <div class="col-3 px-3">
            <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3">
            <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3">
            <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3">
            <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
    </div>
    <div class="row mx-10">
        <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
        <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3"
                src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
    </div>
    <div class="container">
        <div class="col-12 h5 my-5" style="font-family: poppins">request buku</div>
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
