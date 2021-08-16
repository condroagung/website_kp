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
    <link rel="stylesheet" href="{{('/css/css_jasa.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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

    <div class="container-fluid portofolio">
        <div class="container text-portofolio">
            <p>JASA KARYA KENCANA</p>
        </div>
    </div>

    <div class="container content-portofolio">
        <p class="subtitle-portofolio mb-5 d-flex justify-content-center" style="font-family:'Mali', cursive; font-weight: 500; font-size: 3rem;">Jasa Kami</p>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="... " style="height:80%; width:80%">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="{{('image/Vector.png')}}" class="img-fluid image-berita" alt="..." style="height:80%; width:80%;">
                    <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center mt-3"> Konsultasi Teknologi</h5>
                        <p class="card-text d-flex justify-content-center mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu
                            fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>