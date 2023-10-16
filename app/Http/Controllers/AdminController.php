<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::role('Admin')->orderBy('created_at', 'desc')->get();
        return view('admin.admin.index', compact('admins'));
    }

    public function create()
    {
        return view('admin.admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed']
        ]);

        $validatedData['password']  = bcrypt($request->password);
        $user = User::create($validatedData);
        $user->assignRole('Admin');

        return redirect('/admin')->with('success', 'Berhasil Tambah Admin');
    }

    public function edit(User $user)
    {
        return view('admin.admin.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email,' . $user->id],

        ]);
        if ($request->password) {
            $request->validate([
                'password' => ['required', 'confirmed']
            ]);
            $validatedData['password'] = bcrypt($request->password);
        }
        $user->update($validatedData);

        return redirect('/admin')->with('success', 'Berhasil Mengubah Admin');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Berhasil Hapus Admin');
    }
}
