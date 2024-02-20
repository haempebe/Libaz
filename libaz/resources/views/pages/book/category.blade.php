@section('topTitle', 'Category')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Category'])
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            id</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Category Name </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Make at</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($allCategory as $item)
                                        <tr>
                                            <td>
                                                <p class="ps-3 text-xs font-weight-bold mb-0">{{ $i }}.</p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->name }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $item->updated_at }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <a href="javascript:;"
                                                    class="btn btn-xs bg-gradient-success mb-0 font-weight-bold text-xs">
                                                    <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                                    <span class="btn-inner--text"> Edit</span>
                                                </a>
                                                <form class="d-inline" onsubmit="return confirm('sure to delete this data')"
                                                    action="{{ url('book/category/' . $item->id . '/delete') }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-xs btn-danger mb-0 font-weight-bold text-xs">
                                                        <span class="btn-inner--icon"><i
                                                                class="fas fa-trash-alt"></i></span>
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
            </div>
            <div class="col-md-4">
                <div class="card">
                    <form method="POST" action="{{ route('book.category.perform') }}">
                        @csrf
                        <div class="card-header border-radius-lg pb-0">
                            <p class="mb-0">+ Add New Category</p>
                        </div>
                        <div class="card-body pb-0">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="name" value="">
                                @error('name')
                                    <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-dark btn-sm mb-0 w-100">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
