@section('topTitle', 'Profile')
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
<div class="mx-4">
    <div class="p-3">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xxl position-relative">
                    <img src="/img/team-1.jpg" alt="profile_image" class="rounded-circle">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100 position-relative">
                    <h5 class="mb-1 text-white">
                        username
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm text-white">
                        email
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="alert">
    @include('components.alert')
</div>
<div class="container-fluid pt-7">
    <div class="row">
        <div class="col-md-8">
            <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label text-lg">Nama Lengkap</label>
                                <input class="form-control" type="text" name="address" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label text-lg">Kelas & Jurusan</label>
                                <input class="form-control" type="text" name="address" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label text-lg">Tanggal Lahir</label>
                                <input class="form-control" type="text" name="address" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label text-lg">Alamat</label>
                                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                            </div>
                        </div>
                        <div data-text="Select your file!" class="file-upload-wrapper ">
                            <input name="file-upload-field" type="file" class="file-upload-field">
                        </div>
                    </div>
                    <button class="btn btn-dark mt-3" type="submit">Button</button>
                </div>
            </form>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection