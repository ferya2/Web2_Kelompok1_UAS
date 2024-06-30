@extends('layouts.home.app')

@section('title', 'Manage Paslon')

@section('content')
    <div class="container">
        <h1 class="my-4">Manage Paslon</h1>

        <!-- Form untuk menambahkan paslon baru -->
        <div class="card mb-4">
            <div class="card-header">
                Tambah Paslon
            </div>
            <div class="card-body">
                <form action="{{ route('admin.managepaslon.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea name="visi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea name="misi" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="programkerja">Program Kerja</label>
                        <textarea name="programkerja" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>

        <!-- Tabel untuk menampilkan daftar paslon -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Program kerja</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paslons as $paslon)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/' . $paslon->gambar) }}" alt="{{ $paslon->nama }}" width="100">
                        </td>
                        <td>{{ $paslon->nama }}</td>
                        <td>{{ $paslon->visi }}</td>
                        <td>{!! nl2br(e($paslon->misi)) !!}</td>
                        <td>{{ $paslon->programkerja }}</td>
                        <td>
                            <a href="{{ route('admin.managepaslon.edit', $paslon->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.managepaslon.destroy', $paslon->id) }}" method="post"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
