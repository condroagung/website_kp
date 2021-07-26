@extends('dashboard.template_dashboard')
@section('crumb')
Edit Kategori
@endsection

@section('content')
<form class="row g-3" action="{{ route('dashboard/kategori/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($kategori as $k)
    <div class="col-md-6">
        <input type="hidden" name="id_kategori" value="{{ $k->id }}">
        <label for="inputEmail4" class="form-label">Nama Kategori</label>
        <input type="text" name="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" id="inputEmail4" value="{{ $k->nama_kategori }}">
        <div class="invalid-feedback">
            @error('nama_kategori')
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