@section('topTitle', 'tampil')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div id="alert">
    @include('components.alert')
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'tampil'])

<div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header pb-0">
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <tbody>
                        <tr>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="p-3 mb-2 bg-success text-white h2">Akun ini Di Terima!!
        </div>

        <div class="row g-0">
            <div class="col-lg-0">
                <div class="card-body">
                    <form action="{{ route('management', $allUsers->id) }}">
                        @csrf
                        <button type="submit" name="status" value="Ditolak" class="btn btn-danger me-2">kembali</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="card-body">
                    <h5 class="card-title h2">{{ $allUsers->id }} {{ $allUsers->username }}</h5>
                    <p class="card-text h5">{{ $allUsers->email }}</p>
                    <form action="{{ route('management.update', $allUsers->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="informasi_penerimaan">Informasi Penerimaan:</label>
                        <textarea class="form-control" name="informasi_penerimaan" id="informasi_penerimaan" cols="30" rows="10">{{ $allUsers->informasi_penerimaan }}</textarea>
                        <button class="btn btn-success mt-3" type="submit">Update</button>
                        <button class="btn btn-secondary mt-3" type="submit">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
