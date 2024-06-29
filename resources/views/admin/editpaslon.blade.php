@extends('layouts.home.app')

@section('title', 'Edit Paslon')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Paslon</h1>
        <form action="{{ route('admin.managepaslon.update', $paslon->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" class="form-control">
                <img src="{{ asset('storage/' . $paslon->gambar) }}" alt="{{ $paslon->nama }}" width="100"
                    class="mt-2">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $paslon->nama }}" required>
            </div>
            <div class="form-group">
                <label for="visi">Visi</label>
                <textarea name="visi" class="form-control" required>{{ $paslon->visi }}</textarea>
            </div>
            <div class="form-group">
                <label for="misi">Misi</label>
                <textarea name="misi" class="form-control" required>{{ $paslon->misi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
