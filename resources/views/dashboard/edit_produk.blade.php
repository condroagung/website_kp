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
        <label for="inputEmail4" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="inputEmail4" value="{{ $k->nama_produk }}">
        <div class="invalid-feedback">
            @error('nama_produk')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Kategori</label>
        <select class="form-control @error('id_kategori') is-invalid @enderror" aria-label="Default select example" name="id_kategori">
            @foreach ($kategori as $j)
            @if ($j->id == $k->id_kategori )
            <option value="{{ $j->id}}" selected>{{ $j->nama_kategori}}</option>
            @else
            <option value="{{ $j->id}}">{{ $j->nama_kategori}}</option>
            @endif
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
    <div class="col-md-6 mt-3">
        <label for="inputAddress" class="form-label">Gambar</label>
        <img src="{{ url('product_image/'.$k->gambar_produk) }}" alt="" class="img-fluid">
    </div>
    <div class="col-md-6 mt-5">
        <input type="file" class="form-control @error('gambar_produk') is-invalid @enderror" id="inputZip" name="gambar_produk">
        <div class="invalid-feedback">
            @error('gambar_produk')
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