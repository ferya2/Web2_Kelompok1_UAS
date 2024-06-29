<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paslon;

class AdminPaslonController extends Controller
{
    // Show Manage Paslon
    public function index()
    {
        $paslons = Paslon::all();
        return view('admin.managepaslon', compact('paslons'));
    }
    // Create Paslon
    public function store(Request $request)
{
    $request->validate([
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nama' => 'required',
        'visi' => 'required',
        'misi' => 'required',
    ]);

    $imagePath = $request->file('gambar')->store('images', 'public');

    Paslon::create([
        'gambar' => $imagePath,
        'nama' => $request->nama,
        'visi' => $request->visi,
        'misi' => $request->misi,
    ]);

    return redirect()->route('admin.managepaslon')->with('success', 'Paslon berhasil ditambahkan');
}

    // Edit Paslon
    public function edit($id)
    {
        $paslon = Paslon::findOrFail($id);
        return view('admin.editpaslon', compact('paslon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $paslon = Paslon::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('images', 'public');
            $paslon->gambar = $imagePath;
        }

        $paslon->nama = $request->nama;
        $paslon->visi = $request->visi;
        $paslon->misi = $request->misi;

        $paslon->save();

        return redirect()->route('admin.managepaslon')->with('success', 'Paslon berhasil diupdate');
    }
    // Delete Paslon
    public function destroy($id)
    {
        $paslon = Paslon::findOrFail($id);
        $paslon->delete();

        return redirect()->route('admin.managepaslon')->with('success', 'Paslon berhasil dihapus');
    }
}
