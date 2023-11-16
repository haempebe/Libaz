@section('topTitle', 'Home')

@extends('layouts.app')
     Halaman biodata
@endsection
 
@section('content')

<form action="/home" method="post">
        @csrf
        <label>nama lengkap</label><br>
        <input type="text" name="name"><br>
        <label>alamat</label><br>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea><br>
        <label>jenis kelamin</label><br>
        <input type="radio" name="jk" value="1">laki-laki
        <input type="radio" name="jk" value="2">perempuan<br>
        <input type="submit" value="kirim">
</form>
@endsection