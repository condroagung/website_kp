@extends('dashboard.template_dashboard')
@section('crumb')
Produk
@endsection

@section('content')

@if (session('pesan'))
<div class="alert alert-success" role="alert">
    {{session('pesan')}}
</div>
@endif

<div class="card">
    <div class="card-body">
        <a href="{{ route('dashboard/produk/add') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Produk</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Nama Kategori</th>
                    <th>Harga</th>
                    <th>Jumlah Produk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($produk as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->nama_produk }}
                    </td>
                    <td>{{ $k->nama_kategori }}
                    </td>
                    <td>{{ $k->harga }}
                    </td>
                    <td>{{ $k->jumlah_produk }}
                    </td>
                    <td><a href="/dashboard/produk/edit/{{ $k->id }}" class="btn btn-primary"><i class="fas fa-pen mr-2"></i>Update</a>
                        <a href="/dashboard/produk/delete/{{ $k->id }}" class="btn btn-danger" onclick="return confirm('apakah akan menghapus data ?')"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection