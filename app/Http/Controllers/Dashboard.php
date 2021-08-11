<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\kategori;
use App\Models\produk;

class Dashboard extends Controller
{
    public function __construct()
    {
        $this->user = new User();
        #$this->kategori = new kategori();
        #$this->produk = new produk();
    }

    public function index()
    {
        return view('dashboard.home_dashboard');
    }

    public function product()
    {
        $data['produk'] = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->get();
        return view('dashboard.show_produk', $data);
    }

    public function add_product()
    {
        $data['kategori'] = kategori::all();
        return view('dashboard.add_produk', $data);
    }

    public function category()
    {
        $data['kategori'] = kategori::all();
        return view('dashboard.show_kategori', $data);
    }

    public function add_category()
    {
        return view('dashboard.add_kategori');
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
        $filename = date('Y/m/d') . rand(1, 10000) . '.' . $file->extension();
        $file->move(public_path('product_image'), $filename);

        $produk->gambar_produk = $filename;
        $produk->save();

        return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil ditambahkan');
    }

    public function edit_category($id_kategori)
    {
        $data['kategori'] = kategori::where('id', $id_kategori)->get();
        return view('dashboard.edit_kategori', $data);
    }

    public function edit_product($id_product)
    {
        $data['produk'] = produk::where('id', $id_product)->get();
        return view('dashboard.edit_produk', $data);
    }

    public function update_category()
    {
        $kategori = kategori::find(Request()->id_kategori);
        $kategori->nama_kategori = Request()->nama_kategori;
        $kategori->save();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dirubah');
    }

    public function update_product()
    {
        $produk = produk::find(Request()->id_produk);
        $produk->nama_produk = Request()->nama_produk;
        $produk->id_kategori = Request()->id_kategori;
        $produk->jumlah_produk = Request()->jumlah_produk;
        $produk->harga = Request()->harga;
        $produk->save();

        return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil dirubah');
    }

    public function delete_category($id_kategori)
    {
        $kategori = kategori::find($id_kategori);
        $kategori->delete();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dihapus');
    }

    public function delete_product($id_product)
    {
        $kategori = produk::find($id_product);
        $kategori->delete();

        return redirect()->route('dashboard/produk')->with('pesan', 'data produk berhasil dihapus');
    }
}
