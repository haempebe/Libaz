@extends('layouts.app')

@section('content')

    <main class="main-content mt-9 bg-dark">
        <div class="container ">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <a href="/">
                                <img src="./img/favicon.png" class="navbar-brand-img" style="max-height: 150px" alt="main_logo">
                            </a>

                            <h3>Reset Password</h3>
                        </div>
                                <div class="card-body">
                                    <form role="form" method="POST" action="{{ route('reset.perform') }}">
                                        @csrf
                                        @method('post')
                                        <div class="flex flex-col mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" value="{{ old('email') }}" aria-label="Email">
                                            @error('email') <p class="text-danger text-xs pt-1"> {{$message}} </p>@enderror
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-dark btn-lg w-100 mt-4 mb-0">Send Reset Link</button>
                                        </div>
                                    </form>
                                </div>
                                <div id="alert">
                                    @include('components.alert')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
