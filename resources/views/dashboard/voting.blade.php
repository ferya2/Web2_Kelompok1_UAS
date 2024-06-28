@extends('layouts.home.app')

@section('title', 'Voting')

@section('content')
    <div class="container">
        <h1 class="my-4">Voting</h1>
        <p>Pilih kandidat yang Anda dukung dengan memilih salah satu opsi di bawah ini:</p>
        <form action="{{ url('/submit-vote') }}" method="post">
            @csrf
            <div class="row">
                <!-- Candidate 1 -->
                <div class="col-md-4">
                    <div class="card shadow-lg mb-4">
                        <div class="card-img-wrapper ">
                            <img src="../assets/images/logos/votingapp-logo.png" class="card-img-top" alt="Foto Kandidat 1">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Kandidat 1</h5>
                            <p class="card-text"><strong>Visi:</strong> Visi dari Kandidat 1.</p>
                            <p class="card-text"><strong>Misi:</strong> Misi dari Kandidat 1.</p>
                            <button type="submit" name="vote" value="Candidate 1"
                                class="btn btn-primary w-100 mt-2">Vote</button>
                        </div>
                    </div>
                </div>
                <!-- Candidate 2 -->
                <div class="col-md-4">
                    <div class="card shadow-lg mb-4">
                        <div class="card-img-wrapper ">
                            <img src="../assets/images/logos/votingapp-logo.png" class="card-img-top" alt="Foto Kandidat 2">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Kandidat 2</h5>
                            <p class="card-text"><strong>Visi:</strong> Visi dari Kandidat 2.</p>
                            <p class="card-text"><strong>Misi:</strong> Misi dari Kandidat 2.</p>
                            <button type="submit" name="vote" value="Candidate 2"
                                class="btn btn-primary w-100 mt-2">Vote</button>
                        </div>
                    </div>
                </div>
                <!-- Candidate 3 -->
                <div class="col-md-4">
                    <div class="card shadow-lg mb-4">
                        <div class="card-img-wrapper">
                            <img src="../assets/images/logos/votingapp-logo.png" class="card-img-top" alt="Foto Kandidat 3">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title">Kandidat 3</h5>
                            <p class="card-text"><strong>Visi:</strong> Visi dari Kandidat 3.</p>
                            <p class="card-text"><strong>Misi:</strong> Misi dari Kandidat 3.</p>
                            <button type="submit" name="vote" value="Candidate 3"
                                class="btn btn-primary w-100 mt-2">Vote</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            transition: box-shadow 0.8s;
        }

        .card:hover {
            box-shadow: 2 4rem 1rem rgba(0, 0, 0, 5);
        }

        /* Hapus atau ubah gaya ini */
        /* .card-img-wrapper {
                                            padding: 15px;
                                            background-color: grey;
                                        } */

        .card-img-top {
            max-width: 100%;
            height: auto;
        }
    </style>
@endsection
