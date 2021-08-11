@extends('dashboard.template_dashboard')
@section('crumb')
Edit Produk
@endsection

@section('content')
<form class="row g-3" action="{{ route('dashboard/produk/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($produk as $k)
    <div class="col-md-6">
        <input type="hidden" name="id_produk" value="{{ $k->id }}">
        <label for="inputEmail4" class="form-label">Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" id="inputEmail4" value="{{ $k->nama_produk }}">
        <div class="invalid-feedback">
            @error('nama_produk')
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