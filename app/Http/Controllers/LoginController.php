<?php

namespace App\Http\Controllers;

use App\Models\Password;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnValue;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotpassword()
    {
        return view('login.forgotpassword', [
            'title' => 'forgotpassword',
            'active' => 'forgot'
        ]);
    }

    public function kirimEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $email = $request->email;
        $user = User::where('email', '=', $email)->first();
        if (!$user) {
            return redirect('/login/forgotpassword')->with('gagal', 'Email Tidak Terdaftar');
        }
        if ($user) {
            $token = Str::random(60);
            $user = [
                'email' => $email,
                'token' => $token
            ];

            Password::create($user);


            $forgot['email'] = $email;
            $forgot['token'] = $token;

            Mail::to($email)->send(new \App\Mail\SendEmail($forgot));
        }
        return redirect('/login/forgotpassword')->with('info', 'berhasil');
    }

    public function resetpassword($token, $email)
    {
        $user = Password::where('token', '=', $token)->where('email', '=', $email)->first();
        $username = User::where('email', '=', $email)->first('name');
        if ($user) {
            return view('login.resetpassword', [
                'title' => 'resetpassword',
                'active' => 'resetpassword',
                'name' => $username->name,
                'email' => $email

            ]);
        }

        return redirect('/login')->with('gagal', 'Link Mungkin Sudah Pernah di Pakai, Silahkan Ajukan Lupa Password');
    }

    public function newpassword(Request $request)
    {
        if ($request == null) {
            return redirect('/login');
        }
        $email = $request->email;

        $validatedData = $request->validate([
            'password' => 'required',
        ]);

        if ($request->password !== $request->konfirmasipassword) {
            return back()->with('status', 'Password baru Dan Konfirmasi Password Tidak Sama');
        }

        User::where('email', '=', $email)->update([
            'password' => Hash::make($request->password)
        ]);
        $delete = Password::where('email', '=', $email)->get();
        Password::destroy($delete);

        return redirect('/login')->with('success', 'Berhasil Membuat Password Baru, Silahkan Login!');
    }
}
