@extends('dashboard.template_dashboard')
@section('crumb')
Tambah Produk
@endsection

@section('content')
<form class="row g-3" action="{{ route('dashboard/produk/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-12">
        <label for="inputEmail4" class="form-label">Nama Produk</label>
        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="inputEmail4" name="nama_produk" value="{{ old('nama_produk') }}">
        <div class="invalid-feedback">
            @error('nama_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Kategori</label>
        <select class="form-control @error('id_kategori') is-invalid @enderror" aria-label="Default select example" name="id_kategori">
            <option>Pilih Kategori</option>
            @foreach ($kategori as $k)
            <option value="{{ $k->id}}">{{ $k->nama_kategori}}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">
            @error('id_kategori')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputPassword4" class="form-label">Jumlah Produk</label>
        <input type="text" class="form-control @error('jumlah_produk') is-invalid @enderror" id="inputPassword4" name="jumlah_produk" value="{{ old('jumlah_produk') }}">
        <div class="invalid-feedback">
            @error('jumlah_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Harga</label>
        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="inputAddress" name="harga" value="{{ old('harga') }}">
        <div class="invalid-feedback">
            @error('harga')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputZip" class="form-label">Gambar Produk</label>
        <input type="file" class="form-control @error('gambar_produk') is-invalid @enderror" id="inputZip" name="gambar_produk">
        <div class="invalid-feedback">
            @error('gambar_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12 mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection