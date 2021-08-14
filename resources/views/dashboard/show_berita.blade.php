@extends('dashboard.template_dashboard')
@section('crumb')
Berita
@endsection

@section('content')

@if (session('pesan'))
<div class="alert alert-success" role="alert">
    {{session('pesan')}}
</div>
@endif

<div class="card">
    <div class="card-body">
        <a href="{{ route('dashboard/berita/add') }}" class="btn btn-success mb-3"><i class="fas fa-plus-circle mr-2"></i>Tambah Berita</a>
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($berita as $k)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $k->judul }}
                    </td>
                    <td>{{ $k->isi }}
                    </td>
                    <td><a href="/dashboard/berita/edit/{{ $k->id }}" class="btn btn-primary"><i class="fas fa-pen mr-2"></i>Update</a>
                        <a href="/dashboard/berita/delete/{{ $k->id }}" class="btn btn-danger" onclick="return confirm('apakah akan menghapus data ?')"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection