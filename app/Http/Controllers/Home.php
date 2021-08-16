<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\kategori;
use App\Models\produk;

class Home extends Controller
{
    public function __construct()
    {
        $this->user = new User();
        #$this->kategori = new kategori();
        #$this->produk = new produk();
    }

    public function index()
    {
        $produk = DB::table('produks')
            ->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')
            ->select('produks.*', 'kategoris.nama_kategori')
            ->paginate(6);

        if (Request('search')) {
            $produk = DB::table('produks')->join('kategoris', 'produks.id_kategori', '=', 'kategoris.id')->where('nama_produk', 'like', "%" . request('search') . "%")->paginate(6);
        }

        return view(
            'home/produk',
            [
                "title" => "Karya Kencana | Produk dan Jasa",
                "produk" => $produk,
                "kategori" => kategori::all(),
                "active" => "produk"
            ]
        );
    }

    public function home_berita()
    {
        $berita = DB::table('beritas')
            ->paginate(6);

        if (Request('search')) {
            $berita = DB::table('beritas')->where('judul', 'like', "%" . request('search') . "%")->orWhere('isi', 'like', "%" . request('search') . "%")->paginate(6);
        }

        return view(
            'home/berita',
            [
                "title" => "Karya Kencana | Berita",
                "berita" => $berita,
                "active" => "berita"
            ]
        );
    }
}
