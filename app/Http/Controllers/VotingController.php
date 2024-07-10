<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;
use App\Models\Vote;
use App\Models\User;


class VotingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paslons = Paslon::all();
        return view('dashboard.voting', compact('paslons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // function untuk menyimpan vote
    public function store(Request $request)
{
    // Memeriksa apakah user sudah memberikan vote sebelumnya untuk paslon manapun
    $userId = auth()->id();

    $existingVote = Vote::where('user_id', $userId)->exists();

    if ($existingVote) {
        return redirect()->back()->with('error', 'Anda sudah memberikan vote.');
    }

    // Simpan vote baru
    $vote = new Vote();
    $vote->user_id = $userId;
    $vote->paslon_id = $request->input('vote');
    $vote->save();

    // Update jumlah vote pada paslon
    $paslon = Paslon::find($request->input('vote'));
    if ($paslon) {
        $paslon->jumlahvote += 1;
        $paslon->save();
    }

    // Update status has_voted di tabel users
    $user = User::find($userId);
    if ($user) {
        $user->has_voted = true;
        $user->save();
    }

    return redirect()->back()->with('success', 'Vote berhasil disimpan!');
}




    /**
     * Display the specified resource.
     */

}
