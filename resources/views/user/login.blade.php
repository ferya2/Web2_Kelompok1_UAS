@extends('layouts.auth.auth')

@section('title', 'Login')

@section('content')
    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <form method="POST" action="/user/login/auth">
        @csrf
        <div class="form-floating">
            <input type="email" class="form-control mb-3" name="email" placeholder="Masukkan Email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>

        <!-- Flex container for alignment -->
        <div class="d-flex justify-content-end mt-4">
            <a class="text-primary fw-bold" href="/user/register">Create an account</a>
        </div>
    </form>
@endsection
