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
                            @foreach ($allUsers as $item)   
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>

                                
                                <td class="align-middle text-center text-sm pt-2">
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                                    action="{{ url('management-user/' . $item->id . '/delete') }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="delete" class="btn btn-primary">🚫 Tolak</button>
                                                </form>
                                    <button type="button" class="btn btn-info" action="{{-- route('admin.users.destroy', $user->id) --}}" >🤝 Terima</button>
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="btn btn-success"> Info</button>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
