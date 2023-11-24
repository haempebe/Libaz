@extends('layout.master')

@section('judul')
halaman tambah kategori
@endsection

@section('content')

<form action="/ketgori/{kategori_id}" method="POST">
    @csrf
    <div class="form-group">
        <label>nama category</label>
        <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
    <div class="form-group">
        <label>deskripsi kategori</label>
        <textarea name="deskripsi" class="form-control" cols="20" row="10">{{$kategori->deskripsi}} </textarea>
    </div>
    @error('deskripsi')
    <div class="alert alert-danger">{{$massage}}</div>
    @enderror
    <button type="submit" class="btn btn-dark">submit</button>
</form>
@endsection