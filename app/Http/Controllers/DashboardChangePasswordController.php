<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardChangePasswordController extends Controller
{
    public function changepassword()
    {
        return view('dashboard.users.changepassword');
    }

    public function ubahpassword(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([

            'old_password' => 'required',
            'password' => 'required',
        ]);

        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('status', 'Password Lama Salah');
        }

        if ($request->password !== $request->confirm_password) {
            return back()->with('status', 'Password baru Dan Konfirmasi Password Tidak Sama');
        }

        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect('/dashboard/changepassword')->with('berhasil', 'Ubah Password Berhasil');
    }
}
