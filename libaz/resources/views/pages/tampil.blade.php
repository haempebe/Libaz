@section('topTitle', 'tampil')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Tampil'])

<div class="card shadow-lg mx-4">
    <div class="card-body p-3">
        <div class="row gx-4">
            <div class="col-auto my-auto">
                <div class="h-100">

                    @foreach ($allUsers as $item)

                    <div class="mb-0 font-weight-bold text-sm">
                    <p>Nama: {{ $item->nama }}</p>
                    <p>Deskripsi: {{ $item->email }}</p>
                    <a href="{{ url('management-user/' . $item->id . '/show') }}">Kembali</a>
                    </div>
                    
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footers.auth.footer')
</div>
@endsection