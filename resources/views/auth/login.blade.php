@extends('auth.layouts.main')

@section('content')
    <div class="form-login row justify-content-center">
        <div class="col-md-4">
            <div class="card text-dark">
                <div class="card-body">

                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session()->has('login_error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('login_error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Alamat email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}" aria-describedby="emailHelp">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 text-center">
                            <a href="/register">Belum punya akun?</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection