@section('topTitle', 'Users Management')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Users Management'])

<div class="container-fluid py-4">
    <div class="card mb-4">
        <div class="card-header pb-0"></div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-1">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Make at</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($allAnggota as $item)

                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td class="text-center">{{ $item->username }}</td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->updated_at }}</td>
                            <td class="text-center">{{ $item->status }}</td>
                            <td class="align-end text-center text-sm pt-4 col-md-3 ml-auto justify-content-end">
                                <div class="d-flex ">
                                    @if ($item->status == "pending")
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')" action="{{ route('management.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary text-white me-2" {{ $item->username == 'admin' ? 'disabled' : '' }}>🚫 Hapus</button>
                                    </form>
                                    <form action="{{ route('management.updateStatus', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" name="status" value="Diterima" class="btn btn-info me-1">🤝 Terima</button>

                                        <button type="submit" name="status" value="Ditolak" class="btn btn-danger me-2">🚫 Tolak</button>
                                    </form>
                                    @elseif ($item->status == "Diterima")
                                    <form action="{{ route('management.updateStatus', $item->id) }}" method="POST">
                                        @csrf

                                    </form>
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')" action="{{ route('management.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary text-white me-2" {{ $item->username == 'admin' ? 'disabled' : '' }}>🚫 Hapus</button>
                                    </form>
                                    <a href="{{ route('management.view', $item->id) }}">
                                        <button type="button" class="btn btn-success">Info</button>
                                    </a>
                                    @elseif ($item->status == "Ditolak")
                                    <form action="{{ route('management.updateStatus', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" name="status" value="Diterima" class="btn btn-info me-2">🤝 Terima</button>
                                    </form>
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')" action="{{ route('management.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary text-white me-2" {{ $item->username == 'admin' ? 'disabled' : '' }}>🚫 Hapus</button>
                                    </form>
                                    @endif

                                </div>
                            </td>

                        </tr>
                        @php $i++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
@endsection
