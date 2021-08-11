@extends('dashboard.template_dashboard')
@section('crumb')
Edit Produk
@endsection

@section('content')
<form class="row g-3" action="{{ route('dashboard/produk/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($produk as $k)
    <div class="col-12">
        <input type="hidden" name="id_produk" value="{{ $k->id }}">
        <input type="hidden" name="id_kategori" value="{{ $k->id_kategori }}">
        <label for="inputEmail4" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="inputEmail4" value="{{ $k->nama_produk }}">
        <div class="invalid-feedback">
            @error('nama_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputPassword4" class="form-label">Jumlah Produk</label>
        <input type="text" class="form-control @error('jumlah_produk') is-invalid @enderror" id="inputPassword4" name="jumlah_produk" value="{{ $k->jumlah_produk }}">
        <div class="invalid-feedback">
            @error('jumlah_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Harga</label>
        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="inputAddress" name="harga" value="{{ $k->harga }}">
        <div class="invalid-feedback">
            @error('harga')
            {{ $message }}
            @enderror
        </div>
    </div>
    @endforeach
    <div class="col-12 mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection