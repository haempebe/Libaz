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
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                id</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Book Name </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Writer</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Publisher</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Category</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Amount</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Cover</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($allBuku as $item)
                            <tr>
                                <td>
                                    <p class="ps-3 text-xs font-weight-bold mb-0">{{ $i }}.</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->penulis->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->penerbit->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $item->kategori->name }}</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">
                                        @php
                                            $copies = App\Models\Item::where('buku_id', $item->id)->count();
                                        @endphp
                                        {{$copies}}
                                    </span>
                                </td>
                                <td class="align-middle text-center">
                                    <img src="{{ asset('img/cover/' . $item->cover) }}"
                                        class="border-radius-lg shadow-sm height-100 w-auto" alt="">
                                </td>
                                <td class="align-middle text-center">
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
