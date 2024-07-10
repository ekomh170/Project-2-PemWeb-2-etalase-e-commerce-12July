<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileAdminController extends Controller
{
    /**
     * Menampilkan detail resource yang ditentukan.
     */
    public function show(string $id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('admin.pages.profiles.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit resource yang ditentukan.
     */
    public function edit(string $id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('admin.pages.profiles.edit', compact('user'));
    }

    /**
     * Memperbarui resource yang ditentukan di storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:6',
            'alamat' => 'nullable|string',
            'nomer_hp' => 'nullable|string',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string',
            'bio' => 'nullable|string',
            'website' => 'nullable|string|url',
            'hobi' => 'nullable|string',
            'linkedin' => 'nullable|string|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        if ($request->filled('password')) {
            $user->password = bcrypt($request->get('password'));
        }
        $user->save();

        $profile = $user->profile;
        $profile->alamat = $request->get('alamat');
        $profile->nomer_hp = $request->get('nomer_hp');
        $profile->tanggal_lahir = $request->get('tanggal_lahir');
        $profile->jenis_kelamin = $request->get('jenis_kelamin');
        $profile->bio = $request->get('bio');
        $profile->website = $request->get('website');
        $profile->hobi = $request->get('hobi');
        $profile->linkedin = $request->get('linkedin');
        
        // Handle photo upload
        if ($request->hasFile('foto')) {
            // Delete the old photo if exists
            if ($profile->foto && Storage::exists('public/' . $profile->foto)) {
                Storage::delete('public/' . $profile->foto);
            }

            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile', $filename);
            $profile->foto = 'profile/' . $filename;
        }

        $profile->save();

        return redirect()->route('profileAdmin.show', ['profileAdmin' => $id])->with('success', 'Profile Admin berhasil diperbarui.');
    }
}
