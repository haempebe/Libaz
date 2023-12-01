@extends('layout.master')

@section('judul')
detail kategori
@endsection

@section('content')

<h1>{{$kategori->nama}}</h1>
<p>{{$kategori->deskripsi}}</p>

@endsection