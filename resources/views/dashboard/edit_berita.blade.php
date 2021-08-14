@extends('dashboard.template_dashboard')
@section('crumb')
Edit Berita
@endsection

@section('content')
<form class="row g-3" action="{{ route('dashboard/berita/update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @foreach ($berita as $k)
    <div class="col-12">
        <label for="inputEmail4" class="form-label">Judul</label>
        <input type="hidden" name="id_berita" value="{{ $k->id }}">
        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="inputEmail4" name="judul" value="{{ $k->judul }}">
        <div class="invalid-feedback">
            @error('judul')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-12">
        <label for="inputPassword4" class="form-label">Isi</label>
        <textarea class="form-control @error('isi') is-invalid @enderror" id="inputPassword4" name="isi" value="">{{ $k->isi  }}</textarea>
        <div class="invalid-feedback">
            @error('isi')
            {{ $message }}
            @enderror
        </div>
    </div>
    <div class="col-md-6 mt-3">
        <label for="inputAddress" class="form-label">Gambar</label>
        <img src="{{ url('product_image/'.$k->gambar_berita) }}" alt="" class="img-fluid">
    </div>
    <div class="col-md-6 mt-5">
        <label for="inputZip" class="form-label">Gambar</label>
        <input type="file" class="form-control @error('gambar_berita') is-invalid @enderror" id="inputZip" name="gambar_berita">
        <div class="invalid-feedback">
            @error('gambar_berita')
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