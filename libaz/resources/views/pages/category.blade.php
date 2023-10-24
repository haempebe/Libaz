@section('topTitle', 'Category')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Category'])
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
                                            name</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Make at</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="ps-3 text-xs font-weight-bold mb-0">1</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">Religious</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="javascript:;"
                                                class="btn btn-xs bg-gradient-success mb-0 font-weight-bold text-xs">
                                                <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                                <span class="btn-inner--text"> Edit</span>
                                            </a>
                                            <a href="javascript:;"
                                                class="btn btn-xs btn-danger mb-0 font-weight-bold text-xs">
                                                <span class="btn-inner--icon"><i class="fas fa-trash-alt"></i></span>
                                                <span class="btn-inner--text"> Delete</span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <form role="form" method="POST" action=""
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="CYtRh5L5EHvlIDQqqeovjLZXy8EYCCdirewrEOiV"
                            autocomplete="off">
                        <div class="card-header border-radius-lg pb-0">
                            <p class="mb-0">+ New Category</p>
                        </div>
                        <div class="card-body pb-0">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Name</label>
                                    <input class="form-control" type="text" name="name" value=""
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
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
