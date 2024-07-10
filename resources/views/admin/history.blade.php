@extends('layouts.home.app')

@section('title', 'Manage Paslon')

@section('content')

<div class="container">
    <h1 class="my-4">Riwayat Voting</h1>

    <!-- Tabel Riwayat Voting -->
    <h2 class="mb-3">Tabel Riwayat Voting</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Paslon</th>
                <th>Voter</th>
                <th>Waktu Vote</th>
            </tr>
        </thead>
        <tbody>
            @foreach($votes as $vote)
            <tr>
                <td>{{ $vote->paslon->nama }}</td>
                <td>{{ $vote->user->name }}</td>
                <td>{{ $vote->created_at->format('d M Y H:i:s') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection