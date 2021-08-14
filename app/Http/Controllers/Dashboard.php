<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\kategori;
use App\Models\berita;
use App\Models\produk;

class Dashboard extends Controller
{
    public function __construct()
    {
        #$this->kategori = new kategori();
        #$this->produk = new produk();
    }

    public function index()
    {
        if (session()->has('is_login')) {
            $kategori = DB::table('kategoris')->count();
            $produk = DB::table('produks')->count();
            return view('dashboard.home_dashboard', [
                "kategori" => $kategori,
                "produk" => $produk
            ]);
        }
        return redirect()->route('login');
    }

    public function product()
    {
        if (session()->has('is_login')) {
            $data['produk'] = DB::table('produks')
                ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
                ->select('produks.*', 'kategoris.nama_kategori')
                ->get();
            return view('dashboard.show_produk', $data);
        }
        return redirect()->route('login');
    }

    public function berita()
    {
        if (session()->has('is_login')) {
            $data['berita'] = berita::all();
            return view('dashboard.show_berita', $data);
        }
        return redirect()->route('login');
    }

    public function add_berita()
    {
        if (session()->has('is_login')) {
            return view('dashboard.add_berita');
        }
        return redirect()->route('login');
    }

    public function add_product()
    {
        if (session()->has('is_login')) {
            $data['kategori'] = kategori::all();
            return view('dashboard.add_produk', $data);
        }
        return redirect()->route('login');
    }

    public function category()
    {
        if (session()->has('is_login')) {
            $data['kategori'] = kategori::all();
            return view('dashboard.show_kategori', $data);
        }
        return redirect()->route('login');
    }

    public function add_category()
    {
        if (session()->has('is_login')) {
            return view('dashboard.add_kategori');
        }
        return redirect()->route('login');
    }

    public function insert_category()
    {
        Request()->validate([
            'nama_kategori' => 'required'
        ], [
            'nama_kategori.required' => 'field harus diisi'
        ]);

        $kategori = new kategori;
        $kategori->nama_kategori = Request()->nama_kategori;
        $kategori->save();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil ditambahkan');
    }

    public function insert_berita()
    {
        Request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar_berita' => 'mimes:jpg,jpeg,bmp,png'
        ], [
            'judul.required' => 'field harus diisi',
            'isi.required' => 'field harus diisi',
            'gambar_produk.mimes' => 'format gambar harus jpg, jpeg, bmp, png'
        ]);

        $berita = new berita;

        $berita->judul = Request()->judul;
        $berita->isi = Request()->isi;

        if (Request()->gambar_berita <> "") {
            $file = Request()->gambar_berita;
            $filename = "Berita_" . rand(1, 1000000) . '.' . $file->extension();
            $file->move(public_path('product_image'), $filename);

            $berita->gambar_berita = $filename;
        }
        $berita->save();

        return redirect()->route('dashboard/berita')->with('pesan', 'data berita berhasil ditambahkan');
    }

    public function insert_product()
    {
        Request()->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'jumlah_produk' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar_produk' => 'required|mimes:jpg,jpeg,bmp,png'
        ], [
            'nama_produk.required' => 'field harus diisi',
            'id_kategori.required' => 'field harus diisi',
            'jumlah_produk.numeric' => 'field harus angka',
            'jumlah_produk.required' => 'field harus diisi',
            'harga.required' => 'field harus diisi',
            'harga.numeric' => 'field harus angka',
            'gambar_produk.required' => 'field harus diisi',
            'gambar_produk.mimes' => 'format gambar harus jpg, jpeg, bmp, png'
        ]);

        $produk = new produk;

        $produk->nama_produk = Request()->nama_produk;
        $produk->id_kategori = Request()->id_kategori;
        $produk->jumlah_produk = Request()->jumlah_produk;
        $produk->harga = Request()->harga;
        $file = Request()->gambar_produk;
        $filename = "karyaKencana_" . rand(1, 1000000) . '.' . $file->extension();
        $file->move(public_path('product_image'), $filename);

        $produk->gambar_produk = $filename;
        $produk->save();

        return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil ditambahkan');
    }

    public function edit_category($id_kategori)
    {
        if (session()->has('is_login')) {
            $data['kategori'] = kategori::where('id', $id_kategori)->get();
            return view('dashboard.edit_kategori', $data);
        }
        return redirect()->route('login');
    }

    public function edit_berita($id_berita)
    {
        if (session()->has('is_login')) {
            $data['berita'] = berita::where('id', $id_berita)->get();
            return view('dashboard.edit_berita', $data);
        }
        return redirect()->route('login');
    }

    public function edit_product($id_product)
    {
        if (session()->has('is_login')) {
            $data['produk'] = produk::where('id', $id_product)->get();
            $data['kategori'] = kategori::all();
            return view('dashboard.edit_produk', $data);
        }
        return redirect()->route('login');
    }

    public function update_category()
    {
        $kategori = kategori::find(Request()->id_kategori);
        $kategori->nama_kategori = Request()->nama_kategori;
        $kategori->save();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dirubah');
    }

    public function update_berita()
    {
        Request()->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar_berita' => 'mimes:jpg,jpeg,bmp,png'
        ], [
            'judul.required' => 'field harus diisi',
            'isi.required' => 'field harus diisi',
            'gambar_produk.mimes' => 'format gambar harus jpg, jpeg, bmp, png'
        ]);

        $berita = berita::find(Request()->id_berita);
        $berita->judul = Request()->judul;
        $berita->isi = Request()->isi;

        if (Request()->gambar_berita <> "") {
            $file = Request()->gambar_berita;
            $filename = "Berita_" . rand(1, 1000000) . '.' . $file->extension();
            $file->move(public_path('product_image'), $filename);

            $berita->gambar_berita = $filename;
        }
        $berita->save();

        return redirect()->route('dashboard/berita')->with('pesan', 'data berita berhasil dirubah');
    }

    public function update_product()
    {
        Request()->validate([
            'nama_produk' => 'required',
            'id_kategori' => 'required',
            'jumlah_produk' => 'required|numeric',
            'harga' => 'required|numeric',
            'gambar_produk' => 'mimes:jpg,jpeg,bmp,png'
        ], [
            'nama_produk.required' => 'field harus diisi',
            'id_kategori.required' => 'field harus diisi',
            'jumlah_produk.numeric' => 'field harus angka',
            'jumlah_produk.required' => 'field harus diisi',
            'harga.required' => 'field harus diisi',
            'harga.numeric' => 'field harus angka',
            'gambar_produk.mimes' => 'format gambar harus jpg, jpeg, bmp, png'
        ]);
        $produk = produk::find(Request()->id_produk);
        $produk->nama_produk = Request()->nama_produk;
        $produk->id_kategori = Request()->id_kategori;
        $produk->jumlah_produk = Request()->jumlah_produk;
        $produk->harga = Request()->harga;

        if (Request()->gambar_produk <> "") {
            $file = Request()->gambar_produk;
            $filename = "karyaKencana_" . rand(1, 1000000) . '.' . $file->extension();
            $file->move(public_path('product_image'), $filename);

            $produk->gambar_produk = $filename;
        }
        $produk->save();

        return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil dirubah');
    }

    public function delete_category($id_kategori)
    {
        if (session()->has('is_login')) {
            $kategori = kategori::find($id_kategori);
            $kategori->delete();

            return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dihapus');
        }
        return redirect()->route('login');
    }

    public function delete_product($id_product)
    {
        if (session()->has('is_login')) {
            $kategori = produk::find($id_product);
            $kategori->delete();

            return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil dihapus');
        }
        return redirect()->route('login');
    }

    public function delete_berita($id_berita)
    {
        if (session()->has('is_login')) {
            $berita = berita::find($id_berita);
            $berita->delete();

            return redirect()->route('dashboard/berita')->with('pesan', 'data berita berhasil dihapus');
        }
        return redirect()->route('login');
    }
}
