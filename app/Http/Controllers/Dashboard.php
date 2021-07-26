<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('dashboard.show_produk');
    }

    public function add_product()
    {
        return view('dashboard.add_produk');
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

    public function edit_category($id_kategori)
    {
        $data['kategori'] = kategori::where('id', $id_kategori)->get();
        return view('dashboard.edit_kategori', $data);
    }

    public function update_category()
    {
        $kategori = kategori::find(Request()->id_kategori);
        $kategori->nama_kategori = Request()->nama_kategori;
        $kategori->save();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dirubah');
    }

    public function delete_category($id_kategori)
    {
        $kategori = kategori::find($id_kategori);
        $kategori->delete();

        return redirect()->route('dashboard/kategori')->with('pesan', 'data kategori berhasil dihapus');
    }
}
