<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Uncial+Antiqua&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{('/css/css_nav.css')}}">
    <link rel="stylesheet" href="{{('/css/css_berita.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita:ital,wght@0,400;0,700;0,800;0,900;1,400;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lusitana:wght@400;700&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    @include('navbar')

    <div class="d-flex justify-content-center mt-5">
        <p class="title-produk mt-5">Berita</p>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 search-area mt-3">
                <form action="{{ route('berita') }}">
                    @csrf
                    <div class="input-group mb-5">
                        <input type="text" class="form-control" placeholder="Cari Berita" name="search">
                        <button class="btn btn-warning text-white" type="submit" name="form2">Search</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <div class="container mb-5">
        @if ($berita->count())
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($berita as $k)
            <div class="col">
                <div class="card h-100">
                    <img src="{{('product_image/package.png')}}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $k->judul }}</h5>
                        <p class="card-text"><span class="badge rounded-pill bg-primary">{{ $k->created_at }}</span></p>
                        <p class="card-text">{{ $k->isi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="d-flex justify-content-center">
            <p class="not-found">No Data Found</p>
        </div>
        @endif

        <div class="d-flex justify-content-center mt-3">
            {{ $berita->links() }}
        </div>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>