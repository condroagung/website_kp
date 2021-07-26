@extends('dashboard.template_dashboard')
@section('crumb')
Tambah Kategori
@endsection

@section('content')

<form class="row g-3" action="{{ route('dashboard/kategori/insert') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" id="inputEmail4" value="{{ old('nama_kategori') }}">
        <div class="invalid-feedback">
            @error('nama_kategori')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12 mt-3 mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection