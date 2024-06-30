@extends('layouts.home.app')

@section('title', 'Detail Paslon')

@section('content')
    <div class="container">
        <h1 class="my-4">Detail Paslon</h1>
        <p>Lihat profil dan kebijakan masing-masing kandidat:</p>
        <div class="row">
            @foreach ($paslons as $paslon)
                <div class="col-md-4">
                    <div class="card shadow-lg mb-4 h-100">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('storage/' . $paslon->gambar) }}" class="card-img-top"
                                alt="Foto {{ $paslon->nama }}">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-center nama">{{ $paslon->nama }}</h5>
                            <div class="card-text">
                                <p class="section-title"><strong>Visi:</strong></p>
                                <ul class="list-unstyled section-content visi">
                                    <li>{{ $paslon->visi }}</li>
                                </ul>
                                <p class="section-title"><strong>Misi:</strong></p>
                                <ul class="list-unstyled section-content misi">
                                    @foreach (explode("\n", $paslon->misi) as $misi)
                                        <li>{{ $misi }}</li>
                                    @endforeach
                                </ul>
                                <p class="section-title"><strong>Program Kerja:</strong></p>
                                <ul class="list-unstyled section-content program-kerja">
                                    @foreach (explode("\n", $paslon->programkerja) as $program)
                                        <li>{{ $program }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card-img-wrapper {
            width: 100%;
            height: 200px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-img-top {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-body {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .nama {
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .visi,
        .misi,
        .program-kerja,
        .media-sosial {
            height: 100px;
            display: flex;
            align-items: center;
        }

        .section-title {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .section-content {
            padding-left: 20px;
        }
    </style>
@endsection
