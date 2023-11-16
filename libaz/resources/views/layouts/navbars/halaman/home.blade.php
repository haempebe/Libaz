@extends('layout.master')

@section('judul')
Halo Zaldi
@endsection


@section('content')

<h1>
    Selamat datang {{$nama}} {{$alamat}}
</h1>
<h2> Jenis Kelamin : {{$jenis_kelamin}}
    @if ($jenis_kelamin === 1)
    laki_laki
    @else
    perempuan
    @endif
</h2>
@endsection