<?php

namespace App\Http\Controllers;

use App\Models\WebsiteProfile;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = WebsiteProfile::first();
        return view('admin.web.index', compact('setting'));
    }

    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'about' => 'required|max:255',
            'deskripsi' => 'required',
            'no_telepon' => 'numeric|required',
            'email' => 'required|email'
        ]);
        $setting = WebsiteProfile::first();
        $setting->update($validatedData);
        return back()->with('success', 'Berhasil update setting web profile 👏');
    }
}
