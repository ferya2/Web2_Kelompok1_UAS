@extends('layouts.auth.auth')

@section('title', 'Register')

@section('content')
    <form id="registerForm" method="POST" action="{{ url('/user/register/store') }}">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control mb-3" name="name" placeholder="Masukkan Nama" required>
            <label for="floatingInput">Nama</label>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control mb-3" name="email" placeholder="Masukkan Email" required>
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control mb-3" name="password" placeholder="Masukkan Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        <!-- Flex container for alignment -->
        <div class="d-flex justify-content-end mt-4">
            <a class="text-primary fw-bold" href="{{ url('/user/login') }}">Sudah punya akun?</a>
        </div>

        @if (session('account_exists'))
            <div class="alert alert-danger mt-3" role="alert">
                Akun dengan email tersebut sudah terdaftar.
            </div>
        @endif
    </form>
@endsection
