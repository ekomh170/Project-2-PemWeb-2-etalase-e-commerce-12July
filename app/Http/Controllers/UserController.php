<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

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
        ]);

        $data = $request->only(['name', 'email', 'password', 'role']);
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pengguna.
     */
    public function show(User $user)
    {
        return view('admin.pages.user.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit pengguna.
     */
    public function edit(User $user)
    {
        return view('admin.pages.user.edit', compact('user'));
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
        ]);

        $data = $request->only(['name', 'email', 'role']);

        $user->update($data);

        return redirect()->route('user.index')->with('success', 'Informasi pengguna berhasil diperbarui.');
    }

    /**
     * Menghapus pengguna dari database.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Pengguna berhasil dihapus.');
    }
}
