<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index'); // blade utama kamu (informasi profile)
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'tanggal_lahir' => 'nullable|date',
            'nomor_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string|max:255',
        ]);

        $user->update($validated);

        return back()->with('success', 'Profil berhasil diperbarui!');
    }
}
