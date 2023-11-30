@section('topTitle', 'Users Management')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Users Management'])

<div class="container-fluid py-5">
    <div class="card mb-4">
        <div class="card-header pb-0">
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-1">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Nomor</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                Nama</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Email</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Make at</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Ection</th>
                            <th class="text-center text-secondary opacity-7"></th>
                        </tr>
                    </thead>
                    @php
                    $i = 1;
                    @endphp
                    <tbody>
                        @foreach ($allAnggota as $item)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td class="text-center">{{ $item->username }}</td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->updated_at }}</td>
                            <td class="align-middle text-center text-sm pt-4">
                                <form class="d-inline" onsubmit="return confirm('sure to delete this data')" id="deleteAnggota" action="{{ url('management-user/' . $item->id . '/delete') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary text-white">🚫 Hapus</button>
                                </form>
                                <form class="d-inline" action="{{route('register.perform')}}" method="POST" id="createUser">
                                    @csrf
                                    <div class="form-group" hidden style="display:none">
                                        <label for="example-text-input" class="form-control-label">username</label>
                                        <input class="form-control" type="text" name="username" value="{{ $item->username}}" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error('username')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="form-group" hidden style="display:none">
                                        <label for="example-text-input" class="form-control-label">email</label>
                                        <input class="form-control" type="text" name="email" value="{{ $item->email}}" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error('email')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <div class="form-group" hidden style="display:none">
                                        <label for="example-text-input" class="form-control-label">password</label>
                                        <input class="form-control" type="text" name="password" value="{{ $item->password}}" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error('password')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                        @enderror
                                    </div>
                                    <button  type="submit" class="btn btn-primary">🚫 Tolak</button>
                                    <button type="submit" id="submitBtn" class="btn btn-info">🤝Terima</button>
                                </form>
                                <div class="d-inline">
                                    {{-- <button type="submit" class="btn btn-primary">🚫 Tolak</button>
                                    <button type="submit" id="submitBtn" class="btn btn-info">🤝Terima</button> --}}
                                </div>
                            </td>

                        </tr>
                        @php
                        $i++
                        @endphp
                        @endforeach
                        @foreach ($allUsers as $item)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td class="text-center">{{ $item->username }}</td>
                            <td class="text-center">{{ $item->email }}</td>
                            <td class="text-center">{{ $item->updated_at }}</td>
                            <td class="align-middle text-center text-sm pt-4">
                                <form class="d-inline" onsubmit="return confirm('sure to delete this data')" action="{{ url('/users' . $item->id . '/delete') }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-secondary text-white" {{ $item->username == 'admin' ? 'disabled' : ''  }}>🚫 Hapus</button>
                                </form>
                                <a href="{{ route('management.show', $item->id) }}">
                                    <button type="submit" class="btn btn-success "> Info</button>
                                </a>
                            </td>
                        </tr>
                        @php
                        $i++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#submitBtn').on('click', function() {
            $('#createUser').submit();
            $('#deleteAnggota').submit();

        });
    });

</script>
@endsection
