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
                    {{-- <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nomor</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Email</th>
                            <th class="text-secondary opacity-7"></th>
                        </tr>
                    </thead> --}}
                    <tbody>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center "></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="p-3 mb-2 bg-success text-white">Akun ini Di Terima Silakan Tekan Tombol Tolak Untuk Menolak Akun!!!
        </div>

        <div class="row g-0">
            <div class="col-lg-3">
                {{-- <div class="card" style="width: 18rem;"> --}}
                    {{-- <img src="/img/team-3.jpg " class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <a {{ route('management.show', $allUsers->id) }}>
                            <button type="submit" class="btn btn-primary"  action="{{-- route('management.show', $allUsers->id) --}}">🤝
                                Tolak</button>
                        </a>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                    <h5 class="card-title h3">{{ $allUsers->id }} {{ $allUsers->username }}</h5>
                    <p class="card-text h4">{{ $allUsers->email }}</p>
                    <form action="{{ route('management.show', $allUsers->id) }}" method="POST">
                        @csrf
                        <label for="informasi_penerimaan">Informasi Penerimaan:</label>
                        <textarea class="form-control" name="informasi_penerimaan" id="informasi_penerimaan" cols="30" rows="10"></textarea>

                        <a href=""><button class="btn btn-danger mt-3" type="submit">Save</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
