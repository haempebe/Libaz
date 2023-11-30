@section('topTitle', 'Home')
@extends('layouts.app')

@section('content')
<div class="col-12 h3 text-center mt-3" style="font-family: poppins">Buku Terbaru</div>
<div class="row mx-10">
    <div class="col-3 px-3">
        {{-- <img class="d-block w-100 mt-5 rounded-3"
            src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">{{$item->id}}</div>
    <div class="col-3 px-3"> --}}
        <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
    </div>
    <div class="col-3 px-3">
        <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
    </div>
    <div class="col-3 px-3">
        <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
    </div>
    <div class="col-3 px-3">
        <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">
    </div>
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
<form role="form" method="post" action="{{ route('request.book') }}">
    @csrf
    @method('get')
    <div class="container">
        <div class="col-12 h5 my-5" style="font-family: poppins">request buku</div>
        <div class="form-floating mb-3 mt-3">
            <input type="name" value="{{ old('name') }}" class="form-control" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">nama{{--$item->id--}}</label>
        </div>
        <div class="form-floating mb-3 mt-3">
            <input type="name" class="form-control" id="floatingInput" value="{{ old('namaBuku') }}"
                placeholder="name@example.com">
            <label for="floatingInput" ">nama buku{{--$item->namaBuku--}}</label>
        </div>
        <div class=" form-floating mb-3">
                <input type="name" class="form-control" value="{{ old('DeskripsiBuku') }}" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword">descripsi
                    buku{{--$item->DeskripsiBuku--}}</label>
        </div>
        <div class="form-floating mb-3">
            <input type="name" class="form-control" value="{{ old('DeskripsiBuku') }}" id="floatingPassword"
                placeholder="Password">
            <label for="floatingPassword">alasan{{--$item->alasan--}}</label>
        </div>
        <div class="mb-3 form-check mb-3">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">alasan ini kuat?</label>
        </div>
        <div class="text-center">
            <a href="{{ route('createBook') }}"><button type="submit"
                    class="btn btn-dark align-items-center px-6">kirim</button>
            </a>
        </div>


    </div>
    @endsection