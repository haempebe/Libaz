@section('topTitle', 'Users Management')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Users Management'])

    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0">
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Nomor</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    Nama</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Time</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Ection</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">

                                        <div class="d-flex flex-column justify-content-center mb-3 ">
                                            <h6 class="mb-0 text-sm mt-2">1</h6>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs text-secondary mb-0">hamidzan</p>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold ">23/04/18</span>
                                </td>
                                <td class="align-middle text-center text-sm pt-2">
                                    <button type="button" class="btn btn-primary">🚫 Tolak</button>
                                    <button type="button" class="btn btn-info">🤝 Terima</button>
                                    <button type="button" class="btn btn-success"> Info</button>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
