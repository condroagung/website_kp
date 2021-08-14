<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\kategori;
use App\Models\produk;

class Auth extends Controller
{
    public function __construct()
    {
        $this->user = new User();
        #$this->kategori = new kategori();
        #$this->produk = new produk();
    }

    public function index()
    {
        return view('login', [
            'title' => "Karya Kencana | Login"
        ]);
    }

    public function auth()
    {
        Request()->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'field harus diisi',
            'password.required' => 'field harus diisi',
        ]);

        $user = DB::table('users')->where('email', Request()->email)->first();

        #$user_email = $user->email;

        if ($user == null) {
            return redirect()->route('login')->with('pesan', 'email tidak ditemukan');
        } else {
            $user_pass = $user->password;
            if ($user_pass <> Request()->password) {
                return redirect()->route('login')->with('pesan', 'password salah');
            } else {
                session()->put('is_login', 'true');
                return redirect()->route('dashboard')->with('pesan', 'selamat datang admin');
            }
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}
