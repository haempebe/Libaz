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
                </table>
            </div>
        </div>
        <div class="p-3 mb-2  bg-danger text-white">Akun ini Di Tolak Silakan Tekan Tombol Terima Untuk Menerima Akun!!!</div>
        <div class="row g-0">
            <div class="col-lg-3">
                {{-- <div class="card" style="width: 18rem;"> --}}
                    {{-- <img src="/img/team-4.jpg" class="card-img-top" alt="..."> --}}
                    
                    <div class="card-body">
                        <a {{-- route('management.info', $allinformasi->id)--}}>
                            <button type="submit" class="btn btn-info">🤝Terima</button>
                        </a>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="col-lg-4">
                <div class="card-body">
                    <h5 class="card-title h3"> {{-- $allUsers->id --}} {{-- $allUsers->username --}}</h5>
                    <p class="card-text h4">{{-- $allUsers->email --}}</p>
                    <form action="{{ route('penolakan') }}" method="POST">
                        @csrf
                        <label for="penolakan">Informasi:</label>
                        <div class="form-control" name="penolakan" id="penolakan" cols="30" rows="10">{{$allAnggota->tolak}}</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
