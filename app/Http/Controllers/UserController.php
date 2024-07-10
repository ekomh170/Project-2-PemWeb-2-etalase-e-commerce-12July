<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Menampilkan halaman daftar pengguna.
     */
    public function index()
    {
        return view('admin.pages.user.index');
    }

    /**
     * Mengambil data pengguna untuk DataTables.
     */
    public function getData()
    {
        $users = User::select(['id', 'name', 'email', 'role', 'created_at']);

        return DataTables::of($users)
            ->addIndexColumn() // Menambahkan kolom DT_RowIndex
            ->addColumn('action', function ($item) {
                return view('admin.pages.user.actions', compact('item'))->render();
            })
            ->make(true);
    }

    /**
     * Menampilkan form untuk membuat pengguna baru.
     */
    public function create()
    {
        return view('admin.pages.user.create');
    }

    /**
     * Menyimpan pengguna baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'role' => 'required|in:admin,member',
            'alamat' => 'nullable|string|max:255',
            'nomer_hp' => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'jenis_kelamin' => 'nullable|in:Laki-Laki,Perempuan',
            'bio' => 'nullable|string',
            'website' => 'nullable|string|max:255',
            'hobi' => 'nullable|string',
            'linkedin' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['name', 'email', 'password', 'role']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        $profileData = $request->only(['alamat', 'nomer_hp', 'tanggal_lahir', 'jenis_kelamin', 'bio', 'website', 'hobi', 'linkedin']);
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile', $filename);
            $profileData['foto'] = 'profile/' . $filename;
        }

        $user->profile()->create($profileData);

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pengguna.
     */
    public function show(User $user)
    {
        $profile = $user->profile;
        return view('admin.pages.user.show', compact('user', 'profile'));
    }

    /**
     * Menampilkan form untuk mengedit pengguna.
     */
    public function edit(User $user)
    {
        $profile = $user->profile;
        return view('admin.pages.user.edit', compact('user', 'profile'));
    }

    /**
     * Memperbarui informasi pengguna.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,member',
            'alamat' => 'nullable|string|max:255',
            'nomer_hp' => 'nullable|string|max:15',
            'tanggal_lahir' => 'nullable|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'jenis_kelamin' => 'nullable|in:Laki-Laki,Perempuan',
            'bio' => 'nullable|string',
            'website' => 'nullable|string|max:255',
            'hobi' => 'nullable|string',
            'linkedin' => 'nullable|string|max:255',
        ]);

        $data = $request->only(['name', 'email', 'role']);
        $user->update($data);

        $profileData = $request->only(['alamat', 'nomer_hp', 'tanggal_lahir', 'jenis_kelamin', 'bio', 'website', 'hobi', 'linkedin']);
        
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/profile', $filename);
            $profileData['foto'] = 'profile/' . $filename;
        }

        $user->profile()->updateOrCreate(['user_id' => $user->id], $profileData);

        return redirect()->route('user.index')->with('success', 'Informasi pengguna berhasil diperbarui.');
    }

    /**
     * Menghapus pengguna dan profil dari database.
     */
    public function destroy(User $user)
    {
        // Hapus foto profil jika ada
        if ($user->profile && $user->profile->foto) {
            Storage::delete('public/' . $user->profile->foto);
        }

        // Hapus profil pengguna
        $user->profile()->delete();
        
        // Hapus pengguna
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Pengguna dan profil berhasil dihapus.');
    }
}
