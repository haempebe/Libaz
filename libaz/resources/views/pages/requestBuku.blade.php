@section('topTitle', '_request')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div id="alert">
    @include('components.alert')
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'tampil_request'])

@foreach ($allrequest as $item)
<div class="col-12 h3 text-center mt-3" style="font-family: poppins">Buku Terbaru</div>
<div class="row mx-10">
    <div class="col-3 px-3">{{ $item->name }}</div>
    {{-- <img class="d-block w-100 mt-5 rounded-3"
        src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg">{{$item->id}}
</div>
<div class="col-3 px-3"> --}}

    <div class="col-3 px-3">{{ $item->namaBuku }}</div>

    <div class="col-3 px-3">{{ $item->DeskripsiBuku }}</div>

    <div class="col-3 px-3">{{ $item->alasan }}</div>

</div>
<div class="row mx-10">
    <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
    <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
    <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
    <div class="col-3 px-3"> <img class="d-block w-100 mt-5 rounded-3" src="https://www.bukukita.com/babacms/displaybuku/71047_f.jpg"></div>
</div>
@endforeach


@include('layouts.footers.auth.footer')
</div>
@endsection
