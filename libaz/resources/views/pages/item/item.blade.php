@section('topTitle', 'Book Management')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Book Management'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="card mx-4 my-3">
        <div class="card-header d-flex justify-content-between">
            <h5 class="mb-0">Book Management</h5>
            <a href="{{ route('book.create') }}" class="btn btn-dark btn-sm float-end mb-0">Add Book</a>
        </div>
        <div class="card-body p-3">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-start text-secondary text-xxs font-weight-bolder opacity-7 pe-0">
                                <input type="checkbox" name="" onclick="javascript:checkAll(this)">
                            </th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                id</th>
                            <th class="ps-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Code </th>
                            <th class="ps-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Judul buku</th>
                            <th class="ps-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($allItem as $item)
                            <tr>
                                <td>
                                    <p class="ps-3 text-xs font-weight-bold mb-0">
                                        <input type="checkbox" name="input" id="c{{ $i }}"
                                            value="{{ $item->id }}">
                                    </p>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">{{ $i }}.</p>
                                </td>
                                <td class="align-middle text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->kode }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->buku->name }}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('book.edit', $item->id) }}"
                                        class="btn   bg-gradient-success mb-0 font-weight-bold text-xs">
                                        <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        <span class="btn-inner--text"> Edit</span>
                                    </a>
                                    <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                        action="{{ url('book/' . $item->id . '/delete') }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn   btn-danger mb-0 font-weight-bold text-xs">
                                            <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                            <span class="btn-inner--text"></span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function checkAll(o) {
            var boxes = document.getElementsByName("input");
            for (var x = 0; x < boxes.length; x++) {
                var obj = boxes[x];
                if (obj.type == "checkbox") {
                    if (obj.name != "check")
                        obj.checked = o.checked;
                }
            }
        }
    </script>
@endsection
