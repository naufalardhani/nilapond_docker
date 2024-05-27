<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $admins = [
        'admin' => '123',
        'naufalardhani' => '123',
        // Tambahkan lebih banyak admin sesuai kebutuhan
    ];

    public function login() {
        return view('admin.login');
    }

    public function auth_login(Request $request) {
        $iusername = $request->input('username');
        $ipassword = $request->input('password');

        if (array_key_exists($iusername, $this->admins) && $this->admins[$iusername] === $ipassword) {
            // Mengatur variabel sesi
            Session::put('username', $iusername);
            // Redirect dengan sesi berhasil diatur
            return redirect('admin/')->with('success', 'Login berhasil!');
        } elseif (array_key_exists($iusername, $this->admins) && $this->admins[$iusername] !== $ipassword) {
            return redirect(route('login'))->with('error', 'Password salah!');
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            return redirect()->back()->with('error', 'Username atau password salah!');
        }
    }

    public function auth_logout() {
        // Menghapus variabel sesi yang digunakan untuk menyimpan informasi login
        Session::forget('username');
        
        // Redirect ke halaman login atau halaman lain yang sesuai
        return redirect('admin/login')->with('success', 'Anda telah berhasil logout.');
    }
}
